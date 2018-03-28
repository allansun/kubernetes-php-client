<?php


namespace Kubernetes\Model\Common;

use Kubernetes\Model\AbstractModel;
use Zend\Hydrator\Aggregate\AggregateHydrator;
use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\ExtractionInterface;
use Zend\Hydrator\HydrationInterface;
use Zend\Hydrator\ObjectProperty;
use Zend\Hydrator\Reflection;

class ModelHydrator implements HydrationInterface, ExtractionInterface
{
    /**
     * @var ModelHydrator
     */
    static private $instance;

    /**
     * @var HydrationInterface
     */
    private $hydrator;

    /**
     * @var HydrationInterface
     */
    private $extractor;

    /**
     * ModelHydrator constructor.
     */
    private function __construct()
    {
        $this->hydrator = new AggregateHydrator();

        $this->hydrator->add(new ObjectProperty());
        $this->hydrator->add(new ClassMethods());

        $this->extractor = new Reflection();
    }

    /**
     * @return ModelHydrator
     */
    static public function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new ModelHydrator();
        }

        return static::$instance;
    }

    /**
     * @param object $object
     *
     * @return array|mixed
     */
    public function extract($object)
    {
        if ($object instanceof AbstractModel) {

            $result = $this->extractor->extract($object);

            foreach ($result as $key => &$value) {
                $value = $this->extract($value);
                if (empty($value)) {
                    unset($result[$key]);
                }
            }

            return $result;
        }

        if (is_array($object)) {
            foreach ($object as $key => &$value) {
                $value = $this->extract($value);
            }

            return $object;
        }

        if ($object instanceof \StdClass) {
            return get_object_vars($object);
        }

        return $object;
    }

    /**
     * @param array  $data
     * @param object $object
     *
     * @return AbstractModel
     */
    public function hydrate(array $data, $object)
    {
        return $this->hydrator->hydrate($data, $object);
    }
}
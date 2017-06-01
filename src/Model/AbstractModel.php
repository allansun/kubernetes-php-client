<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

use Kubernetes\Model\Common\ModelHydrator;

/**
 * Class AbstractModel
 *
 * @package Kubernetes\Model
 * @property string $name Most models should have a name, we put here so syntax checker won't complain in AbstractAPI
 */
abstract class AbstractModel
{
    /**
     * AbstractModel constructor.
     *
     * @param \StdClass|array!string $data
     */
    public function __construct($data = null)
    {
        if (is_string($data)) {
            $data = \json_decode($data, true);
        }

        $this->exchangeArray($data);
    }

    /**
     * @param $data
     *
     * @return object
     */
    public function exchangeArray($data)
    {
        return ModelHydrator::getInstance()->hydrate((array)$data, $this);
    }

    public function toJson()
    {
        return \json_encode($this->getArrayCopy());
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        return ModelHydrator::getInstance()->extract($this);
    }

    /**
     * @param mixed   $propertyValue
     * @param string  $class
     * @param boolean $isArray
     *
     * @return array|AbstractModel
     */
    protected function _createPropertyValue($propertyValue, $class = null, $isArray = false)
    {
        if (!$propertyValue) {
            return null;
        }
        if ($isArray && !$this->_isPropertyValueInArray($propertyValue)) {
            $propertyValue = [$propertyValue];
        }

        if ($isArray) {
            foreach ($propertyValue as &$value) {
                $value = $this->__createModelPropertyValue($class, $value);
            }
        } else {
            $propertyValue = $this->__createModelPropertyValue($class, $propertyValue);
        }

        return $propertyValue;
    }

    /**
     * @param mixed $propertyValue
     *
     * @return bool
     */
    protected function _isPropertyValueInArray($propertyValue)
    {
        if (is_array($propertyValue)) {
            foreach ($propertyValue as $value) {
                if (!is_array($value) && !($value instanceof AbstractModel) && !($value instanceof \StdClass)) {
                    return false;
                }
            }
        } else {
            return false;
        }

        return true;
    }

    /**
     * @param $class
     * @param $value
     *
     * @return AbstractModel
     */
    private function __createModelPropertyValue($class = null, $value)
    {
        if ($class) {
            if ($value instanceof \StdClass) {
                $value = get_object_vars($value);
            }
            $value = new $class($value);
        }

        return $value;
    }

}
<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\PropertyInfo\Type;

/**
 * Class AbstractModel
 *
 * @package Kubernetes\Model
 */
abstract class AbstractModel implements ModelInterface
{
    /**
     * TRUE means this object is a simple object contains one basic value, such as intger, string, datetime
     *
     * @var boolean
     */
    protected $isRawObject = false;

    /**
     * @var mixed
     */
    protected $rawData;

    /**
     * @var PropertyInfoExtractor
     */
    static protected $PropertyInfoExtractor;

    /**
     * @var array Cache for reflection results
     */
    static protected $reflectionCache = [];

    /**
     * AbstractModel constructor.
     *
     * @param \StdClass|array!string $data
     */
    public function __construct($data = null)
    {
        if (!static::$PropertyInfoExtractor) {
            $ReflectionExtractor = new ReflectionExtractor();
            $PhpDocExtractor     = new PhpDocExtractor();

            self::$PropertyInfoExtractor = new PropertyInfoExtractor(
                [$ReflectionExtractor],
                [$PhpDocExtractor, $ReflectionExtractor],
                [$PhpDocExtractor],
                [$ReflectionExtractor]
            );
        }


        if (is_string($data)) {
            $data = \json_decode($data, true) ?: $data;
        }

        $this->exchangeArray($data);
    }

    /**
     * @param $data
     *
     * @return self
     */
    public function exchangeArray($data)
    {
        if ($this->isRawObject) {
            $this->rawData = $data;

            return $this;
        } else {
            foreach ((array)$data as $index => $value) {
                if (property_exists($this, $index)) {
                    $this->parseProperty($index, $value);
                }
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return \json_encode($this->getArrayCopy());
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        $arrayCopy = [];
        if ($this->isRawObject) {
            $arrayCopy = $this->rawData;
        } else {
            $properties = self::$PropertyInfoExtractor->getProperties($this);
            foreach ($properties as $property) {
                if (property_exists($this, $property) && null !== $this->$property) {
                    $propertyName = $property;
                    if (0 === strpos($propertyName, '_')) {
                        $propertyName = str_replace('_', '$', $propertyName);
                    }
                    $arrayCopy[$propertyName] = $this->getProperty($this->$property);
                }
            }
        }

        return $arrayCopy;
    }

    protected function getProperty($theProperty)
    {
        $arrayCopy = [];
        if ($theProperty instanceof ModelInterface) {
            /** @var ModelInterface $theProperty */
            $arrayCopy = $theProperty->getArrayCopy();
        } elseif (is_array($theProperty)) {
            foreach ($theProperty as $key => $property) {
                $arrayCopy[$key] = $this->getProperty($property);
            }
        } else {
            $arrayCopy = $theProperty;
        }

        return $arrayCopy;
    }

    /**
     * @param $index
     * @param $value
     *
     * @return $this
     */
    protected function parseProperty($index, $value)
    {
        $propertyTypes = $this->getPropertyTypes($this, $index);

        if ($propertyTypes) {
            foreach ($propertyTypes as $PropertyType) {
                if ($PropertyType->isCollection()) {
                    $values = [];
                    if (true == ($className = $PropertyType->getCollectionValueType()->getClassName())) {
                        foreach ((array)$value as $valueItem) {
                            /** @var ModelInterface $propertyValue */
                            $PropertyValue = new $className($valueItem);
                            if ($PropertyType instanceof ModelInterface && $PropertyValue->isRawObject()) {
                                $values[] = $valueItem;
                            } else {
                                $values[] = $valueItem;
                            }
                        }
                    }

                    if (1 <= count($values)) {
                        $value = $values;
                        break;
                    }
                } elseif ($PropertyType->getClassName()) {
                    $className = $PropertyType->getClassName();
                    /** @var ModelInterface $propertyValue */
                    $PropertyValue = new $className($value);
                    if (!($PropertyType instanceof ModelInterface && $PropertyValue->isRawObject())) {
                        $value = new $className($value);
                    }
                }
            }
        }

        $this->$index = $value;

        return $this;
    }

    /**
     * @param $object
     * @param $index
     *
     * @return Type[]|null
     */
    protected function getPropertyTypes(ModelInterface $object, $index)
    {
        $objectClass = get_class($object);

        if (array_key_exists($objectClass, static::$reflectionCache) &&
            array_key_exists($index, static::$reflectionCache[$objectClass])) {
            $propertyTypes = static::$reflectionCache[$objectClass][$index];
        } else {
            $propertyTypes = static::$PropertyInfoExtractor->getTypes($objectClass, $index);

            static::$reflectionCache[$objectClass][$index] = $propertyTypes;
        }

        return $propertyTypes;
    }

    /**
     * @return bool
     */
    public function isRawObject(): bool
    {
        return $this->isRawObject;
    }

}
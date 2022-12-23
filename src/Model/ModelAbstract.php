<?php

namespace AlphaModule\Model;

use ReflectionClass;

/**
 * Class ModelAbstract
 *
 * @package AlphaModule\ModelAbstract
 */
abstract class ModelAbstract implements ModelInterface
{
    /** */
    public function __construct()
    {
    }

    /**
     * Alias for use with Zend Hydrator
     *
     * @return array<string, string|object>|ModelInterface
     */
    public function getArrayCopy()
    {
        return $this->exchangeArray();
    }

    /**
     * @inheritDoc
     */
    public function exchangeArray(array $properties = [])
    {
        $reflectModel = new ReflectionClass(get_class($this));

        if (empty($properties)) {
            foreach ($reflectModel->getProperties() as $property) {
                $getMethod = method_exists($this, 'get' . ucfirst($property->getName()))
                    ? 'get' . ucfirst($property->getName())
                    : 'is' . ucfirst($property->getName());
                if (method_exists($this, $getMethod)) {
                    $data = $this->$getMethod();
                    if ($data instanceof ModelAbstract) {
                        $data = $data->exchangeArray();
                    }
                    $properties[$property->getName()] = $data;
                }
            }

            return $properties;
        }

        foreach ($reflectModel->getProperties() as $property) {
            $setMethod = 'set' . ucfirst($property->getName());
            if (method_exists($this, $setMethod)) {
                if (!empty($properties[$property->getName()])) {
                    $this->$setMethod($properties[$property->getName()]);
                }
            }
        }

        return $this;
    }
}

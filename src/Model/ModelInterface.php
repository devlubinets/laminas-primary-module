<?php

namespace AlphaModule\Model;

/**
 * Class ModelInterface
 *
 * @package AlphaModule\Model\ModelInterface
 */
interface ModelInterface
{
    /**
     * @param  array $properties
     * @return ModelInterface|array
     */
    public function exchangeArray(array $properties = []);
}

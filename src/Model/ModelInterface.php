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
     * @param array<string, int|object|string> $properties
     * @return ModelInterface|array<string, int|object|string>
     */
    public function exchangeArray(array $properties = []);
}

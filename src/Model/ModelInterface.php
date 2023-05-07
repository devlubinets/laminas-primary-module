<?php

namespace PrimaryModule\Model;

/**
 * Class ModelInterface
 *
 * @package PrimaryModule\Model\ModelInterface
 */
interface ModelInterface
{
    /**
     * @param array<string, int|object|string> $properties
     * @return ModelInterface|array<string, int|object|string>
     */
    public function exchangeArray(array $properties = []);
}

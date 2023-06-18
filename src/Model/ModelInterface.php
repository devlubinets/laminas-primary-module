<?php

namespace AuthModule\Model;

/**
 * Class ModelInterface
 *
 * @package AuthModule\Model\ModelInterface
 */
interface ModelInterface
{
    /**
     * @param array<string, int|object|string> $properties
     * @return ModelInterface|array<string, int|object|string>
     */
    public function exchangeArray(array $properties = []);
}

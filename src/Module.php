<?php

namespace AlphaModule;

/**
 * Class Module
 * @package AlphaModule
 */
class Module
{
    public const VERSION = "0.0.1";
    public const ROUTE_PREFIX = "/module";

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return include __DIR__ . "/../config/module.config.php";
    }
}

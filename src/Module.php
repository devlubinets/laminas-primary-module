<?php

namespace AlphaModule;

/**
 * Class Module
 *
 * @package AlphaModule
 */
class Module
{
    /* Common config section */
    public const MODULE_VERSION = "0.1.0";
    public const MODULE_CONFIG = "alpha-config";

    /* Route config section */
    public const ROUTE_PREFIX = "/alpha-module";
    public const ROUTE_NAME_MODULE = "alpha-module";
    public const ROUTE_NAME_ACTIONS = "actions";
    public const ROUTE_MODULE_CHILD_ACTIONS = "alpha-module/actions";

    /**
     * @return array<string, string>
     */
    public function getConfig(): array
    {
        return include __DIR__ . "/../config/module.config.php";
    }
}

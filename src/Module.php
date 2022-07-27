<?php

namespace AlphaModule;

/**
 * Class Module
 * @package AlphaModule
 */
class Module
{
    public const VERSION = "0.0.2";
    public const ALPHA_CONFIG = "alpha-config";

    public const ROUTE_PREFIX = "/alpha-module";

    public const ROUTE_NAME_MODULE = "alpha-module";
    public const ROUTE_NAME_ACTIONS = "actions";
    public const ROUTE_MODULE_CHILD_ACTIONS = "alpha-module/actions";

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return include __DIR__ . "/../config/module.config.php";
    }
}

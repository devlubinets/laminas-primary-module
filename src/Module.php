<?php

namespace OrmModule;

/**
 * Class Module
 *
 * @package OrmModule
 */
class Module
{
    /* Common config section */
    public const MODULE_VERSION = "0.1.0";
    public const MODULE_CONFIG = "orm-config";

    /* Route config section */
    public const ROUTE_PREFIX = "/orm-module-module";
    public const ROUTE_NAME_MODULE = "orm-module-module";
    public const ROUTE_NAME_ACTIONS = "actions";
    public const ROUTE_MODULE_CHILD_ACTIONS = "orm-module-module/actions";

    /**
     * @return array<string, string>
     */
    public function getConfig(): array
    {
        return include __DIR__ . "/../config/module.config.php";
    }
}

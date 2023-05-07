<?php

namespace PrimaryModule;

/**
 * Class Module
 *
 * @package PrimaryModule
 */
class Module
{
    /* Common config section */
    public const MODULE_VERSION = "0.1.0";
    public const MODULE_CONFIG = "primary-config";

    /* Route config section */
    public const ROUTE_PREFIX = "/primary-module";
    public const ROUTE_NAME_MODULE = "primary-module";
    public const ROUTE_NAME_ACTIONS = "actions";
    public const ROUTE_MODULE_CHILD_ACTIONS = "primary-module/actions";

    /**
     * @return array<string, string>
     */
    public function getConfig(): array
    {
        return include __DIR__ . "/../config/module.config.php";
    }
}

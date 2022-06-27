<?php

namespace IarPortalModule;

/**
 * Class Module
 * @package IarPortalModule
 */
class Module
{
    public const VERSION = "0.0.2";
    public const PORTAL_CONFIG = "portal-config";

    public const ROUTE_PREFIX = "/iar-portal-module";

    public const ROUTE_NAME_MODULE = "iar-portal-module";
    public const ROUTE_NAME_ACTIONS = "actions";
    public const ROUTE_MODULE_CHILD_ACTIONS = "iar-portal-module/actions";

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return include __DIR__ . "/../config/module.config.php";
    }
}

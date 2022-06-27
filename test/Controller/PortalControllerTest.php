<?php

namespace IarPortalModuleTest\Controller;

use IarPortalModule\Controller\PortalController;
use IarPortalModule\Module;
use Exception;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/** */
class PortalControllerTest extends AbstractHttpControllerTestCase
{
    /**  */
    public function setUp(): void
    {
        $this->setApplicationConfig(
            [
                "modules" => [
                    "Laminas\Router",
                    "IarPortalModule",
                ],
                "module_listener_options" => [
                    "use_laminas_loader" => false,
                    "config_cache_enabled" => false,
                    "config_cache_key" => "application.config.cache",
                    "module_map_cache_enabled" => false,
                    "module_map_cache_key" => "application.module.cache",
                ],
            ]
        );
    }

    /**
     * @throws Exception
     */
    public function testDefaultIndexActionCanBeAccessed()
    {
        $this->dispatch(Module::ROUTE_PREFIX);

        $this->assertResponseStatusCode(200);
        $this->assertModuleName("IarPortalModule");
        $this->assertControllerName(PortalController::class);
        $this->assertControllerClass("PortalController");
        $this->assertMatchedRouteName("iar-portal-module");
        $this->assertActionName("index");
    }

    /**
     * @param string $action
     * @dataProvider actionsProvider
     * @throws Exception
     */
    public function testControllerActionsCanBeAccessed(string $action)
    {
        $this->dispatch(Module::ROUTE_PREFIX . "/" . $action);

        $this->assertResponseStatusCode(200);
        $this->assertModuleName("IarPortalModule");
        $this->assertControllerName(PortalController::class);
        $this->assertControllerClass("PortalController");
        $this->assertMatchedRouteName(Module::ROUTE_MODULE_CHILD_ACTIONS);
        $this->assertActionName($action);
    }

    /**
     * @return array[]
     */
    public function actionsProvider(): array
    {
        return [
            ["index"],
        ];
    }
}

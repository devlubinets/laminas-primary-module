<?php

namespace AlphaModuleTest\Controller;

use AlphaModule\Module;
use Exception;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * Class ControllerTest
 * @package Controller
 */
class ControllerTest extends AbstractHttpControllerTestCase
{
    /**  */
    public function setUp(): void
    {
        $this->setApplicationConfig(
            [
                "modules" => [
                    "Laminas\Router",
                    "AlphaModule",
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
    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch(Module::ROUTE_PREFIX);
        $this->assertResponseStatusCode(200);
    }
}

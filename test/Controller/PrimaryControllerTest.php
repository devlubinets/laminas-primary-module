<?php

namespace PrimaryModuleTest\Controller;

use PrimaryModule\Controller\PrimaryController;
use PrimaryModule\Module;
use PrimaryModuleTest\AbstractApplicationTestCase;
use Exception;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/** */
class PrimaryControllerTest extends AbstractApplicationTestCase
{
    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->container->setAllowOverride(true);
        // todo: add override mocks here
        $this->container->setAllowOverride(false);
    }

    /**
     * @throws Exception
     */
    public function testDefaultIndexActionCanBeAccessed()
    {
        $this->dispatch(Module::ROUTE_PREFIX);

        $this->assertResponseStatusCode(200);
        $this->assertModuleName("PrimaryModule");
        $this->assertControllerName(PrimaryController::class);
        $this->assertControllerClass("PrimaryController");
        $this->assertMatchedRouteName("primary-module");
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
        $this->assertModuleName("PrimaryModule");
        $this->assertControllerName(PrimaryController::class);
        $this->assertControllerClass("PrimaryController");
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

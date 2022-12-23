<?php

namespace AlphaModuleTest;

use Laminas\Mvc\ApplicationInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;
use Laminas\Stdlib\ArrayUtils;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * Class AbstractLoansWarehouseApiTestCase
 * @package LoansWarehouseTest\LoansWarehouseApi
 */
class AbstractApplicationTestCase extends AbstractHttpControllerTestCase
{
    /** @var ApplicationInterface mvcApp */
    protected ApplicationInterface $mvcApp;

    /** @var ServiceLocatorInterface $container */
    protected ServiceLocatorInterface $container;

    /**  */
    public function setUp(): void
    {
        $moduleConfig = include __DIR__ . "/../config/module.config.php";
        $moduleConfig["view_manager"]["template_map"]["layout/layout"] =
            __DIR__ . "/../view/alpha-module/layout.phtml";

        $this->setApplicationConfig(
            ArrayUtils::merge(
                include __DIR__ . "/_fixtures/config/application.config.php",
                $moduleConfig
            )
        );

        parent::setUp();

        $this->mvcApp = $this->getApplication();
        $this->container = $this->mvcApp->getServiceManager();
    }

}

<?php

namespace IarPortalModuleTest\Service;

use IarPortalModule\Process\PortalProcess;
use IarPortalModule\Service\PortalService;
use IarPortalModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;

/**  */
class PortalServiceTest extends AbstractApplicationTestCase
{
    /**  */
    public function testServiceCanBeCreatedByFactory()
    {
        $portalService = $this->container->get(PortalService::class);

        $this->assertInstanceOf(PortalService::class, $portalService);
    }

    /**  */
    public function testGetPortalProcess()
    {
        /** @var PortalService $portalService */
        $portalService = $this->container->get(PortalService::class);

        $this->assertInstanceOf(PortalProcess::class, $portalService->getPortalProcess());
    }

    /**  */
    public function testGetPortal()
    {
        $testID = 123;

        /** @var PortalService $portalService */
        $portalService = $this->container->get(PortalService::class);
        $jsonView = $portalService->getPortal($testID);

        $this->assertInstanceOf(JsonModel::class, $jsonView);
        $this->assertEquals($testID, $jsonView->getVariable("id"));
    }
}

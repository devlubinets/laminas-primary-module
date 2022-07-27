<?php

namespace AlphaModuleTest\Service;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Service\AlphaService;
use AlphaModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;

/**  */
class AlphaServiceTest extends AbstractApplicationTestCase
{
    /**  */
    public function testServiceCanBeCreatedByFactory()
    {
        $alphaService = $this->container->get(AlphaService::class);

        $this->assertInstanceOf(AlphaService::class, $alphaService);
    }

    /**  */
    public function testGetAlphaProcess()
    {
        /** @var AlphaService $alphaService */
        $alphaService = $this->container->get(AlphaService::class);

        $this->assertInstanceOf(AlphaProcess::class, $alphaService->getAlphaProcess());
    }

    /**  */
    public function testGetAlpha()
    {
        $testID = 123;

        /** @var AlphaService $alphaService */
        $alphaService = $this->container->get(AlphaService::class);
        $jsonView = $alphaService->getAlpha($testID);

        $this->assertInstanceOf(JsonModel::class, $jsonView);
        $this->assertEquals($testID, $jsonView->getVariable("id"));
    }
}

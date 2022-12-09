<?php

namespace AlphaModuleTest\Service;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Service\AlphaService;
use AlphaModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class AlphaServiceTest extends AbstractApplicationTestCase
{
    /** @var MockObject $alphaProcessMock */
    protected MockObject $alphaProcessMock;

    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->alphaProcessMock = $this->getMockBuilder(AlphaProcess::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->container->setAllowOverride(true);
        $this->container->setService(AlphaProcess::class, $this->alphaProcessMock);
        $this->container->setAllowOverride(false);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testSetGetAlphaProcess()
    {
        /** @var AlphaService $alphaService */
        $alphaService = $this->container->get(AlphaService::class);

        $this->assertInstanceOf(get_class($this->alphaProcessMock), $alphaService->getAlphaProcess());

        $alphaService->setAlphaProcess($this->alphaProcessMock);

        $this->assertInstanceOf(get_class($this->alphaProcessMock), $alphaService->getAlphaProcess());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
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

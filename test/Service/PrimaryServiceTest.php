<?php

namespace PrimaryModuleTest\Service;

use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Service\PrimaryService;
use PrimaryModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class PrimaryServiceTest extends AbstractApplicationTestCase
{
    /** @var MockObject $primaryProcessMock */
    protected MockObject $primaryProcessMock;

    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->primaryProcessMock = $this->getMockBuilder(PrimaryProcess::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->container->setAllowOverride(true);
        $this->container->setService(PrimaryProcess::class, $this->primaryProcessMock);
        $this->container->setAllowOverride(false);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testSetGetPrimaryProcess()
    {
        /** @var PrimaryService $primaryService */
        $primaryService = $this->container->get(PrimaryService::class);

        $this->assertInstanceOf(get_class($this->primaryProcessMock), $primaryService->getPrimaryProcess());

        $primaryService->setPrimaryProcess($this->primaryProcessMock);

        $this->assertInstanceOf(get_class($this->primaryProcessMock), $primaryService->getPrimaryProcess());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testGetPrimary()
    {
        $testID = 123;

        /** @var PrimaryService $primaryService */
        $primaryService = $this->container->get(PrimaryService::class);
        $jsonView = $primaryService->getPrimary($testID);

        $this->assertInstanceOf(JsonModel::class, $jsonView);
        $this->assertEquals($testID, $jsonView->getVariable("id"));
    }
}

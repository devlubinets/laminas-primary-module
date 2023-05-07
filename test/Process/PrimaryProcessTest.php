<?php

namespace PrimaryModuleTest\Process;

use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Repository\PrimaryRepository;
use PrimaryModule\Request\PrimaryRequest;
use PrimaryModuleTest\AbstractApplicationTestCase;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/** */
class PrimaryProcessTest extends AbstractApplicationTestCase
{
    /** @var MockObject $primaryRepositoryMock */
    protected MockObject $primaryRepositoryMock;

    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->primaryRepositoryMock = $this->getMockBuilder(PrimaryRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->container->setAllowOverride(true);
        $this->container->setService(PrimaryRepository::class, $this->primaryRepositoryMock);
        $this->container->setAllowOverride(false);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testSetGetPrimaryProcess()
    {
        /** @var PrimaryProcess $primaryProcess */
        $primaryProcess = $this->container->get(PrimaryProcess::class);

        $this->assertInstanceOf(get_class($this->primaryRepositoryMock), $primaryProcess->getPrimaryRepository());

        $primaryProcess->setPrimaryRepository($this->primaryRepositoryMock);

        $this->assertInstanceOf(get_class($this->primaryRepositoryMock), $primaryProcess->getPrimaryRepository());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testGetPrimary()
    {
        $testID = 123;

        /** @var PrimaryProcess $primaryProcess */
        $primaryProcess = $this->container->get(PrimaryProcess::class);
        $primaryProcess->setRecordID($testID);

        $this->assertEquals($testID, $primaryProcess->getRecordID());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testExecuteReturnsArray()
    {
        /** @var PrimaryProcess $primaryProcess */
        $primaryProcess = $this->container->get(PrimaryProcess::class);

        $this->assertIsObject($primaryProcess->execute());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testGetSetRequest()
    {
        $requestMock = $this->getMockBuilder(PrimaryRequest::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var PrimaryProcess $primaryProcess */
        $primaryProcess = $this->container->get(PrimaryProcess::class);
        $primaryProcess->setRequest($requestMock);

        $this->assertInstanceOf(get_class($requestMock), $primaryProcess->getRequest());
    }
}

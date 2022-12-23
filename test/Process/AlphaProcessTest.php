<?php

namespace AlphaModuleTest\Process;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Repository\AlphaRepository;
use AlphaModule\Request\AlphaRequest;
use AlphaModuleTest\AbstractApplicationTestCase;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/** */
class AlphaProcessTest extends AbstractApplicationTestCase
{
    /** @var MockObject $alphaRepositoryMock */
    protected MockObject $alphaRepositoryMock;

    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->alphaRepositoryMock = $this->getMockBuilder(AlphaRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->container->setAllowOverride(true);
        $this->container->setService(AlphaRepository::class, $this->alphaRepositoryMock);
        $this->container->setAllowOverride(false);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testSetGetAlphaProcess()
    {
        /** @var AlphaProcess $alphaProcess */
        $alphaProcess = $this->container->get(AlphaProcess::class);

        $this->assertInstanceOf(get_class($this->alphaRepositoryMock), $alphaProcess->getAlphaRepository());

        $alphaProcess->setAlphaRepository($this->alphaRepositoryMock);

        $this->assertInstanceOf(get_class($this->alphaRepositoryMock), $alphaProcess->getAlphaRepository());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testGetAlpha()
    {
        $testID = 123;

        /** @var AlphaProcess $alphaProcess */
        $alphaProcess = $this->container->get(AlphaProcess::class);
        $alphaProcess->setRecordID($testID);

        $this->assertEquals($testID, $alphaProcess->getRecordID());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testExecuteReturnsArray()
    {
        /** @var AlphaProcess $alphaProcess */
        $alphaProcess = $this->container->get(AlphaProcess::class);

        $this->assertIsObject($alphaProcess->execute());
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testGetSetRequest()
    {
        $requestMock = $this->getMockBuilder(AlphaRequest::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var AlphaProcess $alphaProcess */
        $alphaProcess = $this->container->get(AlphaProcess::class);
        $alphaProcess->setRequest($requestMock);

        $this->assertInstanceOf(get_class($requestMock), $alphaProcess->getRequest());
    }
}

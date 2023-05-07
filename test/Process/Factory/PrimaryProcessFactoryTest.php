<?php

namespace PrimaryModuleTest\Process\Factory;

use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Repository\PrimaryRepository;
use PrimaryModule\Service\PrimaryService;
use PrimaryModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/** */
class PrimaryProcessFactoryTest extends AbstractApplicationTestCase
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
    public function testProcessCanBeCreatedByFactory()
    {
        $primaryProcess = $this->container->get(PrimaryProcess::class);

        $this->assertInstanceOf(PrimaryProcess::class, $primaryProcess);
    }
}

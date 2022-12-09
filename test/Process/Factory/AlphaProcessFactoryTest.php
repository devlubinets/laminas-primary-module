<?php

namespace AlphaModuleTest\Process\Factory;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Repository\AlphaRepository;
use AlphaModule\Service\AlphaService;
use AlphaModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/** */
class AlphaProcessFactoryTest extends AbstractApplicationTestCase
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
    public function testProcessCanBeCreatedByFactory()
    {
        $alphaProcess = $this->container->get(AlphaProcess::class);

        $this->assertInstanceOf(AlphaProcess::class, $alphaProcess);
    }
}

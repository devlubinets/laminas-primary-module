<?php

namespace AlphaModuleTest\Service\Factory;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Service\AlphaService;
use AlphaModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class AlphaServiceFactoryTest extends AbstractApplicationTestCase
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
    public function testServiceCanBeCreatedByFactory()
    {
        $alphaService = $this->container->get(AlphaService::class);

        $this->assertInstanceOf(AlphaService::class, $alphaService);
    }
}

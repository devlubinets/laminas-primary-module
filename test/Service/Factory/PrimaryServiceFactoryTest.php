<?php

namespace PrimaryModuleTest\Service\Factory;

use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Service\PrimaryService;
use PrimaryModuleTest\AbstractApplicationTestCase;
use Laminas\View\Model\JsonModel;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class PrimaryServiceFactoryTest extends AbstractApplicationTestCase
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
    public function testServiceCanBeCreatedByFactory()
    {
        $primaryService = $this->container->get(PrimaryService::class);

        $this->assertInstanceOf(PrimaryService::class, $primaryService);
    }
}

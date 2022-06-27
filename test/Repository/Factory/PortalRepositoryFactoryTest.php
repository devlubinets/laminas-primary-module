<?php

namespace IarPortalModuleTest\Repository\Factory;

use IarPortalModule\Repository\PortalRepository;
use IarPortalModuleTest\AbstractApplicationTestCase;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class PortalRepositoryFactoryTest extends AbstractApplicationTestCase
{
    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->container->setAllowOverride(true);
        // todo: add override mocks here
        $this->container->setAllowOverride(false);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function testFactoryCreatesProcess()
    {
        $this->assertInstanceOf(
            PortalRepository::class,
            $this->container->get("ServiceManager")->get(PortalRepository::class)
        );
    }
}

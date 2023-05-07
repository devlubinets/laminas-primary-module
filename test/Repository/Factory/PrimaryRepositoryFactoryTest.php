<?php

namespace PrimaryModuleTest\Repository\Factory;

use PrimaryModule\Model\PrimaryModel;
use PrimaryModule\Repository\PrimaryRepository;
use PrimaryModuleTest\AbstractApplicationTestCase;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class PrimaryRepositoryFactoryTest extends AbstractApplicationTestCase
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
            PrimaryRepository::class,
            $this->container->get("ServiceManager")->get(PrimaryRepository::class)
        );
    }
}

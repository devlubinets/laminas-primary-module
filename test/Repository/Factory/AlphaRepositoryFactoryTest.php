<?php

namespace AlphaModuleTest\Repository\Factory;

use AlphaModule\Repository\AlphaRepository;
use AlphaModuleTest\AbstractApplicationTestCase;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class AlphaRepositoryFactoryTest extends AbstractApplicationTestCase
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
            AlphaRepository::class,
            $this->container->get("ServiceManager")->get(AlphaRepository::class)
        );
    }
}

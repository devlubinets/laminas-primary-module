<?php

namespace AlphaModuleTest\Repository;

use AlphaModule\Model\AlphaModel;
use AlphaModule\Repository\AlphaRepository;
use AlphaModuleTest\AbstractApplicationTestCase;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class AlphaRepositoryTest extends AbstractApplicationTestCase
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
    public function testFindAlphaByID()
    {
        $alphaRepository = $this->container->get(AlphaRepository::class);
        $alphaID = 123;

        $this->assertInstanceOf(AlphaModel::class, $alphaRepository->findAlphaByID($alphaID));
        $this->assertEquals($alphaID, $alphaRepository->findAlphaByID($alphaID)->getAlphaID());
    }
}

<?php

namespace PrimaryModuleTest\Repository;

use PrimaryModule\Model\PrimaryModel;
use PrimaryModule\Repository\PrimaryRepository;
use PrimaryModuleTest\AbstractApplicationTestCase;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**  */
class PrimaryRepositoryTest extends AbstractApplicationTestCase
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
    public function testFindPrimaryByID()
    {
        $primaryRepository = $this->container->get(PrimaryRepository::class);
        $primaryID = 123;

        $this->assertInstanceOf(PrimaryModel::class, $primaryRepository->findPrimaryByID($primaryID));
        $this->assertEquals($primaryID, $primaryRepository->findPrimaryByID($primaryID)->getPrimaryID());
    }
}

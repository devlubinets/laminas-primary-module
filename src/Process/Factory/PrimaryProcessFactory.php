<?php

namespace PrimaryModule\Process\Factory;

use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Repository\PrimaryRepository;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class PrimaryProcessFactory
 *
 * @package PrimaryModule\Process\Factory\PrimaryProcessFactory
 */
class PrimaryProcessFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array<string, string>|null $options
     * @return PrimaryProcess
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): PrimaryProcess
    {
        /** @var PrimaryRepository $primaryRepository */
        $primaryRepository = $container->get(PrimaryRepository::class);

        return new PrimaryProcess($primaryRepository);
    }
}

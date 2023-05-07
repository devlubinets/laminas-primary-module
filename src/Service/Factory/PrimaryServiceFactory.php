<?php

namespace PrimaryModule\Service\Factory;

use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Service\PrimaryService;
use Interop\Container\ContainerInterface;
use Laminas\Config\Config;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class PrimaryServiceFactory
 *
 * @package PrimaryModule\Service\Factory\PrimaryServiceFactory
 */
class PrimaryServiceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array<string, string>|null $options
     * @return PrimaryService
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): PrimaryService
    {
        /** @var PrimaryProcess $primaryProcess */
        $primaryProcess = $container->get(PrimaryProcess::class);

        /** @var array<string, int|Config|string> $config */
        $config = $container->get("config");

        return new PrimaryService(
            new Config($config),
            $primaryProcess
        );
    }
}

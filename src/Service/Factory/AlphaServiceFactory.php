<?php

namespace AlphaModule\Service\Factory;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Service\AlphaService;
use Interop\Container\ContainerInterface;
use Laminas\Config\Config;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class AlphaServiceFactory
 *
 * @package AlphaModule\Service\Factory\AlphaServiceFactory
 */
class AlphaServiceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array<string, string>|null $options
     * @return AlphaService
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): AlphaService
    {
        return new AlphaService(
            new Config($container->get("config")),
            $container->get(AlphaProcess::class)
        );
    }
}

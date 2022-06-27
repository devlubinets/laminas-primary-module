<?php

namespace IarPortalModule\Service\Factory;

use IarPortalModule\Process\PortalProcess;
use IarPortalModule\Service\PortalService;
use Interop\Container\ContainerInterface;
use Laminas\Config\Config;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class PortalServiceFactory
 * @package IarPortalModule\Service\Factory\PortalServiceFactory
 */
class PortalServiceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PortalService
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): PortalService
    {
        return new PortalService(new Config($container->get("config")), $container->get(PortalProcess::class));
    }
}

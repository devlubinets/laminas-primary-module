<?php

namespace IarPortalModule\Process\Factory;

use IarPortalModule\Process\PortalProcess;
use IarPortalModule\Repository\PortalRepository;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class PortalProcessFactory
 * @package IarPortalModule\Process\Factory\PortalProcessFactory
 */
class PortalProcessFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PortalProcess
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new PortalProcess($container->get(PortalRepository::class));
    }
}
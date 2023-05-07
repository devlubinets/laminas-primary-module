<?php

namespace PrimaryModule\Service\Factory;

use PrimaryModule\Service\PrimaryService;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

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
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): PrimaryService
    {

        return new PrimaryService();
    }
}

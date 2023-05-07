<?php

namespace PrimaryModule\Controller\Factory;

use PrimaryModule\Controller\PrimaryController;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * Class PrimaryControllerFactory
 *
 * @package PrimaryModule\Controller\Factory
 */
class PrimaryControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array<string, string>|null $options
     * @return PrimaryController
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): PrimaryController
    {
        return new PrimaryController();
    }
}

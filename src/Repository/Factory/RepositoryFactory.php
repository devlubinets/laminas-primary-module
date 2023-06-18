<?php

namespace AuthModule\Repository\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * Class RepositoryFactory
 *
 * @package AuthModule\Repository\Factory\RepositoryFactory
 */
class RepositoryFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array<string, string>|null $options
     * @return object|void
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new $requestedName();
    }
}

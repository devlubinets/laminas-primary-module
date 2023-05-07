<?php

namespace PrimaryModule\Process\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

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
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): object
    {

        return new $requestedName;
    }
}

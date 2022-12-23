<?php

namespace AlphaModule\Controller\Factory;

use AlphaModule\Controller\AlphaController;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * Class AlphaControllerFactory
 *
 * @package AlphaModule\Controller\Factory
 */
class AlphaControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array<string, string>|null $options
     * @return AlphaController
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): AlphaController
    {
        return new AlphaController();
    }
}

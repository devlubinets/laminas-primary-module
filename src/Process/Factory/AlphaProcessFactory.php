<?php

namespace AlphaModule\Process\Factory;

use AlphaModule\Process\AlphaProcess;
use AlphaModule\Repository\AlphaRepository;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class AlphaProcessFactory
 *
 * @package AlphaModule\Process\Factory\AlphaProcessFactory
 */
class AlphaProcessFactory implements FactoryInterface
{
    /**
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  array|null         $options
     * @return AlphaProcess
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): AlphaProcess
    {
        return new AlphaProcess($container->get(AlphaRepository::class));
    }
}
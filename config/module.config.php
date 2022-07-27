<?php

namespace AlphaModule;

use AlphaModule\Controller\AlphaController;
use AlphaModule\Controller\Factory\AlphaControllerFactory;
use AlphaModule\Process\AlphaProcess;
use AlphaModule\Process\Factory\AlphaProcessFactory;
use AlphaModule\Repository\AlphaRepository;
use AlphaModule\Repository\Factory\RepositoryFactory;
use AlphaModule\Service\AlphaService;
use AlphaModule\Service\Factory\AlphaServiceFactory;
use Laminas\Router\Http\Segment;

return [
    "router" => [
        "routes" => [
            Module::ROUTE_NAME_MODULE => [
                "type" => Segment::class,
                "options" => [
                    "route" => Module::ROUTE_PREFIX,
                    "defaults" => [
                        "controller" => AlphaController::class,
                        "action" => "index",
                    ],
                ],
                "may_terminate" => true,
                "child_routes" => [
                    Module::ROUTE_NAME_ACTIONS => [
                        "type" => Segment::class,
                        "options" => [
                            "route" => "/:action[/:id]",
                            "constraints" => [
                                "action" => "[a-zA-Z][a-zA-Z0-9_-]*",
                                "id" => "[0-9]+",
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    "controllers" => [
        "factories" => [
            AlphaController::class => AlphaControllerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            AlphaProcess::class => AlphaProcessFactory::class,
            AlphaRepository::class => RepositoryFactory::class,
            AlphaService::class => AlphaServiceFactory::class,
        ],
    ],
    "view_manager" => [
        "not_found_template" => "error/404",
        "exception_template" => "error/index",
        "template_map" => [
            "layout/layout" => __DIR__ . "/../view/alpha-module/layout.phtml",
            "error/404" => __DIR__ . "/../view/alpha-module/error/404.phtml",
            "error/index" => __DIR__ . "/../view/alpha-module/error/index.phtml",
        ],
        "template_path_stack" => [
            __DIR__ . "/../view",
        ],
    ],
];

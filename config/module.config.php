<?php

namespace AuthModule;

use AuthModule\Controller\AuthController;
use AuthModule\Controller\Factory\AuthControllerFactory;
use AuthModule\Process\AuthProcess;
use AuthModule\Process\Factory\AuthProcessFactory;
use AuthModule\Repository\AuthRepository;
use AuthModule\Repository\Factory\RepositoryFactory;
use AuthModule\Service\AuthService;
use AuthModule\Service\Factory\AuthServiceFactory;
use Laminas\Router\Http\Segment;

return [
    "router" => [
        "routes" => [
            Module::ROUTE_NAME_MODULE => [
                "type" => Segment::class,
                "options" => [
                    "route" => Module::ROUTE_PREFIX,
                    "defaults" => [
                        "controller" => AuthController::class,
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
            AuthController::class => AuthControllerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            AuthProcess::class => AuthProcessFactory::class,
            AuthRepository::class => RepositoryFactory::class,
            AuthService::class => AuthServiceFactory::class,
        ],
    ],
    "view_manager" => [
        "not_found_template" => "error/404",
        "exception_template" => "error/index",
        "template_map" => [
            "layout/layout" => __DIR__ . "/../view/auth-module/layout.phtml",
            "error/404" => __DIR__ . "/../view/auth-module/error/404.phtml",
            "error/index" => __DIR__ . "/../view/auth-module/error/index.phtml",
        ],
        "template_path_stack" => [
            __DIR__ . "/../view",
        ],
    ],
];

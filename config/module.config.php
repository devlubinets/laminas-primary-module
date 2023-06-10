<?php

namespace OrmModule;

use OrmModule\Controller\OrmController;
use OrmModule\Controller\Factory\OrmControllerFactory;
use OrmModule\Process\OrmProcess;
use OrmModule\Process\Factory\OrmProcessFactory;
use OrmModule\Repository\OrmRepository;
use OrmModule\Repository\Factory\RepositoryFactory;
use OrmModule\Service\OrmService;
use OrmModule\Service\Factory\OrmServiceFactory;
use Laminas\Router\Http\Segment;

return [
    "router" => [
        "routes" => [
            Module::ROUTE_NAME_MODULE => [
                "type" => Segment::class,
                "options" => [
                    "route" => Module::ROUTE_PREFIX,
                    "defaults" => [
                        "controller" => OrmController::class,
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
            OrmController::class => OrmControllerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            OrmProcess::class => OrmProcessFactory::class,
            OrmRepository::class => RepositoryFactory::class,
            OrmService::class => OrmServiceFactory::class,
        ],
    ],
    "view_manager" => [
        "not_found_template" => "error/404",
        "exception_template" => "error/index",
        "template_map" => [
            "layout/layout" => __DIR__ . "/../view/orm-module-module/layout.phtml",
            "error/404" => __DIR__ . "/../view/orm-module-module/error/404.phtml",
            "error/index" => __DIR__ . "/../view/orm-module-module/error/index.phtml",
        ],
        "template_path_stack" => [
            __DIR__ . "/../view",
        ],
    ],
];

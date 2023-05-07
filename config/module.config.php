<?php

namespace PrimaryModule;

use PrimaryModule\Controller\PrimaryController;
use PrimaryModule\Controller\Factory\PrimaryControllerFactory;
use PrimaryModule\Process\PrimaryProcess;
use PrimaryModule\Process\Factory\PrimaryProcessFactory;
use PrimaryModule\Repository\PrimaryRepository;
use PrimaryModule\Repository\Factory\RepositoryFactory;
use PrimaryModule\Service\PrimaryService;
use PrimaryModule\Service\Factory\PrimaryServiceFactory;
use Laminas\Router\Http\Segment;

return [
    "router" => [
        "routes" => [
            Module::ROUTE_NAME_MODULE => [
                "type" => Segment::class,
                "options" => [
                    "route" => Module::ROUTE_PREFIX,
                    "defaults" => [
                        "controller" => PrimaryController::class,
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
            PrimaryController::class => PrimaryControllerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            PrimaryProcess::class => PrimaryProcessFactory::class,
            PrimaryRepository::class => RepositoryFactory::class,
            PrimaryService::class => PrimaryServiceFactory::class,
        ],
    ],
    "view_manager" => [
        "not_found_template" => "error/404",
        "exception_template" => "error/index",
        "template_map" => [
            "layout/layout" => __DIR__ . "/../view/primary-module/layout.phtml",
            "error/404" => __DIR__ . "/../view/primary-module/error/404.phtml",
            "error/index" => __DIR__ . "/../view/primary-module/error/index.phtml",
        ],
        "template_path_stack" => [
            __DIR__ . "/../view",
        ],
    ],
];

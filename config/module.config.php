<?php

namespace IarPortalModule;

use IarPortalModule\Controller\PortalController;
use IarPortalModule\Controller\Factory\PortalControllerFactory;
use IarPortalModule\Process\PortalProcess;
use IarPortalModule\Process\Factory\PortalProcessFactory;
use IarPortalModule\Repository\PortalRepository;
use IarPortalModule\Repository\Factory\RepositoryFactory;
use IarPortalModule\Service\PortalService;
use IarPortalModule\Service\Factory\PortalServiceFactory;
use Laminas\Router\Http\Segment;

return [
    "router" => [
        "routes" => [
            Module::ROUTE_NAME_MODULE => [
                "type" => Segment::class,
                "options" => [
                    "route" => Module::ROUTE_PREFIX,
                    "defaults" => [
                        "controller" => PortalController::class,
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
            PortalController::class => PortalControllerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            PortalProcess::class => PortalProcessFactory::class,
            PortalRepository::class => RepositoryFactory::class,
            PortalService::class => PortalServiceFactory::class,
        ],
    ],
    "view_manager" => [
        "not_found_template" => "error/404",
        "exception_template" => "error/index",
        "template_map" => [
            "layout/layout" => __DIR__ . "/../view/iar-portal-module/layout.phtml",
            "error/404" => __DIR__ . "/../view/iar-portal-module/error/404.phtml",
            "error/index" => __DIR__ . "/../view/iar-portal-module/error/index.phtml",
        ],
        "template_path_stack" => [
            __DIR__ . "/../view",
        ],
    ],
];

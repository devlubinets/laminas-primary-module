<?php

namespace AlphaModule;

use AlphaModule\Controller\AlphaController;
use AlphaModule\Controller\Factory\AlphaControllerFactory;

return [
    "controllers" => [
        "factories" => [
            AlphaController::class => AlphaControllerFactory::class,
        ],
    ],
    "router" => [
        "routes" => [
            "module" => [
                "type" => "Literal",
                "options" => [
                    "route" => Module::ROUTE_PREFIX,
                    "defaults" => [
                        "controller" => AlphaController::class,
                        "action" => "index",
                    ],
                ],
                "may_terminate" => true,
            ],
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

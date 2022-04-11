<?php

return [
    "modules" => [
        "Laminas\ZendFrameworkBridge",
        "Laminas\Router",
    ],
    "module_listener_options" => [
        "module_paths" => [
            "./module",
            "./vendor",
        ],

        "config_glob_paths" => [
            realpath(__DIR__) . "/autoload/{{,*.}global,{,*.}local}.php",
        ],

        "config_cache_enabled" => false,
        "module_map_cache_enabled" => false,
    ],
];

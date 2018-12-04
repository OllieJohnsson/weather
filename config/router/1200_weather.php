<?php


return [
    "mount" => "weather",
    "routes" => [
        [
            "info" => "Väder",
            "path" => "",
            "handler" => "\Oliver\Controller\WeatherController",
        ],
        [
            "info" => "Väder rest API",
            "mount" => "api",
            "handler" => "\Oliver\Controller\WeatherJsonController",
        ],
        [
            "info" => "Väder dokumentation",
            "path" => "documentation",
            "handler" => "\Anax\Content\FileBasedContentController",
        ],
    ]
];

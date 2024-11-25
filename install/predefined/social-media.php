<?php

$socialMediaModel = [
    "model" => [
        "preview" => [],
        "name" => "socialmedia",
        "label" => "Social Media",
        "info" => "",
        "type" => "collection",
        "fields" => [
            [
                "name" => "social_media",
                "type" => "select",
                "label" => "Social Media",
                "info" => "",
                "group" => "",
                "i18n" => false,
                "required" => true,
                "multiple" => false,
                "meta" => [],
                "opts" => [
                    "options" => ["Instagram", "Facebook", "Github", "Youtube", "LinkedIn"],
                    "multiple" => false,
                ],
            ],
            [
                "name" => "link",
                "type" => "text",
                "label" => "Link",
                "info" => "",
                "group" => "",
                "i18n" => false,
                "required" => true,
                "multiple" => false,
                "meta" => [],
                "opts" => [],
            ],
        ],
        "group" => "",
        "meta" => null,
        "_created" => time(),
        "_modified" => time(),
        "color" => null,
        "revisions" => false,
    ],
    "isUpdate" => false,
];

<?php

$newsletterListModel = [
    "model" => [
        "preview" => [],
        "name" => "newsletterlist",
        "label" => "Newsletter List",
        "info" => "",
        "type" => "collection",
        "fields" => [
            [
                "name" => "email",
                "type" => "text",
                "label" => "Email",
                "info" => "",
                "group" => "",
                "i18n" => false,
                "required" => true,
                "multiple" => false,
                "meta" => [],
                "opts" => [
                    "multiline" => false,
                    "showCount" => true,
                    "readonly" => false,
                    "placeholder" => null,
                    "minlength" => null,
                    "maxlength" => null,
                    "list" => null,
                ],
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

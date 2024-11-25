<?php

$contactMessagesModel = [
    "model" => [
        "preview" => [],
        "name" => "contactmessages",
        "label" => "Contact Messages",
        "info" => "",
        "type" => "collection",
        "fields" => [
            [
                "name" => "name",
                "type" => "text",
                "label" => "Name",
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
            [
                "name" => "subject",
                "type" => "text",
                "label" => "Subject",
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
            [
                "name" => "message",
                "type" => "text",
                "label" => "Message",
                "info" => "",
                "group" => "",
                "i18n" => false,
                "required" => true,
                "multiple" => false,
                "meta" => [],
                "opts" => [
                    "multiline" => true,
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

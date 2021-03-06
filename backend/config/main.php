<?php

return [
    'id'                  => \EngineCore\enums\AppEnum::BACKEND,
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap'           => [
        'log',
    ],
    'components'          => [
        'request'    => [
            'csrfParam' => '_csrf-backend',
        ],
        'user'       => [
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session'    => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log'        => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
//            'suffix' => '.html',
        ],
    ],
];

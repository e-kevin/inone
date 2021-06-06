<?php

return [
    'id'                  => \EngineCore\enums\AppEnum::CONSOLE,
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => [
        'log',
    ],
    'controllerNamespace' => 'console\controllers',
    'controllerMap'       => [
        'fixture' => [
            'class'     => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
        ],
        'extension' => [
            'class' => 'EngineCore\console\controllers\ExtensionController',
        ],
    ],
    'components'          => [
        'log' => [
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

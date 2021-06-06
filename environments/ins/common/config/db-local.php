<?php

return [
    'components' => [
        'db' => [
            'class'               => 'yii\db\Connection',
            'dsn'                 => 'mysql:host=localhost;dbname=inOne',
            'username'            => 'root',
            'password'            => '',
            'charset'             => 'utf8',
            'tablePrefix'         => 'io_',
            'enableSchemaCache'   => false, // 关闭数据库元数据缓存
            'schemaCacheDuration' => 3600, // 数据库元数据缓存持续时间
        ],
    ],
];
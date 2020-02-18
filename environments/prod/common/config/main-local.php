<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=inOne',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'io_',
            'enableSchemaCache' => true, // 开启模式缓存
            'schemaCacheDuration' => 3600, // 模式缓存持续时间
            'schemaCache' => 'schemaCache', // 使用的缓存组件名，缺省为 'cache'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
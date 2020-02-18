<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap'  => [
        'initEngineCore' => function () {
            // 创建并确保Ec实例继承于'EngineCore\EngineCore'类
            \yii\di\Instance::ensure('EngineCore\Ec', 'EngineCore\EngineCore');
        },
    ],
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'schemaCache'  => [
            'class'     => 'yii\caching\FileCache',
            'keyPrefix' => 'scheme_', //统一缓存目录管理缓存文件,如果注释此设置,缓存文件则会自动分配至不同文件夹里
        ],
        // 公共缓存组件
        'commonCache'  => [
            'class'     => 'yii\caching\FileCache',
            'cachePath' => '@common/runtime/cache',
        ],
//        'session' => [
//            // 如果需要数据库存取$_SESSION会话数据，请自行安装该数据库迁移[[\yii\db\Migration\m160313_153426_session_init]]
//            'class' => 'yii\web\DbSession',
//        ],
        'security'     => [
            'passwordHashStrategy' => 'password_hash', // 生成密码的方法，必须PHP版本>=5.5.0，否则注释该行
        ],
        'assetManager' => [
//            'linkAssets' => true, // win系统不支持符号链接，linux系统可按需要配置
        ],
    ],
    'timeZone'   => 'PRC',
];

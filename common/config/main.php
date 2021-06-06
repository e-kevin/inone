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
    'name'       => 'inOne',
    'timeZone'   => 'PRC', // todo 改为扩展方式配置
    'language'            => 'zh-CN',
    'components' => [
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n'         => [
            'translations' => [
                // 默认翻译配置，没有找到翻译文件，则原样返回
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                ],
            ],
        ],
        // todo 改为扩展方式安装
        //        'session' => [
        //            // 如果需要数据库存取$_SESSION会话数据，请自行安装该数据库迁移[[\yii\db\Migration\m160313_153426_session_init]]
        //            'class' => 'yii\web\DbSession',
        //        ],
        // todo 改为扩展方式判断
        'assetManager' => [
//            'linkAssets' => true, // win系统不支持符号链接，linux系统可按需要配置
        ],
    ],
];

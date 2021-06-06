<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ],
    'bootstrap'  => [
        'installation',
    ],
    'modules'    => [
        /**
         * 安装向导模块所需的其它配置会自动加载，如有需要，可以在这里自定义其它数据
         *
         * 已有的配置数据参见：
         * @see \EngineCore\modules\installation\Info::getConfig()
         *
         * 其他配置的自动加载是通过调用`\EngineCore\Ec::$service->getExtension()->entity()->loadConfig()`方法实现
         * @see \EngineCore\extension\entity\ExtensionEntity::loadConfig()
         * @see \EngineCore\modules\installation\Module::init()
         */
        'installation' => [
            'class' => '\EngineCore\modules\installation\Module',
        ],
    ],
];

if (!YII_ENV_TEST) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class'      => 'yii\debug\Module',
        'allowedIPs' => [
            '127.0.0.1',
            '::1',
            '192.168.20.*',
        ],
    ];
}

return $config;
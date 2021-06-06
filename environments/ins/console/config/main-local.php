<?php

return [
    'controllerMap' => [
        /**
         * 安装向导控制器所需的其它配置会自动加载
         *
         * 已有的配置数据参见：
         * @see \EngineCore\modules\installation\Info::getConfig()
         *
         * 其他配置的自动加载是通过调用`\EngineCore\Ec::$service->getExtension()->entity()->loadConfig()`方法实现
         * @see \EngineCore\extension\entity\ExtensionEntity::loadConfig()
         * @see \EngineCore\modules\installation\console\InstallationController::init()
         */
        'installation' => [
            'class' => 'EngineCore\modules\installation\console\InstallationController',
        ],
    ],
];
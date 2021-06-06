<?php

use EngineCore\extension\setting\SettingProviderInterface;

return [
    'container' => [
        'definitions' => [
            'EngineCore\modules\installation\helpers\InstallerHelper' => [
                /**
                 * 默认需要安装的扩展，格式参见
                 * @see \EngineCore\modules\installation\helpers\InstallerHelper::setDefaultExtensions()
                 */
                'defaultExtensions' => [
                    'engine-core/module-extension' => [ // 用于管理系统扩展，建议下载安装
                        'app' => 'backend',
                    ],
                    'engine-core/controller-backend-site' => [ // 后台首页
                        'app' => 'backend',
                    ],
                ],
            ],
            // 默认采用文件方式存储系统设置数据
            'SettingProvider' => [
                'class' => 'EngineCore\extension\setting\FileProvider',
            ],
            // 默认采用文件方式存储系统菜单数据
            'MenuProvider' => [
                'class' => 'EngineCore\extension\menu\FileProvider',
            ],
        ],
    ],
    'params'     => [
        SettingProviderInterface::SETTING_KEY => [
            // 系统默认主题
            SettingProviderInterface::DEFAULT_THEME => [
                'value' => 'engine-core/theme-basic',
                'extra' => 'engine-core/theme-basic:engine-core/theme-basic',
            ],
        ],
    ],
];
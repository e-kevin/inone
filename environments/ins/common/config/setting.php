<?php
/**
 * 文件方式存储系统设置数据
 *
 * 默认的设置数据可查看设置数据提供器的默认配置。
 * @see \EngineCore\extension\setting\SettingProviderTrait::getDefaultConfig()
 *
 * 设置方式可参考：
 * @see \EngineCore\services\extension\Environment::flushSettingFile()
 *
 * 或只更改下列相应配置里的`'value'`值即可。
 *
 * 更多详情请查看 @see \EngineCore\extension\setting\SettingProviderInterface
 */

use EngineCore\extension\setting\SettingProviderInterface;

return [
    SettingProviderInterface::SITE_TITLE => [
        'value' => '',
    ],
    SettingProviderInterface::SITE_DESCRIPTION => [
        'value' => '',
    ],
    SettingProviderInterface::SITE_KEYWORD => [
        'value' => '',
    ],
    SettingProviderInterface::SITE_ICP => [
        'value' => '',
    ],
    SettingProviderInterface::DEFAULT_THEME => [
        'value' => '',
    ],
];
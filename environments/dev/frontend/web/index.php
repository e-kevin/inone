<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');

$loader = new EngineCore\ConfigurationLoader(
    __DIR__ . '/../config/_all.php',
    [
        'yii'              => __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php',
        'common/bootstrap' => __DIR__ . '/../../common/config/bootstrap.php',
        'app/bootstrap'    => __DIR__ . '/../config/bootstrap.php',
    ],
    [
        'extensions/config' => __DIR__ . '/../../extensions/config.php',
        'common/main'       => __DIR__ . '/../../common/config/main.php',
        'common/db-local'   => __DIR__ . '/../../common/config/db-local.php',
        'common/extension'  => __DIR__ . '/../../common/config/extension.php',
        'common/main-local' => __DIR__ . '/../../common/config/main-local.php',
        'app/main'          => __DIR__ . '/../config/main.php',
        'app/extension'     => __DIR__ . '/../config/extension.php',
        'app/main-local'    => __DIR__ . '/../config/main-local.php',
    ],
    [
        'common/params'       => __DIR__ . '/../../common/config/params.php',
        'common/params-local' => __DIR__ . '/../../common/config/params-local.php',
        'app/params'          => __DIR__ . '/../config/params.php',
        'app/params-local'    => __DIR__ . '/../config/params-local.php',
    ]
);

(new yii\web\Application($loader->getConfig()))->run();
<?php

return [
    'controllerMap' => [
        'environment' => [
            'class' => '\\extensions\\enginecore\\console\\controllers\\environment\\Controller',
        ],
    ],
    'aliases'       => [
        '@extensions/enginecore/console/controllers/environment' => '@extensions/enginecore/console-controller-environment/scr',
    ],
];
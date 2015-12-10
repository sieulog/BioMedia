<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'vi-VN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',
            'password' => 'nguyentuansieu',
            'port' => 6379,
            'database' => 0,
        ],
        'cache' => [
            'class' => 'yii\redis\Cache',
            'redis' => [
                'hostname' => '127.0.0.1',
                'password' => 'nguyentuansieu',
                'port' => 6379,
                'database' => 0,
            ]
        ],
        'session' => [
            'class' => 'yii\redis\Session',
            'redis' => 'redis'
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                        'backend' => 'backend.php',
                        'frontend' => 'frontend.php',
                        'app/error' => 'error.php',
                    ],
                ],
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
    ],
];

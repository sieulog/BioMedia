<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl' => '/',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'thumbs/<path:.*>' => 'frontend/thumb',
                [
                    'pattern' => '<slug:[\w\-]+>',
                    'route' => 'page/view',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '<slug:[\w\-]+>',
                    'route' => 'category/view',
                    'suffix' => ''
                ],
                [
                    'pattern' => '<cslug:[\w\-]+>/<pslug:[\w\-]+>',
                    'route' => 'post/view',
                    'suffix' => '.html'
                ],
            ],
        ],
        'imageCache' => [
            'class' => 'iutbay\yii2imagecache\ImageCache',
            'sourcePath' => '@app/web/uploads',
            'sourceUrl' => '@web/uploads',
            'thumbsPath' => '@app/web/thumbs',
            'thumbsUrl' => '@web/thumbs',
            'sizes' => [
                'post' => [280, 140],
                'fpartner' => [135,48],
                'product_detail' => [300,200],
                'docquyen' => [262,227]
            ],
        ],
    ],
    'params' => $params,
];

<?php

return [
    'id' => 'PageCache',
    'basePath' => __DIR__,
    'controllerNamespace' => 'app\pageCacheHeaderAlreadySent\controllers',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'test',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'app\pageCacheHeaderAlreadySent\models\User',
            'enableAutoLogin' => false,
            'enableSession' => false,
            'loginUrl' => null,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
              'GET users' => 'user/index',
            ],
        ],
    ],
];

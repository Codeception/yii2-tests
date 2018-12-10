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

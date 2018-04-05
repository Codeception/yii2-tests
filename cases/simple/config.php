<?php
return [
    'id' => 'Simple',
    'basePath' => __DIR__,
    'controllerNamespace' => 'app\simple\controllers',
    'components' => [
        'request' => [
            'enableCsrfValidation' => false,
            'cookieValidationKey' => 'test'
        ]
    ]
];
<?php
return [
    'id' => 'Simple',
    'basePath' => __DIR__,
    'bootstrap' => function(yii\web\Application $application) {
        $application->db->open();
    },
    'components' => [
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'sqlite:' . \tests\helpers\SqlliteHelper::getTmpFile(),
        ],
    ],
];
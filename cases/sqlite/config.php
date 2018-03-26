<?php
return [
    'id' => 'Simple',
    'basePath' => __DIR__,

    'components' => [
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'sqlite:' . sys_get_temp_dir() . '/file'
        ],
        'db1' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'sqlite:' . sys_get_temp_dir() . '/file1'
        ],
        'db21' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'sqlite:' . sys_get_temp_dir() . '/file2'
        ],
        'db22' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'sqlite:' . sys_get_temp_dir() . '/file2'
        ]
    ]
];
<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        // 缓存配置
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        // 数据库配置
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'sic_',
        ],
        // // 主从库配置
        // 'db' => [
        //     'class' => 'yii\db\Connection',
        
        //     // 主库的配置
        //     'dsn' => 'mysql:host=localhost;dbname=yii2',
        //     'username' => 'root',
        //     'password' => '',
        //     'charset' => 'utf8',
        //     'tablePrefix' => 'my_',
        
        //     // 从库的通用配置
        //     'slaveConfig' => [
        //         'username' => 'slave',
        //         'password' => '',
        //         'attributes' => [
        //             // 使用一个更小的连接超时
        //             PDO::ATTR_TIMEOUT => 10,
        //         ],
        //     ],
        //     // 从库的配置列表
        //     'slaves' => [
        //         ['dsn' => 'dsn for slave server 1'],
        //         ['dsn' => 'dsn for slave server 2'],
        //         ['dsn' => 'dsn for slave server 3'],
        //         ['dsn' => 'dsn for slave server 4'],
        //     ],
        // ],
        // 路由配置
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],

        // 多语言配置
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],

        // 日志
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

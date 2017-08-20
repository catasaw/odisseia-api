<?php
/**
 * Created by PhpStorm.
 * User: catalinasierrazamudio
 * Date: 20/08/17
 * Time: 18:08
 */
return [
    'meta' => [
        'entity_path' => [
            'src/Entity'
        ],
        'auto_generate_proxies' => true,
        #'proxy_dir' =>  __DIR__.'/../cache/proxies',
        'cache' => null,
        ],
    'connection' => [
        'driver'   => 'pdo_mysql',
        'host'     => 'mysql',
        'dbname'   => 'dbname',  #replace with local db name
        'user'     => 'user',      #replace with local variables
        'password' => 'password',      #replace with local variables
        ]
];

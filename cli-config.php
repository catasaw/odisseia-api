<?php
/**
 * Created by PhpStorm.
 * User: catalinasierrazamudio
 * Date: 20/08/17
 * Time: 14:26
 */
// cli-config.php
// This file is needed due to calling doctrine commands, this file gets called

require 'vendor/autoload.php';


$settings = array('meta' => [
        'entity_path' => [
            'src/Entity'
        ],
        'auto_generate_proxies' => true,
        'proxy_dir' =>  __DIR__.'/../cache/proxies',
        'cache' => null,
    ],
    'connection' => [
        'driver'   => 'pdo_mysql',
        'host'     => 'mysql',
        'dbname'   => 'odisseia',    #replace with local db name
        'user'     => 'root',      #replace with local variables
        'password' => '1234',  #replace with local variables
    ]);

$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $settings['meta']['entity_path'],
    $settings['meta']['auto_generate_proxies'],
    $settings['meta']['proxy_dir'],
    $settings['meta']['cache'],
    false
);

$em = \Doctrine\ORM\EntityManager::create($settings['connection'], $config);
$db = new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection());

$helpers = new Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

return $helpers;
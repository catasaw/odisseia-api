<?php
/**
 * Created by PhpStorm.
 * User: catalinasierrazamudio
 * Date: 20/08/17
 * Time: 12:28
 */
require __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Entity\Pet;


$isDevMode = true;


// the connection configuration
$path = array('/src/Entity/');
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '1234',
    'dbname'   => 'odisseia',
);

$config = Setup::createAnnotationMetadataConfiguration($path, $isDevMode);

# Entity manager
$entityManager = EntityManager::create($dbParams, $config);

$pet = new \Entity\Pet();
$pet->setName('Mr.Right');

$entityManager->persist($pet);
$entityManager->flush();
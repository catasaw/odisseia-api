<?php

use Slim\App;

require __DIR__ . '/../vendor/autoload.php';

$app = new App();
$container = $app->getContainer();

$container['em'] = function ($c) {
    $settings = require __DIR__ . '/../settings.php';
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
        $settings['meta']['entity_path'],
        $settings['meta']['auto_generate_proxies'],
        $settings['meta']['proxy_dir'],
        $settings['meta']['cache'],
        false
    );
    return \Doctrine\ORM\EntityManager::create($settings['connection'], $config);
};


$container['Odisseia\Controller\ContributorController'] = function($c) {
    $contributorModel = new \Odisseia\Model\ContributorModel($c->get('em'));
    return new \Odisseia\Controller\ContributorController($contributorModel);
};



require '../src/Router/contributor.php';



$app->run();

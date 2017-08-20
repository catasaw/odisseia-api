<?php

use Slim\App;

require __DIR__ . '/../vendor/autoload.php';


$app = new App();

$app->get('/contributor', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    $settings = require __DIR__ . '/../settings.php';

    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
        $settings['meta']['entity_path'],
        $settings['meta']['auto_generate_proxies'],
        $settings['meta']['proxy_dir'],
        $settings['meta']['cache'],
        false
    );

    $entityManager = \Doctrine\ORM\EntityManager::create($settings['connection'], $config);
    $contributorModel = new \Odisseia\Model\ContributorModel($entityManager);
    return $response->withJson($contributorModel->findAll());
});

$app->run();

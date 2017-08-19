<?php

use Slim\App;

require __DIR__ . '/../vendor/autoload.php';

$app = new App();

$app->get('/hello', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {
    return $response->withJson(['hello world']);
});

$app->run();

<?php
namespace Odisseia\Router;

/**
 * Created by PhpStorm.
 * User: catalinasierrazamudio
 * Date: 20/08/17
 * Time: 19:31
 */

#Get all contributors
$app->get('/api/contributor', 'Odisseia\Controller\ContributorController:getContributors');

#Get one contributor
$app->get('/api/contributor/{id}', 'Odisseia\Controller\ContributorController:getContributor');

#Update contributor
$app->put('/api/contributor/{id}','Odisseia\Controller\ContributorController:putContributor');

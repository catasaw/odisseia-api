<?php
namespace Odisseia\Controller;
use Odisseia\Model\ContributorModel;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Created by PhpStorm.
 * User: catalinasierrazamudio
 * Date: 20/08/17
 * Time: 19:50
 */
class ContributorController
{
    protected $contributorModel;

    public function __construct(ContributorModel $contributorModel)
    {
        $this->contributorModel = $contributorModel;
    }

    public function getContributors(Request $request, Response $response)
    {
    return $response->withJSON($this->contributorModel->findAll());
    }

    public function getContributor(Request $request, Response $response, array $args)
    {
        $contributor = $this->contributorModel->get($args['id']);
        if ($contributor) {
            return $response->withJSON($contributor);
        }
        return $response->withStatus(404, 'No contributor found with that id.');
    }

    public function putContributor(Request $request, Response $response, array $args)
    {
        #$savedContributor = $this->contributorModel->findOne($args['id']);
        return $response->withJSON($this->contributorModel->get());
    }


}
<?php
namespace Odisseia\Model;
use Doctrine\ORM\EntityManager;
use Odisseia\Entity\Contributor;

/**
 * Created by PhpStorm.
 * User: catalinasierrazamudio
 * Date: 20/08/17
 * Time: 18:35
 */

class ContributorModel
{
    /** @var  EntityManager */
    protected $em;

    public function __construct(
        EntityManager $em
    ) {
        $this->em = $em;
    }

    /**
     * @return Contributor[]
     */
    public function findAll()
    {
        return $this->em->getRepository(Contributor::class)->findAll();
    }
}
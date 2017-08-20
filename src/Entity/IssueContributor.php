<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * IssueContributor
 *
 * @ORM\Table(name="issue_contributor")
 * @ORM\Entity
 */
class IssueContributor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joined_at", type="datetime", nullable=false)
     */
    private $joinedAt;

    /**
     * @var \Contributor
     *
     * @ORM\ManyToOne(targetEntity="Contributor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contributor_id", referencedColumnName="id")
     * })
     */
    private $contributor;

    /**
     * @var \Issue
     *
     * @ORM\ManyToOne(targetEntity="Issue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="issue_id", referencedColumnName="id")
     * })
     */
    private $issue;


}

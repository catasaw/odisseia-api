<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * IntroductionVote
 *
 * @ORM\Table(name="introduction_vote")
 * @ORM\Entity
 */
class IntroductionVote
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
     * @var integer
     *
     * @ORM\Column(name="vote", type="integer", nullable=false)
     */
    private $vote;

    /**
     * @var \Introduction
     *
     * @ORM\ManyToOne(targetEntity="Introduction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="introduction_id", referencedColumnName="id")
     * })
     */
    private $introduction;

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

<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleVote
 *
 * @ORM\Table(name="article_vote")
 * @ORM\Entity
 */
class ArticleVote
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
     * @var \Contributor
     *
     * @ORM\ManyToOne(targetEntity="Contributor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contributor_id", referencedColumnName="id")
     * })
     */
    private $contributor;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;

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

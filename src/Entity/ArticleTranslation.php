<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTranslation
 *
 * @ORM\Table(name="article_translation")
 * @ORM\Entity
 */
class ArticleTranslation
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
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher_name", type="string", length=60, nullable=false)
     */
    private $publisherName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_approved", type="boolean", nullable=false)
     */
    private $isApproved;

    /**
     * @var string
     *
     * @ORM\Column(name="writer_description", type="string", length=60, nullable=false)
     */
    private $writerDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="writer_name", type="string", length=60, nullable=false)
     */
    private $writerName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country;

    /**
     * @var \IssueTranslation
     *
     * @ORM\ManyToOne(targetEntity="IssueTranslation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="issue_translation_id", referencedColumnName="id")
     * })
     */
    private $issueTranslation;

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
     * @var \Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_from_id", referencedColumnName="id")
     * })
     */
    private $languageFrom;

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
     * @var \Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_to_id", referencedColumnName="id")
     * })
     */
    private $languageTo;


}

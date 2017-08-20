<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * IssueTranslation
 *
 * @ORM\Table(name="issue_translation")
 * @ORM\Entity
 */
class IssueTranslation
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
     * @ORM\Column(name="title", type="string", length=60, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

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
     * @var \Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_to_id", referencedColumnName="id")
     * })
     */
    private $languageTo;

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

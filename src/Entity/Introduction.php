<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Introduction
 *
 * @ORM\Table(name="introduction")
 * @ORM\Entity
 */
class Introduction
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
     * @ORM\Column(name="writer_name", type="string", length=60, nullable=false)
     */
    private $writerName;

    /**
     * @var string
     *
     * @ORM\Column(name="writer_description", type="string", length=60, nullable=false)
     */
    private $writerDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_approved", type="boolean", nullable=false)
     */
    private $isApproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country;

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
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

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

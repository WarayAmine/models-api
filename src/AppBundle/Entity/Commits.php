<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Commits
 *
 * @ORM\Table(name="commits")
 * @ORM\Entity
 * @ApiResource(
 *     attributes={"pagination_items_per_page"=30}
 * )
 */
class Commits
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="gh_id", type="string", length=255, nullable=true)
     */
    private $ghId;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\People")
     */
    private $people;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="commit_date", type="datetime", nullable=true)
     */
    private $commitDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cochanged", type="integer", nullable=true)
     */
    private $cochanged;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Repos")
     */
    private $repos;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * Set ghId.
     *
     * @param string|null $ghId
     *
     * @return Commits
     */
    public function setGhId($ghId = null)
    {
        $this->ghId = $ghId;

        return $this;
    }

    /**
     * Get ghId.
     *
     * @return string|null
     */
    public function getGhId()
    {
        return $this->ghId;
    }

    /**
     * Set peopleId.
     *
     * @param int|null $people
     *
     * @return Commits
     */
    public function setPeople($people = null)
    {
        $this->people = $people;

        return $this;
    }

    /**
     * Get peopleId.
     *
     * @return int|null
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * Set commitDate.
     *
     * @param \DateTime|null $commitDate
     *
     * @return Commits
     */
    public function setCommitDate($commitDate = null)
    {
        $this->commitDate = $commitDate;

        return $this;
    }

    /**
     * Get commitDate.
     *
     * @return \DateTime|null
     */
    public function getCommitDate()
    {
        return $this->commitDate;
    }

    /**
     * Set cochanged.
     *
     * @param int|null $cochanged
     *
     * @return Commits
     */
    public function setCochanged($cochanged = null)
    {
        $this->cochanged = $cochanged;

        return $this;
    }

    /**
     * Get cochanged.
     *
     * @return int|null
     */
    public function getCochanged()
    {
        return $this->cochanged;
    }

    /**
     * Set reposId.
     *
     * @param int|null $repos
     *
     * @return Commits
     */
    public function setRepos($repos = null)
    {
        $this->repos = $repos;

        return $this;
    }

    /**
     * Get reposId.
     *
     * @return int|null
     */
    public function getRepos()
    {
        return $this->repos;
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Commits
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

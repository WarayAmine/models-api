<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commits
 *
 * @ORM\Table(name="commits")
 * @ORM\Entity
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
     * @ORM\Column(name="people_id", type="integer", nullable=true)
     */
    private $peopleId;

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
     * @ORM\Column(name="repos_id", type="integer", nullable=true)
     */
    private $reposId;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
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
     * @param int|null $peopleId
     *
     * @return Commits
     */
    public function setPeopleId($peopleId = null)
    {
        $this->peopleId = $peopleId;

        return $this;
    }

    /**
     * Get peopleId.
     *
     * @return int|null
     */
    public function getPeopleId()
    {
        return $this->peopleId;
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
     * @param int|null $reposId
     *
     * @return Commits
     */
    public function setReposId($reposId = null)
    {
        $this->reposId = $reposId;

        return $this;
    }

    /**
     * Get reposId.
     *
     * @return int|null
     */
    public function getReposId()
    {
        return $this->reposId;
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

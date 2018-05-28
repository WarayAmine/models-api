<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Repos
 *
 * @ORM\Table(name="repos")
 * @ORM\Entity
 * @ApiResource(
 *     attributes={"pagination_items_per_page"=30}
 * )
 */
class Repos
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="founder", type="string", length=255, nullable=false)
     */
    private $founder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_commits", type="integer", nullable=true)
     */
    private $numberCommits;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="first_commit", type="datetime", nullable=true)
     */
    private $firstCommit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_commit", type="datetime", nullable=true)
     */
    private $lastCommit;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return Repos
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set founder.
     *
     * @param string $founder
     *
     * @return Repos
     */
    public function setFounder($founder)
    {
        $this->founder = $founder;

        return $this;
    }

    /**
     * Get founder.
     *
     * @return string
     */
    public function getFounder()
    {
        return $this->founder;
    }

    /**
     * Set url.
     *
     * @param string|null $url
     *
     * @return Repos
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set numberCommits.
     *
     * @param int|null $numberCommits
     *
     * @return Repos
     */
    public function setNumberCommits($numberCommits = null)
    {
        $this->numberCommits = $numberCommits;

        return $this;
    }

    /**
     * Get numberCommits.
     *
     * @return int|null
     */
    public function getNumberCommits()
    {
        return $this->numberCommits;
    }

    /**
     * Set firstCommit.
     *
     * @param \DateTime|null $firstCommit
     *
     * @return Repos
     */
    public function setFirstCommit($firstCommit = null)
    {
        $this->firstCommit = $firstCommit;

        return $this;
    }

    /**
     * Get firstCommit.
     *
     * @return \DateTime|null
     */
    public function getFirstCommit()
    {
        return $this->firstCommit;
    }

    /**
     * Set lastCommit.
     *
     * @param \DateTime|null $lastCommit
     *
     * @return Repos
     */
    public function setLastCommit($lastCommit = null)
    {
        $this->lastCommit = $lastCommit;

        return $this;
    }

    /**
     * Get lastCommit.
     *
     * @return \DateTime|null
     */
    public function getLastCommit()
    {
        return $this->lastCommit;
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Repos
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

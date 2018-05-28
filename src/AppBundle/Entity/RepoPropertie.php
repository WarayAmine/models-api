<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * RepoPropertie
 *
 * @ORM\Table(name="repo_propertie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RepoPropertieRepository")
 * @ApiResource(
 *     attributes={"pagination_items_per_page"=30}
 *     )
 */
class RepoPropertie
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Repos")
     */
    private $repo;

    /**
     * @var int
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Property")
     */
    private $property;

    /**
     * @var array
     *
     * @ORM\Column(name="value", type="array")
     */
    private $value;


    /**
     * Set umlFile.
     *
     * @param int $Repo
     *
     * @return RepoPropertie
     */
    public function setRepo($repo)
    {
        $this->repo = $repo;

        return $this;
    }

    /**
     * Get repo.
     *
     * @return int
     */
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * Set property.
     *
     * @param int $property
     *
     * @return UmlFilePropertie
     */
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property.
     *
     * @return int
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set value.
     *
     * @param array $value
     *
     * @return repoPropertie
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return array
     */
    public function getValue()
    {
        return $this->value;
    }
}

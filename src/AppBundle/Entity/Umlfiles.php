<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Umlfiles
 *
 * @ORM\Table(name="umlfiles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UmlFilesRepository")
 * @ApiResource(
 *     itemOperations = {
 *          "get" = { "method" = "GET" },
 *          "put" = { "method" = "PUT"},
 *          "delete" = { "method" = "DELETE"},
 *          "oneUmlFileWithoutProperty" = {
 *              "route_name" = "oneUmlFileWithoutProperty",
 *              "method" = "GET",
 *              "swagger_context" = {
 *                  {
 *                      "name" = "property_id",
 *                      "required" = true ,
 *                      "type" = "string" ,
 *                      "in" = "path" ,
 *                      "description" = "property id"
 *                  }
 *              },
 *              "produces" = {
 *                  "application/ld+json",
 *                  "application/json"
 *              }
 *          }
 *     },
 *     collectionOperations = {
 *          "get" = { "method" = "GET" },
 *          "post" = { "method" = "POST" },
 *          "umlFileWithProperty"={
 *              "route_name"="umlFilesWithProperty",
 *              "method" = "GET",
 *              "swagger_context" = {
 *                  "parameters" = {
 *                     {
 *                          "name" = "id",
 *                          "required" = true,
 *                          "type" = "string",
 *                          "in" = "path",
 *                          "description" = "property id"
 *                      }
 *                  },
 *                  "produces" = {
 *                      "application/ld+json",
 *                      "application/json"
 *                  }
 *              }
 *          }
 *     }
 * )
 */
class Umlfiles
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=512, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=512, nullable=true)
     */
    private $url;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commits_id", type="integer", nullable=true)
     */
    private $commitsId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repo_id", type="integer", nullable=true)
     */
    private $repoId;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;



    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return Umlfiles
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
     * Set url.
     *
     * @param string|null $url
     *
     * @return Umlfiles
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
     * Set commitsId.
     *
     * @param int|null $commitsId
     *
     * @return Umlfiles
     */
    public function setCommitsId($commitsId = null)
    {
        $this->commitsId = $commitsId;

        return $this;
    }

    /**
     * Get commitsId.
     *
     * @return int|null
     */
    public function getCommitsId()
    {
        return $this->commitsId;
    }

    /**
     * Set repoId.
     *
     * @param int|null $repoId
     *
     * @return Umlfiles
     */
    public function setRepoId($repoId = null)
    {
        $this->repoId = $repoId;

        return $this;
    }

    /**
     * Get repoId.
     *
     * @return int|null
     */
    public function getRepoId()
    {
        return $this->repoId;
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Umlfiles
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

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * UmlFilePropertie
 *
 * @ORM\Table(name="uml_file_propertie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UmlFilePropertieRepository")
 * @ApiResource(
 *     attributes={"pagination_items_per_page"=30},
 *     collectionOperations = {
 *          "get" = { "method" = "GET" },
 *          "post" = { "method" = "POST" },
 *          "umlFileProperties"={
 *              "route_name"="umlFileProperties",
 *              "method" = "GET",
 *              "swagger_context" = {
 *                  "parameters" = {
 *                     {
 *                          "name" = "umlFile",
 *                          "required" = true,
 *                          "type" = "string",
 *                          "in" = "path",
 *                          "description" = "UmlFile id"
 *                      }
 *                  },
 *                  "produces" = {
 *                      "application/ld+json",
 *                      "application/json"
 *                  }
 *              }
 *          }
 *     }
 *
 * )

 */
class UmlFilePropertie
{


    /**
     * @var int
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Umlfiles")
     */
    private $umlFile;

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
     * @param int $umlFile
     *
     * @return UmlFilePropertie
     */
    public function setUmlFile($umlFile)
    {
        $this->umlFile = $umlFile;

        return $this;
    }

    /**
     * Get umlFile.
     *
     * @return int
     */
    public function getUmlFile()
    {
        return $this->umlFile;
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
     * @return UmlFilePropertie
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

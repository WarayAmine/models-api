<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Property
 *
 * @ApiResource
 * @ORM\Table(name="property")
 * @ORM\Entity
 */
class Property
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="dataType", type="string", columnDefinition="ENUM('integer', 'text')")
     */
    private $dataType;


    

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label.
     *
     * @param string $label
     *
     * @return Property
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Property
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dataType.
     *
     * @param string $dataType
     *
     * @return Property
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get dataType.
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }
}

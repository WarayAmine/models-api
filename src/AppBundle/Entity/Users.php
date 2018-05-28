<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 * @ApiResource(
 *     attributes={"pagination_items_per_page"=30}
 * )
 */
class Users
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fake", type="boolean", nullable=true)
     */
    private $fake;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longi", type="decimal", precision=11, scale=8, nullable=true)
     */
    private $longi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=8, nullable=true)
     */
    private $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=3, nullable=true, options={"fixed"=true})
     */
    private $countryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * Set login.
     *
     * @param string|null $login
     *
     * @return Users
     */
    public function setLogin($login = null)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return Users
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
     * Set company.
     *
     * @param string|null $company
     *
     * @return Users
     */
    public function setCompany($company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company.
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set location.
     *
     * @param string|null $location
     *
     * @return Users
     */
    public function setLocation($location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location.
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Users
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Users
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set type.
     *
     * @param string|null $type
     *
     * @return Users
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set fake.
     *
     * @param bool|null $fake
     *
     * @return Users
     */
    public function setFake($fake = null)
    {
        $this->fake = $fake;

        return $this;
    }

    /**
     * Get fake.
     *
     * @return bool|null
     */
    public function getFake()
    {
        return $this->fake;
    }

    /**
     * Set deleted.
     *
     * @param bool|null $deleted
     *
     * @return Users
     */
    public function setDeleted($deleted = null)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted.
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set longi.
     *
     * @param string|null $longi
     *
     * @return Users
     */
    public function setLongi($longi = null)
    {
        $this->longi = $longi;

        return $this;
    }

    /**
     * Get longi.
     *
     * @return string|null
     */
    public function getLongi()
    {
        return $this->longi;
    }

    /**
     * Set lat.
     *
     * @param string|null $lat
     *
     * @return Users
     */
    public function setLat($lat = null)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat.
     *
     * @return string|null
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set countryCode.
     *
     * @param string|null $countryCode
     *
     * @return Users
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode.
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set state.
     *
     * @param string|null $state
     *
     * @return Users
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set city.
     *
     * @param string|null $city
     *
     * @return Users
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Users
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

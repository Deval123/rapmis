<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float|null
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;

    /**
     * @var float|null
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Department", inversedBy="city")
     *
     */
    private $departments;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set longitude.
     *
     * @param float|null $longitude
     *
     * @return City
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude.
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude.
     *
     * @param float|null $latitude
     *
     * @return City
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude.
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return mixed
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }

    /**
     * Set departments.
     *
     * @param \AppBundle\Entity\Department|null $departments
     *
     * @return City
     */
    public function setDepartments(\AppBundle\Entity\Department $departments = null)
    {
        $this->departments = $departments;

        return $this;
    }
}

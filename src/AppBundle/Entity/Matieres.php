<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matieres
 *
 * @ORM\Table(name="matieres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MatieresRepository")
 */
class Matieres
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
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;


    /**
     * @var string|null
     *
     * @ORM\Column(name="intitule", type="string", length=25, nullable=true)
     */
    private $intitule;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Matieres
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
     * Set intitule.
     *
     * @param string|null $intitule
     *
     * @return Matieres
     */
    public function setIntitule($intitule = null)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule.
     *
     * @return string|null
     */
    public function getIntitule()
    {
        return $this->intitule;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }
}

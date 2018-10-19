<?php
// src/AppBundle\Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Grafikat\UploadBundle\Annotation\Uploadable;
use Grafikat\UploadBundle\Annotation\UploadableField;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @Uploadable()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $dev = new Media();
        $dev->setFilename('devalere.png');

        //$dev->setUpdatedAt(new DateTime('now'));
        $this->photoProfile = $dev;

    }

    /**
     * @ORM\Column(type="string", length=25)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=9,
     *     max=25,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    private $phoneNumber;



    ///// photoProfile
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Media", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank(message="Please enter your profile image.", groups={"Profile"})
     */
    private $photoProfile;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Etablissements", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $etablissements;

    /**
     * @return mixed
     */
    public function getEtablissements()
    {
        return $this->etablissements;
    }

    /**
     * @param mixed $etablissements
     */
    public function setEtablissements($etablissements)
    {
        $this->etablissements = $etablissements;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPhotoProfile()
    {
        return $this->photoProfile;
    }

    /**
     * @param mixed $photoProfile
     */
    public function setPhotoProfile($photoProfile)
    {
        $this->photoProfile = $photoProfile;
    }


}

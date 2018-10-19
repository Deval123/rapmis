<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Grafikat\UploadBundle\Annotation\Uploadable;
use Grafikat\UploadBundle\Annotation\UploadableField;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * students
 *
 * @ORM\Table(name="students")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentsRepository")
 * @Uploadable()
 */
class Students
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
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=150, nullable=false)
     */
    private $prenom;



    /**
     * @var string|null
     *
     * @ORM\Column(name="pere", type="string", length=100, nullable=true)
     */
    private $pere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mere", type="string", length=100, nullable=true)
     */
    private $mere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tuteur", type="string", length=100, nullable=true)
     */
    private $tuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_pere", type="string", length=50, nullable=true)
     */
    private $telPere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_mere", type="string", length=50, nullable=true)
     */
    private $telMere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_tuteur", type="string", length=50, nullable=true)
     */
    private $telTuteur;


    /**
     * email du père
     * @var string|null
     *
     * @ORM\Column(name="email_pere", type="string", length=100, nullable=true)
     */
    private $emailPere;

    /**
     * email de la mère
     * @var string|null
     *
     * @ORM\Column(name="email_mere", type="string", length=100, nullable=true)
     */
    private $emailMere;

    /**
     * email du tuteur
     * @var string|null
     *
     * @ORM\Column(name="email_tuteur", type="string", length=100, nullable=true)
     */
    private $emailTuteur;


    /**
     * profession du père
     * @var string|null
     *
     * @ORM\Column(name="prof_pere", type="string", length=100, nullable=true)
     */
    private $profPere;

    /**
     * profession de la mère
     * @var string|null
     *
     * @ORM\Column(name="prof_mere", type="string", length=100, nullable=true)
     */
    private $profMere;

    /**
     * profession tuteur
     * @var string|null
     *
     * @ORM\Column(name="prof_tuteur", type="string", length=100, nullable=true)
     */
    private $profTuteur;

    /**
     * residence des parents
     * @var string|null
     *
     * @ORM\Column(name="residence_parents", type="string", length=100, nullable=true)
     */
    private $residenceParents;

    /**
     * proches
     * @var string|null
     *
     * @ORM\Column(name="proche1", type="string", length=100, nullable=true)
     */
    private $proche1;

    /**
     * tel proches
     * @var string|null
     *
     * @ORM\Column(name="tel_proche1", type="string", length=50, nullable=true)
     */
    private $telProche1;

    /**
     * proches
     * @var string|null
     *
     * @ORM\Column(name="proche2", type="string", length=100, nullable=true)
     */
    private $proche2;

    /**
     * tel proches
     * @var string|null
     *
     * @ORM\Column(name="tel_proche2", type="string", length=50, nullable=true)
     */
    private $telProche2;


    /**
     * proches
     * @var string|null
     *
     * @ORM\Column(name="proche3", type="string", length=100, nullable=true)
     */
    private $proche3;

    /**
     * tel proches
     * @var string|null
     *
     * @ORM\Column(name="tel_proche3", type="string", length=50, nullable=true)
     */
    private $telProche3;

    /**
     * @var bool
     *
     * @ORM\Column(name="nouveau", type="boolean")
     */
    private $nouveau;

    /**
     * @var bool
     *
     * @ORM\Column(name="redoublant", type="boolean")
     */
    private $redoublant;



    /**
     * vrai pour accès par etude de dossier, faux pour accès par concour
     * @var bool
     *
     * @ORM\Column(name="etude_dossier", type="boolean")
     */
    private $etudeDossier;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="anneeNais", type="date", nullable=true)
     */
    private $anneeNais;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_nais", type="string", length=100, nullable=false)
     */
    private $lieuNais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cycle", type="string", length=50, nullable=true)
     */
    private $cycle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serie", type="string", length=50, nullable=true)
     */
    private $serie;

    /**
     * @var float|null
     *
     * @ORM\Column(name="moy_passage_classe", type="float", nullable=true)
     */
    private $moyPassageClasse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang;

    /**
     * @var string/null
     *
     * @ORM\Column(name="last_school", type="string", length=125, nullable=true)
     */
    private $lastSchool;

    /**
     * @var string/null
     *
     * @ORM\Column(name="name_chef_last_school", type="string", length=100, nullable=true)
     */
    private $nameChefLastSchool;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=25, nullable=false)
     */
    private $sexe;


    /** date de l'inscription
     * @var \DateTime|null
     *
     * @ORM\Column(name="test", type="datetime", nullable=true)
     */
    private $dateCreate;

    //Bulletin santé

    /**
     * @var string|null
     *
     * @ORM\Column(name="groupe_sanguin", type="string", length=25, nullable=true)
     */
    private $groupeSanguin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pathogie_particuliere", type="string", length=150, nullable=true)
     */
    private $pathogieParticuliere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allergie_alimentaire", type="text", nullable=true)
     */
    private $allergieAlimentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allergie_medicamenteuse", type="text", nullable=true)
     */
    private $allergieMedicamenteuse;

    /**
     * @var string/null
     *
     * @ORM\Column(name="dispense", type="string", length=255, nullable=true)
     */
    private $dispense;

    /**
     * @var string/null
     *
     * @ORM\Column(name="medecin_familiale", type="string", length=255, nullable=true)
     */
    private $medecinFamiliale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_medecin_familiale", type="string", length=50, nullable=true)
     */
    private $telMedecinFamiliale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assurance_famille", type="string", length=150, nullable=true)
     */
    private $assuranceFamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hopital_agree", type="string", length=100, nullable=true)
     */
    private $hopitalAgree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rhesus", type="string", length=100, nullable=true)
     */
    private $rhesus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inaptitude", type="string", length=255, nullable=true)
     */
    private $inaptitude;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Classes", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $classes;


    //upload file (image)

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @UploadableField(filename = "filename", path="uploads/students")
     */
    public $file;

    /*
     * @var \DateTime
     * @ORM\Column(name"updated_at", type="datetime", nullable=true)
     */
    private $UpdatedAt;

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }

    /**
     * @param mixed $UpdatedAt
     */
    public function setUpdatedAt($UpdatedAt)
    {
        $this->UpdatedAt = $UpdatedAt;
    }


    /**
     * @return File/null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file/null
     *
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Set filename.
     *
     * @param string $filename
     *
     * @return students
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename.
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param null|string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    /**
     * Set anneeNais.
     *
     * @param \DateTime|null $anneeNais
     *
     * @return students
     */
    public function setAnneeNais($anneeNais = null)
    {
        $this->anneeNais = $anneeNais;

        return $this;
    }

    /**
     * Get anneeNais.
     *
     * @return \DateTime|null
     */
    public function getAnneeNais()
    {
        return $this->anneeNais;
    }

    /**
     * Set students.
     *
     * @param \DateTime|null $students
     *
     * @return students
     */
    public function setDateCreate($dateCreate = null)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate.
     *
     * @return \DateTime|null
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }



    /**
     * @return mixed
     */
    public function getEventsExtracurricular()
    {
        return $this->events_extracurricular;
    }

    /**
     * @param mixed $events_extracurricular
     */
    public function setEventsExtracurricular($events_extracurricular)
    {
        $this->events_extracurricular = $events_extracurricular;
    }

    /**
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param mixed $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe(string $sexe)
    {
        $this->sexe = $sexe;
    }



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events_extracurricular = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set pere.
     *
     * @param string|null $pere
     *
     * @return Students
     */
    public function setPere($pere = null)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get pere.
     *
     * @return string|null
     */
    public function getPere()
    {
        return $this->pere;
    }

    /**
     * Set mere.
     *
     * @param string|null $mere
     *
     * @return Students
     */
    public function setMere($mere = null)
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * Get mere.
     *
     * @return string|null
     */
    public function getMere()
    {
        return $this->mere;
    }

    /**
     * Set tuteur.
     *
     * @param string|null $tuteur
     *
     * @return Students
     */
    public function setTuteur($tuteur = null)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur.
     *
     * @return string|null
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * Set telPere.
     *
     * @param string|null $telPere
     *
     * @return Students
     */
    public function setTelPere($telPere = null)
    {
        $this->telPere = $telPere;

        return $this;
    }

    /**
     * Get telPere.
     *
     * @return string|null
     */
    public function getTelPere()
    {
        return $this->telPere;
    }

    /**
     * Set telMere.
     *
     * @param string|null $telMere
     *
     * @return Students
     */
    public function setTelMere($telMere = null)
    {
        $this->telMere = $telMere;

        return $this;
    }

    /**
     * Get telMere.
     *
     * @return string|null
     */
    public function getTelMere()
    {
        return $this->telMere;
    }

    /**
     * Set telTuteur.
     *
     * @param string|null $telTuteur
     *
     * @return Students
     */
    public function setTelTuteur($telTuteur = null)
    {
        $this->telTuteur = $telTuteur;

        return $this;
    }

    /**
     * Get telTuteur.
     *
     * @return string|null
     */
    public function getTelTuteur()
    {
        return $this->telTuteur;
    }

    /**
     * Set emailPere.
     *
     * @param string|null $emailPere
     *
     * @return Students
     */
    public function setEmailPere($emailPere = null)
    {
        $this->emailPere = $emailPere;

        return $this;
    }

    /**
     * Get emailPere.
     *
     * @return string|null
     */
    public function getEmailPere()
    {
        return $this->emailPere;
    }

    /**
     * Set emailMere.
     *
     * @param string|null $emailMere
     *
     * @return Students
     */
    public function setEmailMere($emailMere = null)
    {
        $this->emailMere = $emailMere;

        return $this;
    }

    /**
     * Get emailMere.
     *
     * @return string|null
     */
    public function getEmailMere()
    {
        return $this->emailMere;
    }

    /**
     * Set emailTuteur.
     *
     * @param string|null $emailTuteur
     *
     * @return Students
     */
    public function setEmailTuteur($emailTuteur = null)
    {
        $this->emailTuteur = $emailTuteur;

        return $this;
    }

    /**
     * Get emailTuteur.
     *
     * @return string|null
     */
    public function getEmailTuteur()
    {
        return $this->emailTuteur;
    }

    /**
     * Set profPere.
     *
     * @param string|null $profPere
     *
     * @return Students
     */
    public function setProfPere($profPere = null)
    {
        $this->profPere = $profPere;

        return $this;
    }

    /**
     * Get profPere.
     *
     * @return string|null
     */
    public function getProfPere()
    {
        return $this->profPere;
    }

    /**
     * Set profMere.
     *
     * @param string|null $profMere
     *
     * @return Students
     */
    public function setProfMere($profMere = null)
    {
        $this->profMere = $profMere;

        return $this;
    }

    /**
     * Get profMere.
     *
     * @return string|null
     */
    public function getProfMere()
    {
        return $this->profMere;
    }

    /**
     * Set profTuteur.
     *
     * @param string|null $profTuteur
     *
     * @return Students
     */
    public function setProfTuteur($profTuteur = null)
    {
        $this->profTuteur = $profTuteur;

        return $this;
    }

    /**
     * Get profTuteur.
     *
     * @return string|null
     */
    public function getProfTuteur()
    {
        return $this->profTuteur;
    }

    /**
     * Set residenceParents.
     *
     * @param string|null $residenceParents
     *
     * @return Students
     */
    public function setResidenceParents($residenceParents = null)
    {
        $this->residenceParents = $residenceParents;

        return $this;
    }

    /**
     * Get residenceParents.
     *
     * @return string|null
     */
    public function getResidenceParents()
    {
        return $this->residenceParents;
    }

    /**
     * Set proche1.
     *
     * @param string|null $proche1
     *
     * @return Students
     */
    public function setProche1($proche1 = null)
    {
        $this->proche1 = $proche1;

        return $this;
    }

    /**
     * Get proche1.
     *
     * @return string|null
     */
    public function getProche1()
    {
        return $this->proche1;
    }

    /**
     * Set telProche1.
     *
     * @param string|null $telProche1
     *
     * @return Students
     */
    public function setTelProche1($telProche1 = null)
    {
        $this->telProche1 = $telProche1;

        return $this;
    }

    /**
     * Get telProche1.
     *
     * @return string|null
     */
    public function getTelProche1()
    {
        return $this->telProche1;
    }

    /**
     * Set proche2.
     *
     * @param string|null $proche2
     *
     * @return Students
     */
    public function setProche2($proche2 = null)
    {
        $this->proche2 = $proche2;

        return $this;
    }

    /**
     * Get proche2.
     *
     * @return string|null
     */
    public function getProche2()
    {
        return $this->proche2;
    }

    /**
     * Set telProche2.
     *
     * @param string|null $telProche2
     *
     * @return Students
     */
    public function setTelProche2($telProche2 = null)
    {
        $this->telProche2 = $telProche2;

        return $this;
    }

    /**
     * Get telProche2.
     *
     * @return string|null
     */
    public function getTelProche2()
    {
        return $this->telProche2;
    }

    /**
     * Set proche3.
     *
     * @param string|null $proche3
     *
     * @return Students
     */
    public function setProche3($proche3 = null)
    {
        $this->proche3 = $proche3;

        return $this;
    }

    /**
     * Get proche3.
     *
     * @return string|null
     */
    public function getProche3()
    {
        return $this->proche3;
    }

    /**
     * Set telProche3.
     *
     * @param string|null $telProche3
     *
     * @return Students
     */
    public function setTelProche3($telProche3 = null)
    {
        $this->telProche3 = $telProche3;

        return $this;
    }

    /**
     * Get telProche3.
     *
     * @return string|null
     */
    public function getTelProche3()
    {
        return $this->telProche3;
    }

    /**
     * Set nouveau.
     *
     * @param bool $nouveau
     *
     * @return Students
     */
    public function setNouveau($nouveau)
    {
        $this->nouveau = $nouveau;

        return $this;
    }

    /**
     * Get nouveau.
     *
     * @return bool
     */
    public function getNouveau()
    {
        return $this->nouveau;
    }

    /**
     * Set redoublant.
     *
     * @param bool $ancien
     *
     * @return Students
     */
    public function setRedoublant($redoublant)
    {
        $this->redoublant = $redoublant;

        return $this;
    }

    /**
     * Get redoublant.
     *
     * @return bool
     */
    public function getRedoublant()
    {
        return $this->redoublant;
    }




    /**
     * Set etudeDossier.
     *
     * @param bool $etudeDossier
     *
     * @return Students
     */
    public function setEtudeDossier($etudeDossier)
    {
        $this->etudeDossier = $etudeDossier;

        return $this;
    }

    /**
     * Get etudeDossier.
     *
     * @return bool
     */
    public function getEtudeDossier()
    {
        return $this->etudeDossier;
    }

    /**
     * Set cycle.
     *
     * @param string|null $cycle
     *
     * @return Students
     */
    public function setCycle($cycle = null)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle.
     *
     * @return string|null
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set serie.
     *
     * @param string|null $serie
     *
     * @return Students
     */
    public function setSerie($serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * @return string
     */
    public function getLieuNais()
    {
        return $this->lieuNais;
    }

    /**
     * @param string $lieuNais
     */
    public function setLieuNais(string $lieuNais)
    {
        $this->lieuNais = $lieuNais;
    }

    /**
     * @return int|null
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * @param int|null $rang
     */
    public function setRang($rang)
    {
        $this->rang = $rang;
    }

    /**
     * @return string
     */
    public function getLastSchool()
    {
        return $this->lastSchool;
    }

    /**
     * @param string $lastSchool
     */
    public function setLastSchool(string $lastSchool)
    {
        $this->lastSchool = $lastSchool;
    }

    /**
     * @return string
     */
    public function getNameChefLastSchool()
    {
        return $this->nameChefLastSchool;
    }

    /**
     * @param string $nameChefLastSchool
     */
    public function setNameChefLastSchool(string $nameChefLastSchool)
    {
        $this->nameChefLastSchool = $nameChefLastSchool;
    }



    /**
     * Get serie.
     *
     * @return string|null
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set moyPassageClasse.
     *
     * @param string|null $moyPassageClasse
     *
     * @return Students
     */
    public function setMoyPassageClasse($moyPassageClasse = null)
    {
        $this->moyPassageClasse = $moyPassageClasse;

        return $this;
    }

    /**
     * Get moyPassageClasse.
     *
     * @return string|null
     */
    public function getMoyPassageClasse()
    {
        return $this->moyPassageClasse;
    }

    /**
     * Add eventsExtracurricular.
     *
     * @param \AppBundle\Entity\Events_extracurricular $eventsExtracurricular
     *
     * @return Students
     */
    public function addEventsExtracurricular(\AppBundle\Entity\Events_extracurricular $eventsExtracurricular)
    {
        $this->events_extracurricular[] = $eventsExtracurricular;

        return $this;
    }

    /**
     * Remove eventsExtracurricular.
     *
     * @param \AppBundle\Entity\Events_extracurricular $eventsExtracurricular
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEventsExtracurricular(\AppBundle\Entity\Events_extracurricular $eventsExtracurricular)
    {
        return $this->events_extracurricular->removeElement($eventsExtracurricular);
    }

    /**
     * @return null|string
     */
    public function getGroupeSanguin()
    {
        return $this->groupeSanguin;
    }

    /**
     * @param null|string $groupeSanguin
     */
    public function setGroupeSanguin($groupeSanguin)
    {
        $this->groupeSanguin = $groupeSanguin;
    }

    /**
     * @return null|string
     */
    public function getPathogieParticuliere()
    {
        return $this->pathogieParticuliere;
    }

    /**
     * @param null|string $pathogieParticuliere
     */
    public function setPathogieParticuliere($pathogieParticuliere)
    {
        $this->pathogieParticuliere = $pathogieParticuliere;
    }

    /**
     * @return null|string
     */
    public function getAllergieAlimentaire()
    {
        return $this->allergieAlimentaire;
    }

    /**
     * @param null|string $allergieAlimentaire
     */
    public function setAllergieAlimentaire($allergieAlimentaire)
    {
        $this->allergieAlimentaire = $allergieAlimentaire;
    }

    /**
     * @return null|string
     */
    public function getAllergieMedicamenteuse()
    {
        return $this->allergieMedicamenteuse;
    }

    /**
     * @param null|string $allergieMedicamenteuse
     */
    public function setAllergieMedicamenteuse($allergieMedicamenteuse)
    {
        $this->allergieMedicamenteuse = $allergieMedicamenteuse;
    }

    /**
     * @return string
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * @param string $dispense
     */
    public function setDispense(string $dispense)
    {
        $this->dispense = $dispense;
    }

    /**
     * @return string
     */
    public function getMedecinFamiliale()
    {
        return $this->medecinFamiliale;
    }

    /**
     * @param string $medecinFamiliale
     */
    public function setMedecinFamiliale(string $medecinFamiliale)
    {
        $this->medecinFamiliale = $medecinFamiliale;
    }

    /**
     * @return null|string
     */
    public function getTelMedecinFamiliale()
    {
        return $this->telMedecinFamiliale;
    }

    /**
     * @param null|string $telMedecinFamiliale
     */
    public function setTelMedecinFamiliale($telMedecinFamiliale)
    {
        $this->telMedecinFamiliale = $telMedecinFamiliale;
    }

    /**
     * @return null|string
     */
    public function getAssuranceFamille()
    {
        return $this->assuranceFamille;
    }

    /**
     * @param null|string $assuranceFamille
     */
    public function setAssuranceFamille($assuranceFamille)
    {
        $this->assuranceFamille = $assuranceFamille;
    }

    /**
     * @return null|string
     */
    public function getHopitalAgree()
    {
        return $this->hopitalAgree;
    }

    /**
     * @param null|string $hopitalAgree
     */
    public function setHopitalAgree($hopitalAgree)
    {
        $this->hopitalAgree = $hopitalAgree;
    }

    /**
     * @return null|string
     */
    public function getRhesus()
    {
        return $this->rhesus;
    }

    /**
     * @param null|string $rhesus
     */
    public function setRhesus($rhesus)
    {
        $this->rhesus = $rhesus;
    }

    /**
     * @return null|string
     */
    public function getInaptitude()
    {
        return $this->inaptitude;
    }

    /**
     * @param null|string $inaptitude
     */
    public function setInaptitude($inaptitude)
    {
        $this->inaptitude = $inaptitude;
    }

}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotesRepository")
 */
class Notes
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
     * @ORM\Column(name="nom_evaluation", type="string", length=150)
     */
    private $nomEvaluation;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur", type="float")
     */
    private $valeur;

    /**
     * @var float
     *
     * @ORM\Column(name="coeff", type="float")
     */
    private $coeff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Matieres", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $matieres;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Students", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $students;

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
     * Set nomEvaluation.
     *
     * @param string $nomEvaluation
     *
     * @return Notes
     */
    public function setNomEvaluation($nomEvaluation)
    {
        $this->nomEvaluation = $nomEvaluation;

        return $this;
    }

    /**
     * Get nomEvaluation.
     *
     * @return string
     */
    public function getNomEvaluation()
    {
        return $this->nomEvaluation;
    }

    /**
     * Set valeur.
     *
     * @param float $valeur
     *
     * @return Notes
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur.
     *
     * @return float
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set coeff.
     *
     * @param float $coeff
     *
     * @return Notes
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;

        return $this;
    }

    /**
     * Get coeff.
     *
     * @return float
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * Set commentaire.
     *
     * @param string|null $commentaire
     *
     * @return Notes
     */
    public function setCommentaire($commentaire = null)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire.
     *
     * @return string|null
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @return mixed
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * @param mixed $matieres
     */
    public function setMatieres($matieres)
    {
        $this->matieres = $matieres;
    }

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param mixed $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }


}

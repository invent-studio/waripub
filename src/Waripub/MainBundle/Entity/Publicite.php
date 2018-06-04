<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicite
 *
 * @ORM\Table(name="publicite")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\PubliciteRepository")
 */
class Publicite
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
     * @ORM\Column(name="titre_pub", type="string")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_pub", type="string")
     */
    private $description;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_creation_pub", type="datetime")
     */
    private $datecreation;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_publication_pub", type="datetime")
     */
    private $datepublication;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_fin_publication_pub", type="datetime")
     */
    private $datefinpublication;

    /**
     * @var string
     *
     * @ORM\Column(name="type_pub", type="string")
     */
    private $typepublicite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fichier_pub", type="string")
     */
    private $nomfichier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="supprime_pub", type="boolean")
     */
    private $supprimer;

    /**
     * @return mixed
     */
    public function getSupprimer()
    {
        return $this->supprimer;
    }

    /**
     * @param mixed $supprimer
     */
    public function setSupprimer($supprimer)
    {
        $this->supprimer = $supprimer;
    }

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $prestataire ;

    /**
     * @ORM\ManyToOne(targetEntity="Position")
     */
    private $position ;

    /**
     * @ORM\ManyToOne(targetEntity="CategoriePub")
     */
    private $categoriePub ;


    /**
     * Get id
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
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return datetime
     */
    public function getDatecreation(): datetime
    {
        return $this->datecreation;
    }

    /**
     * @param datetime $datecreation
     */
    public function setDatecreation(datetime $datecreation)
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return datetime
     */
    public function getDatepublication(): datetime
    {
        return $this->datepublication;
    }

    /**
     * @param datetime $datepublication
     */
    public function setDatepublication(datetime $datepublication)
    {
        $this->datepublication = $datepublication;
    }

    /**
     * @return datetime
     */
    public function getDatefinpublication(): datetime
    {
        return $this->datefinpublication;
    }

    /**
     * @param datetime $datefinpublication
     */
    public function setDatefinpublication(datetime $datefinpublication)
    {
        $this->datefinpublication = $datefinpublication;
    }

    /**
     * @return string
     */
    public function getTypepublicite(): string
    {
        return $this->typepublicite;
    }

    /**
     * @param string $typepublicite
     */
    public function setTypepublicite(string $typepublicite)
    {
        $this->typepublicite = $typepublicite;
    }

    /**
     * @return string
     */
    public function getNomfichier(): string
    {
        return $this->nomfichier;
    }

    /**
     * @param string $nomfichier
     */
    public function setNomfichier(string $nomfichier)
    {
        $this->nomfichier = $nomfichier;
    }

    /**
     * @return mixed
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }

    /**
     * @param mixed $prestataire
     */
    public function setPrestataire($prestataire)
    {
        $this->prestataire = $prestataire;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getCategoriePub()
    {
        return $this->categoriePub;
    }

    /**
     * @param mixed $categoriePub
     */
    public function setCategoriePub($categoriePub)
    {
        $this->categoriePub = $categoriePub;
    }


}


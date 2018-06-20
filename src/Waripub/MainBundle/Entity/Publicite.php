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
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_pub", type="string", nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_pub", type="string", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation_pub", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_pub", type="string", nullable=false)
     */
    private $typepublicite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fichier_pub", type="string", nullable=false)
     */
    private $nomfichier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="supprime_pub", type="boolean", nullable=true)
     */
    private $supprimer;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $prestataire ;

    /**
     * @ORM\ManyToOne(targetEntity="CategoriePub")
     */
    private $categoriePub ;


    /**
     * @ORM\ManyToOne(targetEntity="Position")
     */
    private $position ;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     * @return string
     */
    public function getDatecreation(): string
    {
        return $this->datecreation;
    }

    /**
     * @param string $datecreation
     */
    public function setDatecreation(string $datecreation)
    {
        $this->datecreation = $datecreation;
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
     * @return bool
     */
    public function isSupprimer(): bool
    {
        return $this->supprimer;
    }

    /**
     * @param bool $supprimer
     */
    public function setSupprimer(bool $supprimer)
    {
        $this->supprimer = $supprimer;
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


}


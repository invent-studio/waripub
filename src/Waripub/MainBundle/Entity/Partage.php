<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partage
 *
 * @ORM\Table(name="partage")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\PartageRepository")
 */
class Partage
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
     * @ORM\Column(name="date_partage", type="datetime", nullable=false)
     */
    private $datepartage;

    /**
     * @var string
     *
     * @ORM\Column(name="reseau_partage", type="string", nullable=false)
     */
    private $reseaupartage;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $souscripteur ;

    /**
     * @ORM\ManyToOne(targetEntity="Publication")
     */
    private $publication ;

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
     * @return datetime
     */
    public function getDatepartage(): datetime
    {
        return $this->datepartage;
    }

    /**
     * @param datetime $datepartage
     */
    public function setDatepartage(datetime $datepartage)
    {
        $this->datepartage = $datepartage;
    }

    /**
     * @return string
     */
    public function getReseaupartage(): string
    {
        return $this->reseaupartage;
    }

    /**
     * @param string $reseaupartage
     */
    public function setReseaupartage(string $reseaupartage)
    {
        $this->reseaupartage = $reseaupartage;
    }

    /**
     * @return mixed
     */
    public function getSouscripteur()
    {
        return $this->souscripteur;
    }

    /**
     * @param mixed $souscripteur
     */
    public function setSouscripteur($souscripteur)
    {
        $this->souscripteur = $souscripteur;
    }

    /**
     * @return mixed
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param mixed $publication
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    }


}


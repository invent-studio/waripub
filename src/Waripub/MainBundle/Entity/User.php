<?php

namespace Waripub\MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\UserRepository")
 * @ORM\InheritanceType ("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn (name = "roles")
 * @ORM\DiscriminatorMap({"SUPER_ADMIN" = "User", "SOUSCRIPTEUR" = "Souscripteur", "PRESTATAIRE" = "Prestataire"})
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
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="lienfb", type="string")
     */
    private $lienfb;

    /**
     * @var string
     *
     * @ORM\Column(name="lientwitter", type="string")
     */
    private $lientwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="lieninstagram", type="string")
     */
    private $lieninstagram;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $datecreation;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_modif", type="datetime")
     */
    private $datemodif;

    /**
     * @var int
     *
     * @ORM\Column(name="solde", type="bigint")
     */
    private $solde;

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
    public function getDatemodif(): datetime
    {
        return $this->datemodif;
    }

    /**
     * @param datetime $datemodif
     */
    public function setDatemodif(datetime $datemodif)
    {
        $this->datemodif = $datemodif;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getLienfb(): string
    {
        return $this->lienfb;
    }

    /**
     * @param string $lienfb
     */
    public function setLienfb(string $lienfb)
    {
        $this->lienfb = $lienfb;
    }

    /**
     * @return string
     */
    public function getLientwitter(): string
    {
        return $this->lientwitter;
    }

    /**
     * @param string $lientwitter
     */
    public function setLientwitter(string $lientwitter)
    {
        $this->lientwitter = $lientwitter;
    }

    /**
     * @return string
     */
    public function getLieninstagram(): string
    {
        return $this->lieninstagram;
    }

    /**
     * @param string $lieninstagram
     */
    public function setLieninstagram(string $lieninstagram)
    {
        $this->lieninstagram = $lieninstagram;
    }

    /**
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * @param int $solde
     */
    public function setSolde(int $solde)
    {
        $this->solde = $solde;
    }

}
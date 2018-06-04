<?php

namespace Waripub\MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\UserRepository")
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
     * @var text
     *
     * @ORM\Column(name="descr_user", type="text")
     */
    private $description;

    // DEBUT SOUSCRIPTEUR
    /**
     * @var int
     *
     * @ORM\Column(name="nbabonnefb", type="bigint")
     */
    private $nbabonnefb;

    /**
     * @var int
     *
     * @ORM\Column(name="nbabonnetwitter", type="bigint")
     */
    private $nbabonnetwitter;

    /**
     * @var int
     *
     * @ORM\Column(name="nbabonneinstagram", type="bigint")
     */
    private $nbabonneinstagram;

    // FIN SOUSCRIPTEUR


    // DEBUT PRESTATAIRE

    /**
     * @var string
     *
     * @ORM\Column(name="rccm", type="string")
     */
    private $rccm;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_repr", type="string")
     */
    private $nomrepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_repr", type="string")
     */
    private $telrepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="email_repr", type="string")
     */
    private $emailrepresentant;

    // FIN PRESTATAIRE

    /**
     * @return datetime
     */
    public function getDatecreation()
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
    public function getDatemodif()
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
    public function getNom()
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
    public function getTel()
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
    public function getLienfb()
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
    public function getLientwitter()
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
    public function getLieninstagram()
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
    public function getSolde()
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

    /**
     * @return int
     */
    public function getNbabonnefb()
    {
        return $this->nbabonnefb;
    }

    /**
     * @param int $nbabonnefb
     */
    public function setNbabonnefb(int $nbabonnefb)
    {
        $this->nbabonnefb = $nbabonnefb;
    }

    /**
     * @return int
     */
    public function getNbabonnetwitter()
    {
        return $this->nbabonnetwitter;
    }

    /**
     * @param int $nbabonnetwitter
     */
    public function setNbabonnetwitter(int $nbabonnetwitter)
    {
        $this->nbabonnetwitter = $nbabonnetwitter;
    }

    /**
     * @return int
     */
    public function getNbabonneinstagram()
    {
        return $this->nbabonneinstagram;
    }

    /**
     * @param int $nbabonneinstagram
     */
    public function setNbabonneinstagram(int $nbabonneinstagram)
    {
        $this->nbabonneinstagram = $nbabonneinstagram;
    }

    /**
     * @return string
     */
    public function getRccm()
    {
        return $this->rccm;
    }

    /**
     * @param string $rccm
     */
    public function setRccm(string $rccm)
    {
        $this->rccm = $rccm;
    }

    /**
     * @return string
     */
    public function getNomrepresentant()
    {
        return $this->nomrepresentant;
    }

    /**
     * @param string $nomrepresentant
     */
    public function setNomrepresentant(string $nomrepresentant)
    {
        $this->nomrepresentant = $nomrepresentant;
    }

    /**
     * @return string
     */
    public function getTelrepresentant()
    {
        return $this->telrepresentant;
    }

    /**
     * @param string $telrepresentant
     */
    public function setTelrepresentant(string $telrepresentant)
    {
        $this->telrepresentant = $telrepresentant;
    }

    /**
     * @return string
     */
    public function getEmailrepresentant()
    {
        return $this->emailrepresentant;
    }

    /**
     * @param string $emailrepresentant
     */
    public function setEmailrepresentant(string $emailrepresentant)
    {
        $this->emailrepresentant = $emailrepresentant;
    }

    /**
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }


}
<?php

namespace Waripub\MainBundle\Entity;

//use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Cet e-mail existe déjà, veuillez vous connecter")
 * @UniqueEntity(fields="username", message="Ce nom d'utilisateur existe déjà, veuillez vous connecter")
 */
class User implements UserInterface, AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_user", type="string", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", unique=true, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "L'e-mail '{{ value }}' n'est pas valide",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="username", type="string", unique=true, nullable=false)
     */
    private $username;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", nullable=false)
     */
    private $password;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="plainPassword", type="string", nullable=false)
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="role_user", type="string", nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="fb_user", type="string", nullable=true)
     */
    private $lienfb;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_user", type="string", nullable=true)
     */
    private $lientwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram_user", type="string", nullable=true)
     */
    private $lieninstagram;

    /**
     * @var string
     *
     * @ORM\Column(name="datecreation_user", type="datetime", nullable=false)
     * @Assert\Date()
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="datemodif_user", type="datetime", nullable=true)
     */
    private $datemodif;

    /**
     * @var integer
     *
     * @ORM\Column(name="solde_user", type="integer", nullable=true)
     * @Assert\DateTime()
     */
    private $solde;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat_user", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="token_user", type="string", nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="lastlogin_user", type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    private $lastlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="description_user", type="string", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbabonnefb", type="bigint", nullable=true)
     */
    private $nbabonnefb;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbabonnetwitter", type="bigint", nullable=true)
     */
    private $nbabonnetwitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbabonneinstagram", type="bigint", nullable=true)
     */
    private $nbabonneinstagram;

    /**
     * @var string
     *
     * @ORM\Column(name="rccm_user", type="string", nullable=true)
     */
    private $rccm;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_repr", type="string", nullable=true)
     */
    private $nomrepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_repr", type="string", nullable=true)
     */
    private $telrepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="email_repr", type="string", nullable=true)
     */
    private $emailrepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_user", type="string", nullable=true)
     */
    private $photo;

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }


    /**
     * @return array
     */
    public function getRoles()
    {
        //return $this->roles;
        //return array($this->roles);

        return (!empty($this->roles)) ? array($this->roles) : $this->roles ;

    }

    /**
     * @param string $roles
     */
    public function setRoles(string $roles)
    {
        $this->roles = $roles;
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
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }


    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param \datetime $datecreation
     */
    public function setDatecreation(\datetime $datecreation)
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return string
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * @param \datetime $datemodif
     */
    public function setDatemodif(\datetime $datemodif)
    {
        $this->datemodif = $datemodif;
    }

    /**
     * @return string
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * @param \datetime $lastlogin
     */
    public function setLastlogin(\datetime $lastlogin)
    {
        $this->lastlogin = $lastlogin;
    }



    /**
     * @return string
     */
    public function getDescription()
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

    // Security

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->email,
            $this->password,
            $this->isActive,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->email,
            $this->password,
            $this->isActive,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

}
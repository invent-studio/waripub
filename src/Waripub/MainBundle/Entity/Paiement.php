<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\PaiementRepository")
 * @UniqueEntity(fields="reference", message="Cette réference existe déjà")
 */
class Paiement
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
     * @ORM\Column(name="reference", type="string", unique=true, nullable=false)
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="date_paie", type="datetime" , nullable=false)
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation", type="boolean", nullable=true)
     */
    private $operation;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_paie", type="string", nullable=false)
     */
    private $mode;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user ;

    /**
     * @var string
     *
     * @ORM\Column(name="detail_paie", type="string", nullable=true)
     */
    private $detail;

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
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getMontant(): int
    {
        return $this->montant;
    }

    /**
     * @param int $montant
     */
    public function setMontant(int $montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return datetime
     */
    public function getDate(): datetime
    {
        return $this->date;
    }

    /**
     * @param datetime $date
     */
    public function setDate(datetime $date)
    {
        $this->date = $date;
    }

    /**
     * @return bool
     */
    public function isOperation(): bool
    {
        return $this->operation;
    }

    /**
     * @param bool $operation
     */
    public function setOperation(bool $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode(string $mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail(string $detail)
    {
        $this->detail = $detail;
    }


}


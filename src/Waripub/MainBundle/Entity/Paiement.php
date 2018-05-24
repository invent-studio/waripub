<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="reference", type="string", unique=true, nullable=false)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_paie", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation", type="boolean")
     */
    private $operation;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_paie", type="string")
     */
    private $mode;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user ;

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


}


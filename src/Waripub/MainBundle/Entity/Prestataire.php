<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestataire
 *
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\PrestataireRepository")
 */
class Prestataire extends User
{
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

    /**
     * @return string
     */
    public function getRccm(): string
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
    public function getNomrepresentant(): string
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
    public function getTelrepresentant(): string
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
    public function getEmailrepresentant(): string
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



}


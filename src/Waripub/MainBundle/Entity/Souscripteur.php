<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscripteur
 *
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\SouscripteurRepository")
 */
class Souscripteur extends User
{
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

    /**
     * @return int
     */
    public function getNbabonnefb(): int
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
    public function getNbabonnetwitter(): int
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
    public function getNbabonneinstagram(): int
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

}


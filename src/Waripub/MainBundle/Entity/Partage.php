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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_partage", type="datetime")
     */
    private $datepartage;

    /**
     * @var string
     *
     * @ORM\Column(name="reseau_partage", type="string")
     */
    private $reseaupartage;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $souscripteur ;

    /**
     * @ORM\ManyToOne(targetEntity="Publicite")
     */
    private $publicite ;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}


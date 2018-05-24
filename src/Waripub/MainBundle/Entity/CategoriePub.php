<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriePub
 *
 * @ORM\Table(name="categorie_pub")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\CategoriePubRepository")
 */
class CategoriePub
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
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $desription;

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
     * @return text
     */
    public function getDesription(): text
    {
        return $this->desription;
    }

    /**
     * @param text $desription
     */
    public function setDesription(text $desription)
    {
        $this->desription = $desription;
    }

}


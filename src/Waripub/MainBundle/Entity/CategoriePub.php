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
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cp", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var text
     *
     * @ORM\Column(name="description_cp", type="text", nullable=true)
     */
    private $description;

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
    public function getDescription(): text
    {
        return $this->description;
    }

    /**
     * @param text $description
     */
    public function setDescription(text $description)
    {
        $this->description = $description;
    }


}


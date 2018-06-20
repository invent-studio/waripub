<?php

namespace Waripub\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="publication")
 * @ORM\Entity(repositoryClass="Waripub\MainBundle\Repository\PublicationRepository")
 */
class Publication
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
     * @ORM\Column(name="date_publication", type="datetime", nullable=false)
     */
    private $datepub;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin_publication", type="datetime", nullable=false)
     */
    private $datefinpub;

    /**
     * @ORM\ManyToOne(targetEntity="Position")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Publicite")
     */
    private $publicite;

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
    public function getDatepub(): string
    {
        return $this->datepub;
    }

    /**
     * @param string $datepub
     */
    public function setDatepub(string $datepub)
    {
        $this->datepub = $datepub;
    }

    /**
     * @return string
     */
    public function getDatefinpub(): string
    {
        return $this->datefinpub;
    }

    /**
     * @param string $datefinpub
     */
    public function setDatefinpub(string $datefinpub)
    {
        $this->datefinpub = $datefinpub;
    }



    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPublicite()
    {
        return $this->publicite;
    }

    /**
     * @param mixed $publicite
     */
    public function setPublicite($publicite)
    {
        $this->publicite = $publicite;
    }



}


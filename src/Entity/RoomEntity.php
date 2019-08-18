<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomEntityRepository")
 */
class RoomEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPlayer;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbMaxPlayer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasStarted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPlayer(): ?int
    {
        return $this->nbPlayer;
    }

    public function setNbPlayer(int $nbPlayer): self
    {
        $this->nbPlayer = $nbPlayer;

        return $this;
    }

    public function getNbMaxPlayer(): ?int
    {
        return $this->nbMaxPlayer;
    }

    public function setNbMaxPlayer(int $nbMaxPlayer): self
    {
        $this->nbMaxPlayer = $nbMaxPlayer;

        return $this;
    }

    public function getHasStarted(): ?bool
    {
        return $this->hasStarted;
    }

    public function setHasStarted(bool $hasStarted): self
    {
        $this->hasStarted = $hasStarted;

        return $this;
    }
}

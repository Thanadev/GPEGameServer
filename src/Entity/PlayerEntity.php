<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerEntityRepository")
 */
class PlayerEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $gpeToken;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGpeToken(): ?string
    {
        return $this->gpeToken;
    }

    public function setGpeToken(string $gpeToken): self
    {
        $this->gpeToken = $gpeToken;

        return $this;
    }
}

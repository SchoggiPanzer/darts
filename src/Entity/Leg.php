<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LegRepository")
 */
class Leg
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Set", inversedBy="legs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gameSet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="legWins")
     */
    private $legWinner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGameSet(): ?Set
    {
        return $this->gameSet;
    }

    public function setGameSet(?Set $gameSet): self
    {
        $this->gameSet = $gameSet;

        return $this;
    }

    public function getLegWinner(): ?User
    {
        return $this->legWinner;
    }

    public function setLegWinner(?User $legWinner): self
    {
        $this->legWinner = $legWinner;

        return $this;
    }
}

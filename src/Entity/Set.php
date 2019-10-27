<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SetRepository")
 */
class Set
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Game", inversedBy="sets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="setWins")
     */
    private $setWinner;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Leg", mappedBy="gameSet")
     */
    private $legs;

    public function __construct()
    {
        $this->legs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getSetWinner(): ?User
    {
        return $this->setWinner;
    }

    public function setSetWinner(?User $setWinner): self
    {
        $this->setWinner = $setWinner;

        return $this;
    }

    /**
     * @return Collection|Leg[]
     */
    public function getLegs(): Collection
    {
        return $this->legs;
    }

    public function addLeg(Leg $leg): self
    {
        if (!$this->legs->contains($leg)) {
            $this->legs[] = $leg;
            $leg->setGameSet($this);
        }

        return $this;
    }

    public function removeLeg(Leg $leg): self
    {
        if ($this->legs->contains($leg)) {
            $this->legs->removeElement($leg);
            // set the owning side to null (unless already changed)
            if ($leg->getGameSet() === $this) {
                $leg->setGameSet(null);
            }
        }

        return $this;
    }
}

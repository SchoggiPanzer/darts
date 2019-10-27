<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 */
class Game
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
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $mode;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="games")
     */
    private $player;

    /**
     * @ORM\Column(type="integer")
     */
    private $setsToWin;

    /**
     * @ORM\Column(type="integer")
     */
    private $legsToSet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="gameWins")
     */
    private $gameWinner;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Set", mappedBy="game")
     */
    private $sets;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Season", inversedBy="regularGames")
     */
    private $regularSeason;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Season", inversedBy="playoffGames")
     */
    private $playoffSeason;

    public function __construct()
    {
        $this->player = new ArrayCollection();
        $this->sets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMode(): ?int
    {
        return $this->mode;
    }

    public function setMode(int $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getPlayer(): Collection
    {
        return $this->player;
    }

    public function addPlayer(User $player): self
    {
        if (!$this->player->contains($player)) {
            $this->player[] = $player;
        }

        return $this;
    }

    public function removePlayer(User $player): self
    {
        if ($this->player->contains($player)) {
            $this->player->removeElement($player);
        }

        return $this;
    }

    public function getSetsToWin(): ?int
    {
        return $this->setsToWin;
    }

    public function setSetsToWin(int $setsToWin): self
    {
        $this->setsToWin = $setsToWin;

        return $this;
    }

    public function getLegsToSet(): ?int
    {
        return $this->legsToSet;
    }

    public function setLegsToSet(int $legsToSet): self
    {
        $this->legsToSet = $legsToSet;

        return $this;
    }

    public function getGameWinner(): ?User
    {
        return $this->gameWinner;
    }

    public function setGameWinner(?User $gameWinner): self
    {
        $this->gameWinner = $gameWinner;

        return $this;
    }

    /**
     * @return Collection|Set[]
     */
    public function getSets(): Collection
    {
        return $this->sets;
    }

    public function addSet(Set $set): self
    {
        if (!$this->sets->contains($set)) {
            $this->sets[] = $set;
            $set->setGame($this);
        }

        return $this;
    }

    public function removeSet(Set $set): self
    {
        if ($this->sets->contains($set)) {
            $this->sets->removeElement($set);
            // set the owning side to null (unless already changed)
            if ($set->getGame() === $this) {
                $set->setGame(null);
            }
        }

        return $this;
    }

    public function getRegularSeason(): ?Season
    {
        return $this->regularSeason;
    }

    public function setRegularSeason(?Season $regularSeason): self
    {
        $this->regularSeason = $regularSeason;

        return $this;
    }

    public function getPlayoffSeason(): ?Season
    {
        return $this->playoffSeason;
    }

    public function setPlayoffSeason(?Season $playoffSeason): self
    {
        $this->playoffSeason = $playoffSeason;

        return $this;
    }
}

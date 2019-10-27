<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="seasons")
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Game", mappedBy="regularSeason")
     */
    private $regularGames;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Game", mappedBy="playoffSeason")
     */
    private $playoffGames;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="createdSeasons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $createdBy;

    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->regularGames = new ArrayCollection();
        $this->playoffGames = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    public function addPlayer(User $player): self
    {
        if (!$this->players->contains($player)) {
            $this->players[] = $player;
        }

        return $this;
    }

    public function removePlayer(User $player): self
    {
        if ($this->players->contains($player)) {
            $this->players->removeElement($player);
        }

        return $this;
    }

    /**
     * @return Collection|Game[]
     */
    public function getRegularGames(): Collection
    {
        return $this->regularGames;
    }

    public function addRegularGame(Game $regularGame): self
    {
        if (!$this->regularGames->contains($regularGame)) {
            $this->regularGames[] = $regularGame;
            $regularGame->setRegularSeason($this);
        }

        return $this;
    }

    public function removeRegularGame(Game $regularGame): self
    {
        if ($this->regularGames->contains($regularGame)) {
            $this->regularGames->removeElement($regularGame);
            // set the owning side to null (unless already changed)
            if ($regularGame->getRegularSeason() === $this) {
                $regularGame->setRegularSeason(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Game[]
     */
    public function getPlayoffGames(): Collection
    {
        return $this->playoffGames;
    }

    public function addPlayoffGame(Game $playoffGame): self
    {
        if (!$this->playoffGames->contains($playoffGame)) {
            $this->playoffGames[] = $playoffGame;
            $playoffGame->setPlayoffSeason($this);
        }

        return $this;
    }

    public function removePlayoffGame(Game $playoffGame): self
    {
        if ($this->playoffGames->contains($playoffGame)) {
            $this->playoffGames->removeElement($playoffGame);
            // set the owning side to null (unless already changed)
            if ($playoffGame->getPlayoffSeason() === $this) {
                $playoffGame->setPlayoffSeason(null);
            }
        }

        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}

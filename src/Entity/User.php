<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Game", mappedBy="player")
     */
    private $games;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Game", mappedBy="gameWinner")
     */
    private $gameWins;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Set", mappedBy="setWinner")
     */
    private $setWins;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Leg", mappedBy="legWinner")
     */
    private $legWins;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Statistic", mappedBy="player")
     */
    private $statistics;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Season", mappedBy="players")
     */
    private $seasons;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Season", mappedBy="created_by")
     */
    private $createdSeasons;

    public function __construct()
    {
        parent::__construct();
        $this->games = new ArrayCollection();
        $this->gameWins = new ArrayCollection();
        $this->setWins = new ArrayCollection();
        $this->legWins = new ArrayCollection();
        $this->statistics = new ArrayCollection();
        $this->saisons = new ArrayCollection();
        $this->createdSeasons = new ArrayCollection();
        // your own logic
    }

    /**
     * @return Collection|Game[]
     */
    public function getGames(): Collection
    {
        return $this->games;
    }

    public function addGame(Game $game): self
    {
        if (!$this->games->contains($game)) {
            $this->games[] = $game;
            $game->addPlayer($this);
        }

        return $this;
    }

    public function removeGame(Game $game): self
    {
        if ($this->games->contains($game)) {
            $this->games->removeElement($game);
            $game->removePlayer($this);
        }

        return $this;
    }

    /**
     * @return Collection|Game[]
     */
    public function getGameWins(): Collection
    {
        return $this->gameWins;
    }

    public function addGameWin(Game $gameWin): self
    {
        if (!$this->gameWins->contains($gameWin)) {
            $this->gameWins[] = $gameWin;
            $gameWin->setGameWinner($this);
        }

        return $this;
    }

    public function removeGameWin(Game $gameWin): self
    {
        if ($this->gameWins->contains($gameWin)) {
            $this->gameWins->removeElement($gameWin);
            // set the owning side to null (unless already changed)
            if ($gameWin->getGameWinner() === $this) {
                $gameWin->setGameWinner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Set[]
     */
    public function getSetWins(): Collection
    {
        return $this->setWins;
    }

    public function addSetWin(Set $setWin): self
    {
        if (!$this->setWins->contains($setWin)) {
            $this->setWins[] = $setWin;
            $setWin->setSetWinner($this);
        }

        return $this;
    }

    public function removeSetWin(Set $setWin): self
    {
        if ($this->setWins->contains($setWin)) {
            $this->setWins->removeElement($setWin);
            // set the owning side to null (unless already changed)
            if ($setWin->getSetWinner() === $this) {
                $setWin->setSetWinner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Leg[]
     */
    public function getLegWins(): Collection
    {
        return $this->legWins;
    }

    public function addLegWin(Leg $legWin): self
    {
        if (!$this->legWins->contains($legWin)) {
            $this->legWins[] = $legWin;
            $legWin->setLegWinner($this);
        }

        return $this;
    }

    public function removeLegWin(Leg $legWin): self
    {
        if ($this->legWins->contains($legWin)) {
            $this->legWins->removeElement($legWin);
            // set the owning side to null (unless already changed)
            if ($legWin->getLegWinner() === $this) {
                $legWin->setLegWinner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Statistic[]
     */
    public function getStatistics(): Collection
    {
        return $this->statistics;
    }

    public function addStatistic(Statistic $statistic): self
    {
        if (!$this->statistics->contains($statistic)) {
            $this->statistics[] = $statistic;
            $statistic->setPlayer($this);
        }

        return $this;
    }

    public function removeStatistic(Statistic $statistic): self
    {
        if ($this->statistics->contains($statistic)) {
            $this->statistics->removeElement($statistic);
            // set the owning side to null (unless already changed)
            if ($statistic->getPlayer() === $this) {
                $statistic->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Season[]
     */
    public function getSeasons(): Collection
    {
        return $this->seasons;
    }

    public function addSeason(Season $season): self
    {
        if (!$this->seasons->contains($season)) {
            $this->seasons[] = $season;
            $season->addPlayer($this);
        }

        return $this;
    }

    public function removeSeason(Season $season): self
    {
        if ($this->seasons->contains($season)) {
            $this->seasons->removeElement($season);
            $season->removePlayer($this);
        }

        return $this;
    }

    /**
     * @return Collection|Season[]
     */
    public function getCreatedSeasons(): Collection
    {
        return $this->createdSeasons;
    }

    public function addCreatedSeason(Season $createdSeason): self
    {
        if (!$this->createdSeasons->contains($createdSeason)) {
            $this->createdSeasons[] = $createdSeason;
            $createdSeason->setCreatedBy($this);
        }

        return $this;
    }

    public function removeCreatedSeason(Season $createdSeason): self
    {
        if ($this->createdSeasons->contains($createdSeason)) {
            $this->createdSeasons->removeElement($createdSeason);
            // set the owning side to null (unless already changed)
            if ($createdSeason->getCreatedBy() === $this) {
                $createdSeason->setCreatedBy(null);
            }
        }

        return $this;
    }
}
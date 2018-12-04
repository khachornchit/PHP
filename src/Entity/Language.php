<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LanguageRepository")
 */
class Language
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Film", inversedBy="language_id")
     */
    private $film;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Film", mappedBy="original_language_id")
     */
    private $original_language_films;

    public function __construct()
    {
        $this->original_language_films = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->last_update;
    }

    public function setLastUpdate(\DateTimeInterface $last_update): self
    {
        $this->last_update = $last_update;

        return $this;
    }

    public function getFilm(): ?Film
    {
        return $this->film;
    }

    public function setFilm(?Film $film): self
    {
        $this->film = $film;

        return $this;
    }

    /**
     * @return Collection|Film[]
     */
    public function getOriginalLanguageFilms(): Collection
    {
        return $this->original_language_films;
    }

    public function addFilm(Film $film): self
    {
        if (!$this->original_language_films->contains($film)) {
            $this->original_language_films[] = $film;
            $film->setOriginalLanguageId($this);
        }

        return $this;
    }

    public function removeFilm(Film $film): self
    {
        if ($this->original_language_films->contains($film)) {
            $this->original_language_films->removeElement($film);
            // set the owning side to null (unless already changed)
            if ($film->getOriginalLanguageId() === $this) {
                $film->setOriginalLanguageId(null);
            }
        }

        return $this;
    }
}

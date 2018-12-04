<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmRepository")
 */
class Film
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Language", mappedBy="film")
     */
    private $language_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $length;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Language", inversedBy="films")
     */
    private $original_language_id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $rating;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $release_year;

    /**
     * @ORM\Column(type="integer")
     */
    private $rental_rate;

    /**
     * @ORM\Column(type="integer")
     */
    private $rental_duration;

    /**
     * @ORM\Column(type="float")
     */
    private $replacement_cost;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $special_features;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Inventory", mappedBy="film_id")
     */
    private $inventories;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FilmText", mappedBy="film_id", cascade={"persist", "remove"})
     */
    private $filmText;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="films")
     */
    private $category_id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Actor", inversedBy="films")
     */
    private $actor_id;

    public function __construct()
    {
        $this->language_id = new ArrayCollection();
        $this->inventories = new ArrayCollection();
        $this->actor_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Language[]
     */
    public function getLanguageId(): Collection
    {
        return $this->language_id;
    }

    public function addLanguageId(Language $languageId): self
    {
        if (!$this->language_id->contains($languageId)) {
            $this->language_id[] = $languageId;
            $languageId->setFilm($this);
        }

        return $this;
    }

    public function removeLanguageId(Language $languageId): self
    {
        if ($this->language_id->contains($languageId)) {
            $this->language_id->removeElement($languageId);
            // set the owning side to null (unless already changed)
            if ($languageId->getFilm() === $this) {
                $languageId->setFilm(null);
            }
        }

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

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(?int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getOriginalLanguageId(): ?Language
    {
        return $this->original_language_id;
    }

    public function setOriginalLanguageId(?Language $original_language_id): self
    {
        $this->original_language_id = $original_language_id;

        return $this;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getReleaseYear(): ?int
    {
        return $this->release_year;
    }

    public function setReleaseYear(?int $release_year): self
    {
        $this->release_year = $release_year;

        return $this;
    }

    public function getRentalRate(): ?int
    {
        return $this->rental_rate;
    }

    public function setRentalRate(int $rental_rate): self
    {
        $this->rental_rate = $rental_rate;

        return $this;
    }

    public function getRentalDuration(): ?int
    {
        return $this->rental_duration;
    }

    public function setRentalDuration(int $rental_duration): self
    {
        $this->rental_duration = $rental_duration;

        return $this;
    }

    public function getReplacementCost(): ?float
    {
        return $this->replacement_cost;
    }

    public function setReplacementCost(float $replacement_cost): self
    {
        $this->replacement_cost = $replacement_cost;

        return $this;
    }

    public function getSpecialFeatures(): ?string
    {
        return $this->special_features;
    }

    public function setSpecialFeatures(?string $special_features): self
    {
        $this->special_features = $special_features;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Inventory[]
     */
    public function getInventories(): Collection
    {
        return $this->inventories;
    }

    public function addInventory(Inventory $inventory): self
    {
        if (!$this->inventories->contains($inventory)) {
            $this->inventories[] = $inventory;
            $inventory->setFilmId($this);
        }

        return $this;
    }

    public function removeInventory(Inventory $inventory): self
    {
        if ($this->inventories->contains($inventory)) {
            $this->inventories->removeElement($inventory);
            // set the owning side to null (unless already changed)
            if ($inventory->getFilmId() === $this) {
                $inventory->setFilmId(null);
            }
        }

        return $this;
    }

    public function getFilmText(): ?FilmText
    {
        return $this->filmText;
    }

    public function setFilmText(?FilmText $filmText): self
    {
        $this->filmText = $filmText;

        // set (or unset) the owning side of the relation if necessary
        $newFilm_id = $filmText === null ? null : $this;
        if ($newFilm_id !== $filmText->getFilmId()) {
            $filmText->setFilmId($newFilm_id);
        }

        return $this;
    }

    public function getCategoryId(): ?Category
    {
        return $this->category_id;
    }

    public function setCategoryId(?Category $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * @return Collection|Actor[]
     */
    public function getActorId(): Collection
    {
        return $this->actor_id;
    }

    public function addActorId(Actor $actorId): self
    {
        if (!$this->actor_id->contains($actorId)) {
            $this->actor_id[] = $actorId;
        }

        return $this;
    }

    public function removeActorId(Actor $actorId): self
    {
        if ($this->actor_id->contains($actorId)) {
            $this->actor_id->removeElement($actorId);
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InventoryRepository")
 */
class Inventory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Film", inversedBy="inventories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $film_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rental", mappedBy="inventory_id")
     */
    private $rentals;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Store", inversedBy="inventories")
     */
    private $store_id;

    public function __construct()
    {
        $this->rentals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilmId(): ?Film
    {
        return $this->film_id;
    }

    public function setFilmId(?Film $film_id): self
    {
        $this->film_id = $film_id;

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

    /**
     * @return Collection|Rental[]
     */
    public function getRentals(): Collection
    {
        return $this->rentals;
    }

    public function addRental(Rental $rental): self
    {
        if (!$this->rentals->contains($rental)) {
            $this->rentals[] = $rental;
            $rental->setInventoryId($this);
        }

        return $this;
    }

    public function removeRental(Rental $rental): self
    {
        if ($this->rentals->contains($rental)) {
            $this->rentals->removeElement($rental);
            // set the owning side to null (unless already changed)
            if ($rental->getInventoryId() === $this) {
                $rental->setInventoryId(null);
            }
        }

        return $this;
    }

    public function getStoreId(): ?Store
    {
        return $this->store_id;
    }

    public function setStoreId(?Store $store_id): self
    {
        $this->store_id = $store_id;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StoreRepository")
 */
class Store
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Address", inversedBy="store", cascade={"persist", "remove"})
     */
    private $address_id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Staff", inversedBy="store", cascade={"persist", "remove"})
     */
    private $manager_staff_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Customer", mappedBy="store_id")
     */
    private $customers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Inventory", mappedBy="store_id")
     */
    private $inventories;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
        $this->inventories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddressId(): ?Address
    {
        return $this->address_id;
    }

    public function setAddressId(?Address $address_id): self
    {
        $this->address_id = $address_id;

        return $this;
    }

    public function getManagerStaffId(): ?Staff
    {
        return $this->manager_staff_id;
    }

    public function setManagerStaffId(?Staff $manager_staff_id): self
    {
        $this->manager_staff_id = $manager_staff_id;

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
     * @return Collection|Customer[]
     */
    public function getCustomers(): Collection
    {
        return $this->customers;
    }

    public function addCustomer(Customer $customer): self
    {
        if (!$this->customers->contains($customer)) {
            $this->customers[] = $customer;
            $customer->setStoreId($this);
        }

        return $this;
    }

    public function removeCustomer(Customer $customer): self
    {
        if ($this->customers->contains($customer)) {
            $this->customers->removeElement($customer);
            // set the owning side to null (unless already changed)
            if ($customer->getStoreId() === $this) {
                $customer->setStoreId(null);
            }
        }

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
            $inventory->setStoreId($this);
        }

        return $this;
    }

    public function removeInventory(Inventory $inventory): self
    {
        if ($this->inventories->contains($inventory)) {
            $this->inventories->removeElement($inventory);
            // set the owning side to null (unless already changed)
            if ($inventory->getStoreId() === $this) {
                $inventory->setStoreId(null);
            }
        }

        return $this;
    }
}

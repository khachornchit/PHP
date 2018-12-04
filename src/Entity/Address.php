<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AddressRepository")
 */
class Address
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="addresses")
     */
    private $city_id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $district;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\Column(type="blob")
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $postal_code;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Staff", mappedBy="address_id")
     */
    private $staff;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Store", mappedBy="address_id", cascade={"persist", "remove"})
     */
    private $store;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Customer", mappedBy="address_id", cascade={"persist", "remove"})
     */
    private $customer;

    public function __construct()
    {
        $this->staff = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getCityId(): ?City
    {
        return $this->city_id;
    }

    public function setCityId(?City $city_id): self
    {
        $this->city_id = $city_id;

        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(string $district): self
    {
        $this->district = $district;

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

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * @return Collection|Staff[]
     */
    public function getStaff(): Collection
    {
        return $this->staff;
    }

    public function addStaff(Staff $staff): self
    {
        if (!$this->staff->contains($staff)) {
            $this->staff[] = $staff;
            $staff->setAddressId($this);
        }

        return $this;
    }

    public function removeStaff(Staff $staff): self
    {
        if ($this->staff->contains($staff)) {
            $this->staff->removeElement($staff);
            // set the owning side to null (unless already changed)
            if ($staff->getAddressId() === $this) {
                $staff->setAddressId(null);
            }
        }

        return $this;
    }

    public function getStore(): ?Store
    {
        return $this->store;
    }

    public function setStore(?Store $store): self
    {
        $this->store = $store;

        // set (or unset) the owning side of the relation if necessary
        $newAddress_id = $store === null ? null : $this;
        if ($newAddress_id !== $store->getAddressId()) {
            $store->setAddressId($newAddress_id);
        }

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        // set (or unset) the owning side of the relation if necessary
        $newAddress_id = $customer === null ? null : $this;
        if ($newAddress_id !== $customer->getAddressId()) {
            $customer->setAddressId($newAddress_id);
        }

        return $this;
    }
}

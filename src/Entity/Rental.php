<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RentalRepository")
 */
class Rental
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="rentals")
     */
    private $customer_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Inventory", inversedBy="rentals")
     */
    private $inventory_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\Column(type="datetime")
     */
    private $rental_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $return_date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Staff", mappedBy="rental")
     */
    private $staff_id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Payment", mappedBy="rental_id")
     */
    private $payments;

    public function __construct()
    {
        $this->staff_id = new ArrayCollection();
        $this->payments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerId(): ?Customer
    {
        return $this->customer_id;
    }

    public function setCustomerId(?Customer $customer_id): self
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    public function getInventoryId(): ?Inventory
    {
        return $this->inventory_id;
    }

    public function setInventoryId(?Inventory $inventory_id): self
    {
        $this->inventory_id = $inventory_id;

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

    public function getRentalDate(): ?\DateTimeInterface
    {
        return $this->rental_date;
    }

    public function setRentalDate(\DateTimeInterface $rental_date): self
    {
        $this->rental_date = $rental_date;

        return $this;
    }

    public function getReturnDate(): ?\DateTimeInterface
    {
        return $this->return_date;
    }

    public function setReturnDate(?\DateTimeInterface $return_date): self
    {
        $this->return_date = $return_date;

        return $this;
    }

    /**
     * @return Collection|Staff[]
     */
    public function getStaffId(): Collection
    {
        return $this->staff_id;
    }

    public function addStaffId(Staff $staffId): self
    {
        if (!$this->staff_id->contains($staffId)) {
            $this->staff_id[] = $staffId;
            $staffId->setRental($this);
        }

        return $this;
    }

    public function removeStaffId(Staff $staffId): self
    {
        if ($this->staff_id->contains($staffId)) {
            $this->staff_id->removeElement($staffId);
            // set the owning side to null (unless already changed)
            if ($staffId->getRental() === $this) {
                $staffId->setRental(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Payment[]
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): self
    {
        if (!$this->payments->contains($payment)) {
            $this->payments[] = $payment;
            $payment->setRentalId($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): self
    {
        if ($this->payments->contains($payment)) {
            $this->payments->removeElement($payment);
            // set the owning side to null (unless already changed)
            if ($payment->getRentalId() === $this) {
                $payment->setRentalId(null);
            }
        }

        return $this;
    }
}

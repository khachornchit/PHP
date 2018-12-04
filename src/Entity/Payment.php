<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaymentRepository")
 */
class Payment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="payments")
     */
    private $customer_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update;

    /**
     * @ORM\Column(type="datetime")
     */
    private $payment_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rental", inversedBy="payments")
     */
    private $rental_id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Staff", mappedBy="payment")
     */
    private $staff_id;

    public function __construct()
    {
        $this->staff_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
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

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->last_update;
    }

    public function setLastUpdate(\DateTimeInterface $last_update): self
    {
        $this->last_update = $last_update;

        return $this;
    }

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->payment_date;
    }

    public function setPaymentDate(\DateTimeInterface $payment_date): self
    {
        $this->payment_date = $payment_date;

        return $this;
    }

    public function getRentalId(): ?Rental
    {
        return $this->rental_id;
    }

    public function setRentalId(?Rental $rental_id): self
    {
        $this->rental_id = $rental_id;

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
            $staffId->setPayment($this);
        }

        return $this;
    }

    public function removeStaffId(Staff $staffId): self
    {
        if ($this->staff_id->contains($staffId)) {
            $this->staff_id->removeElement($staffId);
            // set the owning side to null (unless already changed)
            if ($staffId->getPayment() === $this) {
                $staffId->setPayment(null);
            }
        }

        return $this;
    }
}

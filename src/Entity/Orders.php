<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
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
    private $email;



    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_travel", type="date", nullable=true)
     */
    private $dateTravel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;
 
    /**
     * @var int|null
     *
     * @ORM\Column(name="guide", type="integer", nullable=true)
     */
    private $guide;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pocket_wifi", type="integer", nullable=true)
     */
    private $pocketWifi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bank_acceptance", type="string", length=255, nullable=true)
     */
    private $bankAcceptance;

    /** 
     * @ORM\OneToOne (targetEntity="Tickets", mappedBy="orders", cascade={"persist"})
     * @ORM\JoinColumn(name="tickets_id", referencedColumnName="id")
    */
    protected $tickets;

      /** 
     * @ORM\OneToOne (targetEntity="Shipping", mappedBy="orders", cascade={"persist"})
     * @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
    */
    protected $shipping;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateTravel(): ?\DateTimeInterface
    {
        return $this->dateTravel;
    }

    public function setDateTravel(?\DateTimeInterface $dateTravel): self
    {
        $this->dateTravel = $dateTravel;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getGuide(): ?int
    {
        return $this->guide;
    }

    public function setGuide(?int $guide): self
    {
        $this->guide = $guide;

        return $this;
    }

    public function getPocketWifi(): ?int
    {
        return $this->pocketWifi;
    }

    public function setPocketWifi(?int $pocketWifi): self
    {
        $this->pocketWifi = $pocketWifi;

        return $this;
    }

    public function getBankAcceptance(): ?string
    {
        return $this->bankAcceptance;
    }

    public function setBankAcceptance(?string $bankAcceptance): self
    {
        $this->bankAcceptance = $bankAcceptance;

        return $this;
    }

    public function getTickets(): ?Tickets
    {
        return $this->tickets;
    }

    public function setTickets(?Tickets $tickets): self
    {
        // unset the owning side of the relation if necessary
        if ($tickets === null && $this->tickets !== null) {
            $this->tickets->setOrders(null);
        }

        // set the owning side of the relation if necessary
        if ($tickets !== null && $tickets->getOrders() !== $this) {
            $tickets->setOrders($this);
        }

        $this->tickets = $tickets;

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }

    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    public function setShipping(?Shipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }


}

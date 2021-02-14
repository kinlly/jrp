<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipping
 *
 * @ORM\Table(name="shipping")
 * @ORM\Entity
 */
class Shipping
{
     /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street_address", type="string", length=255, nullable=true)
     */
    private $streetAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip_code", type="string", length=255, nullable=true)
     */
    private $zipCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;


    /**
     * @var int|null
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

  
    /**
     *
     * @ORM\OneToOne(targetEntity="Orders", inversedBy="shipping")
     * @ORM\JoinColumn(name="orders_id", referencedColumnName="id")
     */
    protected $orders;
    protected $orderid;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getId(): ?Orders
    {
        return $this->id;
    }

    public function setId(?Orders $id): self
    {
        $this->id = $id;

        return $this;
    }

    
    public function __toString()
    {
        return $this->id;
    }

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }


}

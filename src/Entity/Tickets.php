<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets")
 * @ORM\Entity
 */
class Tickets
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var int|null
     *
     * @ORM\Column(name="adult_7", type="integer", nullable=true)
     */
    private $adult7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adult_14", type="integer", nullable=true)
     */
    private $adult14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adult_21", type="integer", nullable=true)
     */
    private $adult21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adult_green_7", type="integer", nullable=true)
     */
    private $adultGreen7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adult_green_14", type="integer", nullable=true)
     */
    private $adultGreen14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adult_green_21", type="integer", nullable=true)
     */
    private $adultGreen21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_7", type="integer", nullable=true)
     */
    private $child7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_14", type="integer", nullable=true)
     */
    private $child14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_21", type="integer", nullable=true)
     */
    private $child21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_green_7", type="integer", nullable=true)
     */
    private $childGreen7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_green_14", type="integer", nullable=true)
     */
    private $childGreen14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_green_21", type="integer", nullable=true)
     */
    private $childGreen21;

     /**
     *
     * @ORM\OneToOne(targetEntity="Orders", inversedBy="tickets")
     * @ORM\JoinColumn(name="orders_id", referencedColumnName="id")
     */
    protected $orders;
    protected $orderid;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getOrderId(): ?int
    {
        return $this->orderid;
    }

    public function setOrderId(?int $orderid): self
    {
        $this->orderid = $orderid;

        return $this;
    }

    public function getAdult7(): ?int
    {
        return $this->adult7;
    }

    public function setAdult7(?int $adult7): self
    {
        $this->adult7 = $adult7;

        return $this;
    }

    public function getAdult14(): ?int
    {
        return $this->adult14;
    }

    public function setAdult14(?int $adult14): self
    {
        $this->adult14 = $adult14;

        return $this;
    }

    public function getAdult21(): ?int
    {
        return $this->adult21;
    }

    public function setAdult21(?int $adult21): self
    {
        $this->adult21 = $adult21;

        return $this;
    }

    public function getAdultGreen7(): ?int
    {
        return $this->adultGreen7;
    }

    public function setAdultGreen7(?int $adultGreen7): self
    {
        $this->adultGreen7 = $adultGreen7;

        return $this;
    }

    public function getAdultGreen14(): ?int
    {
        return $this->adultGreen14;
    }

    public function setAdultGreen14(?int $adultGreen14): self
    {
        $this->adultGreen14 = $adultGreen14;

        return $this;
    }

    public function getAdultGreen21(): ?int
    {
        return $this->adultGreen21;
    }

    public function setAdultGreen21(?int $adultGreen21): self
    {
        $this->adultGreen21 = $adultGreen21;

        return $this;
    }

    public function getChild7(): ?int
    {
        return $this->child7;
    }

    public function setChild7(?int $child7): self
    {
        $this->child7 = $child7;

        return $this;
    }

    public function getChild14(): ?int
    {
        return $this->child14;
    }

    public function setChild14(?int $child14): self
    {
        $this->child14 = $child14;

        return $this;
    }

    public function getChild21(): ?int
    {
        return $this->child21;
    }

    public function setChild21(?int $child21): self
    {
        $this->child21 = $child21;

        return $this;
    }

    public function getChildGreen7(): ?int
    {
        return $this->childGreen7;
    }

    public function setChildGreen7(?int $childGreen7): self
    {
        $this->childGreen7 = $childGreen7;

        return $this;
    }

    public function getChildGreen14(): ?int
    {
        return $this->childGreen14;
    }

    public function setChildGreen14(?int $childGreen14): self
    {
        $this->childGreen14 = $childGreen14;

        return $this;
    }

    public function getChildGreen21(): ?int
    {
        return $this->childGreen21;
    }

    public function setChildGreen21(?int $childGreen21): self
    {
        $this->childGreen21 = $childGreen21;

        return $this;
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
     
    public function __toString()
    {
        return $this->id;
    }



}

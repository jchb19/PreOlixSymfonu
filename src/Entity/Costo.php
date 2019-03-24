<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Costo
 *
 * @ORM\Table(name="costo")
 * @ORM\Entity
 */
class Costo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="order", type="integer", nullable=false)
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="wtg", type="string", length=100, nullable=false)
     */
    private $wtg;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=200, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var float
     *
     * @ORM\Column(name="cost_estimated", type="float", precision=10, scale=0, nullable=false)
     */
    private $costEstimated;

    /**
     * @var float
     *
     * @ORM\Column(name="cost_actual", type="float", precision=10, scale=0, nullable=false)
     */
    private $costActual;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getWtg(): ?string
    {
        return $this->wtg;
    }

    public function setWtg(string $wtg): self
    {
        $this->wtg = $wtg;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getCostEstimated(): ?float
    {
        return $this->costEstimated;
    }

    public function setCostEstimated(float $costEstimated): self
    {
        $this->costEstimated = $costEstimated;

        return $this;
    }

    public function getCostActual(): ?float
    {
        return $this->costActual;
    }

    public function setCostActual(float $costActual): self
    {
        $this->costActual = $costActual;

        return $this;
    }


}

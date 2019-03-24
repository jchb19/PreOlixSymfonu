<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inspeccion
 *
 * @ORM\Table(name="inspeccion")
 * @ORM\Entity(repositoryClass="App\Repository\InspeccionRepository")
 */
class Inspeccion
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $fecha = 'current_timestamp()';

    /**
     * @var string
     *
     * @ORM\Column(name="farm_name", type="string", length=100, nullable=false)
     */
    private $farmName;

    /**
     * @var int
     *
     * @ORM\Column(name="wtg", type="integer", nullable=false)
     */
    private $wtg;

    /**
     * @var string
     *
     * @ORM\Column(name="blade", type="string", length=2, nullable=false)
     */
    private $blade;

    /**
     * @var string
     *
     * @ORM\Column(name="blade_side", type="string", length=100, nullable=false)
     */
    private $bladeSide;

    /**
     * @var string
     *
     * @ORM\Column(name="damage_type", type="string", length=100, nullable=false)
     */
    private $damageType;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="severity", type="integer", nullable=false)
     */
    private $severity;

    /**
     * @var float
     *
     * @ORM\Column(name="distance_from_root", type="float", precision=10, scale=0, nullable=false)
     */
    private $distanceFromRoot;

    /**
     * @var float
     *
     * @ORM\Column(name="n_code", type="float", precision=10, scale=0, nullable=false)
     */
    private $nCode;

    /**
     * @var int
     *
     * @ORM\Column(name="zone", type="integer", nullable=false)
     */
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="cs", type="string", length=1, nullable=false)
     */
    private $cs;

    /**
     * @var string
     *
     * @ORM\Column(name="ci", type="string", length=1, nullable=false)
     */
    private $ci;

    /**
     * @var int
     *
     * @ORM\Column(name="ba", type="integer", nullable=false)
     */
    private $ba;

    /**
     * @var int
     *
     * @ORM\Column(name="long", type="integer", nullable=false)
     */
    private $long;

    /**
     * @var int
     *
     * @ORM\Column(name="trans", type="integer", nullable=false)
     */
    private $trans;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="work_to_do", type="string", length=200, nullable=false)
     */
    private $workToDo;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=200, nullable=false)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=500, nullable=false)
     */
    private $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="picture1", type="string", length=500, nullable=false)
     */
    private $picture1;

    /**
     * @var string
     *
     * @ORM\Column(name="picture2", type="string", length=500, nullable=false)
     */
    private $picture2;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=500, nullable=false)
     */
    private $picture;

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

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getFarmName(): ?string
    {
        return $this->farmName;
    }

    public function setFarmName(string $farmName): self
    {
        $this->farmName = $farmName;

        return $this;
    }

    public function getWtg(): ?int
    {
        return $this->wtg;
    }

    public function setWtg(int $wtg): self
    {
        $this->wtg = $wtg;

        return $this;
    }

    public function getBlade(): ?string
    {
        return $this->blade;
    }

    public function setBlade(string $blade): self
    {
        $this->blade = $blade;

        return $this;
    }

    public function getBladeSide(): ?string
    {
        return $this->bladeSide;
    }

    public function setBladeSide(string $bladeSide): self
    {
        $this->bladeSide = $bladeSide;

        return $this;
    }

    public function getDamageType(): ?string
    {
        return $this->damageType;
    }

    public function setDamageType(string $damageType): self
    {
        $this->damageType = $damageType;

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

    public function getSeverity(): ?int
    {
        return $this->severity;
    }

    public function setSeverity(int $severity): self
    {
        $this->severity = $severity;

        return $this;
    }

    public function getDistanceFromRoot(): ?float
    {
        return $this->distanceFromRoot;
    }

    public function setDistanceFromRoot(float $distanceFromRoot): self
    {
        $this->distanceFromRoot = $distanceFromRoot;

        return $this;
    }

    public function getNCode(): ?float
    {
        return $this->nCode;
    }

    public function setNCode(float $nCode): self
    {
        $this->nCode = $nCode;

        return $this;
    }

    public function getZone(): ?int
    {
        return $this->zone;
    }

    public function setZone(int $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getCs(): ?string
    {
        return $this->cs;
    }

    public function setCs(string $cs): self
    {
        $this->cs = $cs;

        return $this;
    }

    public function getCi(): ?string
    {
        return $this->ci;
    }

    public function setCi(string $ci): self
    {
        $this->ci = $ci;

        return $this;
    }

    public function getBa(): ?int
    {
        return $this->ba;
    }

    public function setBa(int $ba): self
    {
        $this->ba = $ba;

        return $this;
    }

    public function getLong(): ?int
    {
        return $this->long;
    }

    public function setLong(int $long): self
    {
        $this->long = $long;

        return $this;
    }

    public function getTrans(): ?int
    {
        return $this->trans;
    }

    public function setTrans(int $trans): self
    {
        $this->trans = $trans;

        return $this;
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

    public function getWorkToDo(): ?string
    {
        return $this->workToDo;
    }

    public function setWorkToDo(string $workToDo): self
    {
        $this->workToDo = $workToDo;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getPicture1(): ?string
    {
        return $this->picture1;
    }

    public function setPicture1(string $picture1): self
    {
        $this->picture1 = $picture1;

        return $this;
    }

    public function getPicture2(): ?string
    {
        return $this->picture2;
    }

    public function setPicture2(string $picture2): self
    {
        $this->picture2 = $picture2;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }


}

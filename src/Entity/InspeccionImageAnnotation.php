<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InspeccionImageAnnotation
 *
 * @ORM\Table(name="inspeccion_image_annotation", indexes={@ORM\Index(name="inspeccion", columns={"inspeccion"})})
 * @ORM\Entity
 */
class InspeccionImageAnnotation
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
     * @var int|null
     *
     * @ORM\Column(name="role", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $role = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="annotation", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $annotation = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="current_timestamp()"})
     */
    private $createdAt = 'current_timestamp()';

    /**
     * @var \Inspeccion
     *
     * @ORM\ManyToOne(targetEntity="Inspeccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inspeccion", referencedColumnName="id")
     * })
     */
    private $inspeccion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(?int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    public function setAnnotation(?string $annotation): self
    {
        $this->annotation = $annotation;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy): self
    {
        $this->createdBy = $createdBy;

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

    public function getInspeccion(): ?Inspeccion
    {
        return $this->inspeccion;
    }

    public function setInspeccion(?Inspeccion $inspeccion): self
    {
        $this->inspeccion = $inspeccion;

        return $this;
    }


}

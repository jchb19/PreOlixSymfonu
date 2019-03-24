<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InspeccionImage
 *
 * @ORM\Table(name="inspeccion_image")
 * @ORM\Entity
 */
class InspeccionImage
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="public", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $public = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false, options={"default"="'web/images/'"})
     */
    private $path = '\'web/images/\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="uploaded_by", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $uploadedBy = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdAt = 'NULL';

    /**
     * @var \Inspeccion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Inspeccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getPublic(): ?int
    {
        return $this->public;
    }

    public function setPublic(?int $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getUploadedBy(): ?int
    {
        return $this->uploadedBy;
    }

    public function setUploadedBy(?int $uploadedBy): self
    {
        $this->uploadedBy = $uploadedBy;

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

    public function getId(): ?Inspeccion
    {
        return $this->id;
    }

    public function setId(?Inspeccion $id): self
    {
        $this->id = $id;

        return $this;
    }


}

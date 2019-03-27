<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InspeccionImageSquare
 *
 * @ORM\Table(name="inspeccion_image_square")
 * @ORM\Entity(repositoryClass="App\Repository\InspeccionImageSquareRepository")
 */
class InspeccionImageSquare
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="inspeccion", type="integer", nullable=false)
     */
    private $inspeccion;

    /**
     * @var int
     *
     * @ORM\Column(name="x", type="integer", nullable=false)
     */
    private $x;

    /**
     * @var int
     *
     * @ORM\Column(name="y", type="integer", nullable=false)
     */
    private $y;

    /**
     * @var int|null
     *
     * @ORM\Column(name="width", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $width = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=90, nullable=false)
     */
    private $createdBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_by", type="string", length=90, nullable=true, options={"default"="NULL"})
     */
    private $updatedBy = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $createdAt = 'current_timestamp()';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $updatedAt = 'current_timestamp()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="delete_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $deleteAt = 'NULL';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getInspeccion(): int
    {
        return $this->inspeccion;
    }

    /**
     * @param int $inspeccion
     */
    public function setInspeccion(int $inspeccion): void
    {
        $this->inspeccion = $inspeccion;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     */
    public function setWidth(?int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }

    /**
     * @param int|null $state
     */
    public function setState(?int $state): void
    {
        $this->state = $state;
    }



}

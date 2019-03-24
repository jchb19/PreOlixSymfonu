<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $fecha = 'current_timestamp()';

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO", type="string", length=10, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDO", type="string", length=100, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="PERFIL", type="string", length=1, nullable=false, options={"default"="'2'","fixed"=true})
     */
    private $perfil = '\'2\'';

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=10, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $status = '\'1\'';

    /**
     * @var string
     *
     * @ORM\Column(name="PARQUE", type="string", length=100, nullable=false)
     */
    private $parque;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getPerfil(): ?string
    {
        return $this->perfil;
    }

    public function setPerfil(string $perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getParque(): ?string
    {
        return $this->parque;
    }

    public function setParque(string $parque): self
    {
        $this->parque = $parque;

        return $this;
    }


}

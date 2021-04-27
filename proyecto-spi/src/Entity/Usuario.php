<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="Usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_usuario", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id_usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ine", type="string", length=18, nullable=true)
     */
    private $ine;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=20)
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Compra", mappedBy="usuario", cascade={"persist"})
     */
    private $compras;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Almacen", mappedBy="usuario", cascade={"persist"})
     */
    private $almacenes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\MovimientoAlmacen", mappedBy="usuario", cascade={"persist"})
     */
    private $movimientos_almacenes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->almacenes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->movimientos_almacenes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdUsuario(): ?string
    {
        return $this->id_usuario;
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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getIne(): ?string
    {
        return $this->ine;
    }

    public function setIne(?string $ine): self
    {
        $this->ine = $ine;

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

    public function getRol(): ?string
    {
        return $this->rol;
    }

    public function setRol(string $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * @return Collection|Compra[]
     */
    public function getCompras(): Collection
    {
        return $this->compras;
    }

    public function addCompra(Compra $compra): self
    {
        if (!$this->compras->contains($compra)) {
            $this->compras[] = $compra;
            $compra->setUsuario($this);
        }

        return $this;
    }

    public function removeCompra(Compra $compra): self
    {
        if ($this->compras->removeElement($compra)) {
            // set the owning side to null (unless already changed)
            if ($compra->getUsuario() === $this) {
                $compra->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Almacen[]
     */
    public function getAlmacenes(): Collection
    {
        return $this->almacenes;
    }

    public function addAlmacene(Almacen $almacene): self
    {
        if (!$this->almacenes->contains($almacene)) {
            $this->almacenes[] = $almacene;
            $almacene->setUsuario($this);
        }

        return $this;
    }

    public function removeAlmacene(Almacen $almacene): self
    {
        if ($this->almacenes->removeElement($almacene)) {
            // set the owning side to null (unless already changed)
            if ($almacene->getUsuario() === $this) {
                $almacene->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MovimientoAlmacen[]
     */
    public function getMovimientosAlmacenes(): Collection
    {
        return $this->movimientos_almacenes;
    }

    public function addMovimientosAlmacene(MovimientoAlmacen $movimientosAlmacene): self
    {
        if (!$this->movimientos_almacenes->contains($movimientosAlmacene)) {
            $this->movimientos_almacenes[] = $movimientosAlmacene;
            $movimientosAlmacene->setUsuario($this);
        }

        return $this;
    }

    public function removeMovimientosAlmacene(MovimientoAlmacen $movimientosAlmacene): self
    {
        if ($this->movimientos_almacenes->removeElement($movimientosAlmacene)) {
            // set the owning side to null (unless already changed)
            if ($movimientosAlmacene->getUsuario() === $this) {
                $movimientosAlmacene->setUsuario(null);
            }
        }

        return $this;
    }

}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="Producto")
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_producto", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id_producto;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_producto", type="string", length=63)
     */
    private $tipo_producto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="folio", type="string", length=15)
     */
    private $folio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unidad", type="string", length=255, nullable=true)
     */
    private $unidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_insumo", type="text", nullable=true)
     */
    private $descripcion_insumo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marca", type="string", length=255, nullable=true)
     */
    private $marca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modelo", type="string", length=255, nullable=true)
     */
    private $modelo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_serie", type="string", length=31, nullable=true)
     */
    private $numero_serie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_motor_maquinaria", type="string", length=31, nullable=true)
     */
    private $numero_motor_maquinaria;

    /**
     * @var bool
     *
     * @ORM\Column(name="oculto", type="boolean")
     */
    private $oculto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\ProductoComprado", mappedBy="producto", cascade={"persist"})
     */
    private $productos_comprados;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\ProductoMovimiento", mappedBy="producto", cascade={"persist"})
     */
    private $productos_en_movimientos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\ProductoExistencia", mappedBy="producto", cascade={"persist"})
     */
    private $productos_en_existencia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productos_comprados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productos_en_movimientos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productos_en_existencia = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdProducto(): ?string
    {
        return $this->id_producto;
    }

    public function getTipoProducto(): ?string
    {
        return $this->tipo_producto;
    }

    public function setTipoProducto(string $tipo_producto): self
    {
        $this->tipo_producto = $tipo_producto;

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

    public function getFolio(): ?string
    {
        return $this->folio;
    }

    public function setFolio(string $folio): self
    {
        $this->folio = $folio;

        return $this;
    }

    public function getUnidad(): ?string
    {
        return $this->unidad;
    }

    public function setUnidad(?string $unidad): self
    {
        $this->unidad = $unidad;

        return $this;
    }

    public function getDescripcionInsumo(): ?string
    {
        return $this->descripcion_insumo;
    }

    public function setDescripcionInsumo(?string $descripcion_insumo): self
    {
        $this->descripcion_insumo = $descripcion_insumo;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(?string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(?string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getNumeroSerie(): ?string
    {
        return $this->numero_serie;
    }

    public function setNumeroSerie(?string $numero_serie): self
    {
        $this->numero_serie = $numero_serie;

        return $this;
    }

    public function getNumeroMotorMaquinaria(): ?string
    {
        return $this->numero_motor_maquinaria;
    }

    public function setNumeroMotorMaquinaria(?string $numero_motor_maquinaria): self
    {
        $this->numero_motor_maquinaria = $numero_motor_maquinaria;

        return $this;
    }

    public function getOculto(): ?bool
    {
        return $this->oculto;
    }

    public function setOculto(bool $oculto): self
    {
        $this->oculto = $oculto;

        return $this;
    }

    /**
     * @return Collection|ProductoComprado[]
     */
    public function getProductosComprados(): Collection
    {
        return $this->productos_comprados;
    }

    public function addProductosComprado(ProductoComprado $productosComprado): self
    {
        if (!$this->productos_comprados->contains($productosComprado)) {
            $this->productos_comprados[] = $productosComprado;
            $productosComprado->setProducto($this);
        }

        return $this;
    }

    public function removeProductosComprado(ProductoComprado $productosComprado): self
    {
        if ($this->productos_comprados->removeElement($productosComprado)) {
            // set the owning side to null (unless already changed)
            if ($productosComprado->getProducto() === $this) {
                $productosComprado->setProducto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ProductoMovimiento[]
     */
    public function getProductosEnMovimientos(): Collection
    {
        return $this->productos_en_movimientos;
    }

    public function addProductosEnMovimiento(ProductoMovimiento $productosEnMovimiento): self
    {
        if (!$this->productos_en_movimientos->contains($productosEnMovimiento)) {
            $this->productos_en_movimientos[] = $productosEnMovimiento;
            $productosEnMovimiento->setProducto($this);
        }

        return $this;
    }

    public function removeProductosEnMovimiento(ProductoMovimiento $productosEnMovimiento): self
    {
        if ($this->productos_en_movimientos->removeElement($productosEnMovimiento)) {
            // set the owning side to null (unless already changed)
            if ($productosEnMovimiento->getProducto() === $this) {
                $productosEnMovimiento->setProducto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ProductoExistencia[]
     */
    public function getProductosEnExistencia(): Collection
    {
        return $this->productos_en_existencia;
    }

    public function addProductosEnExistencium(ProductoExistencia $productosEnExistencium): self
    {
        if (!$this->productos_en_existencia->contains($productosEnExistencium)) {
            $this->productos_en_existencia[] = $productosEnExistencium;
            $productosEnExistencium->setProducto($this);
        }

        return $this;
    }

    public function removeProductosEnExistencium(ProductoExistencia $productosEnExistencium): self
    {
        if ($this->productos_en_existencia->removeElement($productosEnExistencium)) {
            // set the owning side to null (unless already changed)
            if ($productosEnExistencium->getProducto() === $this) {
                $productosEnExistencium->setProducto(null);
            }
        }

        return $this;
    }

}

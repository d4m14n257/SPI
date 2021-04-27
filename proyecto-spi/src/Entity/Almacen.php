<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Almacen
 * 
 * @ORM\Table(name="Almacen")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="tipo", type="string", length=255)
 * @ORM\DiscriminatorMap({"obra" = "Obra", "bodega" = "Bodega"})
 * @ORM\Entity
 */
abstract class Almacen
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_almacen", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id_almacen;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Compra", mappedBy="almacen")
     */
    private $compras;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\ProductoExistencia", mappedBy="almacen")
     */
    private $productos_en_existencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\MovimientoAlmacen", mappedBy="almacen")
     */
    private $movimientos_almacen_origen;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\MovimientoAlmacen", mappedBy="almacen")
     */
    private $movimientos_almacen_destino;

    /**
     * @var \App\Entity\Ubicacion
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Ubicacion", inversedBy="almacenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ubicacion_id", referencedColumnName="id_ubicacion")
     * })
     */
    private $ubicacion;

    /**
     * @var \App\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="almacenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id_usuario")
     * })
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productos_en_existencia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->movimientos_almacen_origen = new \Doctrine\Common\Collections\ArrayCollection();
        $this->movimientos_almacen_destino = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdAlmacen(): ?string
    {
        return $this->id_almacen;
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
            $compra->setAlmacen($this);
        }

        return $this;
    }

    public function removeCompra(Compra $compra): self
    {
        if ($this->compras->removeElement($compra)) {
            // set the owning side to null (unless already changed)
            if ($compra->getAlmacen() === $this) {
                $compra->setAlmacen(null);
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
            $productosEnExistencium->setAlmacen($this);
        }

        return $this;
    }

    public function removeProductosEnExistencium(ProductoExistencia $productosEnExistencium): self
    {
        if ($this->productos_en_existencia->removeElement($productosEnExistencium)) {
            // set the owning side to null (unless already changed)
            if ($productosEnExistencium->getAlmacen() === $this) {
                $productosEnExistencium->setAlmacen(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MovimientoAlmacen[]
     */
    public function getMovimientosAlmacenOrigen(): Collection
    {
        return $this->movimientos_almacen_origen;
    }

    public function addMovimientosAlmacenOrigen(MovimientoAlmacen $movimientosAlmacenOrigen): self
    {
        if (!$this->movimientos_almacen_origen->contains($movimientosAlmacenOrigen)) {
            $this->movimientos_almacen_origen[] = $movimientosAlmacenOrigen;
            $movimientosAlmacenOrigen->setAlmacen($this);
        }

        return $this;
    }

    public function removeMovimientosAlmacenOrigen(MovimientoAlmacen $movimientosAlmacenOrigen): self
    {
        if ($this->movimientos_almacen_origen->removeElement($movimientosAlmacenOrigen)) {
            // set the owning side to null (unless already changed)
            if ($movimientosAlmacenOrigen->getAlmacen() === $this) {
                $movimientosAlmacenOrigen->setAlmacen(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MovimientoAlmacen[]
     */
    public function getMovimientosAlmacenDestino(): Collection
    {
        return $this->movimientos_almacen_destino;
    }

    public function addMovimientosAlmacenDestino(MovimientoAlmacen $movimientosAlmacenDestino): self
    {
        if (!$this->movimientos_almacen_destino->contains($movimientosAlmacenDestino)) {
            $this->movimientos_almacen_destino[] = $movimientosAlmacenDestino;
            $movimientosAlmacenDestino->setAlmacen($this);
        }

        return $this;
    }

    public function removeMovimientosAlmacenDestino(MovimientoAlmacen $movimientosAlmacenDestino): self
    {
        if ($this->movimientos_almacen_destino->removeElement($movimientosAlmacenDestino)) {
            // set the owning side to null (unless already changed)
            if ($movimientosAlmacenDestino->getAlmacen() === $this) {
                $movimientosAlmacenDestino->setAlmacen(null);
            }
        }

        return $this;
    }

    public function getUbicacion(): ?Ubicacion
    {
        return $this->ubicacion;
    }

    public function setUbicacion(?Ubicacion $ubicacion): self
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

}

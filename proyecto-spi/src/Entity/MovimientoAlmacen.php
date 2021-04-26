<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientoAlmacen
 *
 * @ORM\Table(name="MovimientoAlmacen")
 * @ORM\Entity
 */
class MovimientoAlmacen
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_movimiento", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id_movimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\ProductoMovimiento", mappedBy="movimiento_almacen")
     */
    private $productos_en_movimiento;

    /**
     * @var \App\Entity\Almacen
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen", inversedBy="movimientos_almacen_origen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacen_destino_id", referencedColumnName="id_almacen")
     * })
     */
    private $almacen_destino;

    /**
     * @var \App\Entity\Almacen
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen", inversedBy="movimientos_almacen_destino")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacen_origen_id", referencedColumnName="id_almacen")
     * })
     */
    private $almacen_origen;

    /**
     * @var \App\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="movimientos_almacenes")
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
        $this->productos_en_movimiento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdMovimiento(): ?string
    {
        return $this->id_movimiento;
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

    /**
     * @return Collection|ProductoMovimiento[]
     */
    public function getProductosEnMovimiento(): Collection
    {
        return $this->productos_en_movimiento;
    }

    public function addProductosEnMovimiento(ProductoMovimiento $productosEnMovimiento): self
    {
        if (!$this->productos_en_movimiento->contains($productosEnMovimiento)) {
            $this->productos_en_movimiento[] = $productosEnMovimiento;
            $productosEnMovimiento->setMovimientoAlmacen($this);
        }

        return $this;
    }

    public function removeProductosEnMovimiento(ProductoMovimiento $productosEnMovimiento): self
    {
        if ($this->productos_en_movimiento->removeElement($productosEnMovimiento)) {
            // set the owning side to null (unless already changed)
            if ($productosEnMovimiento->getMovimientoAlmacen() === $this) {
                $productosEnMovimiento->setMovimientoAlmacen(null);
            }
        }

        return $this;
    }

    public function getAlmacenDestino(): ?Almacen
    {
        return $this->almacen_destino;
    }

    public function setAlmacenDestino(?Almacen $almacen_destino): self
    {
        $this->almacen_destino = $almacen_destino;

        return $this;
    }

    public function getAlmacenOrigen(): ?Almacen
    {
        return $this->almacen_origen;
    }

    public function setAlmacenOrigen(?Almacen $almacen_origen): self
    {
        $this->almacen_origen = $almacen_origen;

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

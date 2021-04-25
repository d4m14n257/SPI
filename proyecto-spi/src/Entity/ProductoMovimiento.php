<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoMovimiento
 *
 * @ORM\Table(name="ProductoMovimiento")
 * @ORM\Entity
 */
class ProductoMovimiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;
    
    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var \App\Entity\MovimientoAlmacen
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\MovimientoAlmacen", inversedBy="productos_en_movimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movimiento_almacen_id", referencedColumnName="id_movimiento")
     * })
     */
    private $movimiento_almacen;

    /**
     * @var \App\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Producto", inversedBy="productos_en_movimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto_id", referencedColumnName="id_producto")
     * })
     */
    private $producto;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getMovimientoAlmacen(): ?MovimientoAlmacen
    {
        return $this->movimiento_almacen;
    }

    public function setMovimientoAlmacen(?MovimientoAlmacen $movimiento_almacen): self
    {
        $this->movimiento_almacen = $movimiento_almacen;

        return $this;
    }

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): self
    {
        $this->producto = $producto;

        return $this;
    }


}

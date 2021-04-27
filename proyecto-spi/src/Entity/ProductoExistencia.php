<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoExistencia
 *
 * @ORM\Table(name="ProductoExistencia")
 * @ORM\Entity
 */
class ProductoExistencia
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
     * @var \App\Entity\Almacen
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen", inversedBy="productos_en_existencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacen_id", referencedColumnName="id_almacen")
     * })
     */
    private $almacen;

    /**
     * @var \App\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Producto", inversedBy="productos_en_existencia")
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

    public function getAlmacen(): ?Almacen
    {
        return $this->almacen;
    }

    public function setAlmacen(?Almacen $almacen): self
    {
        $this->almacen = $almacen;

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

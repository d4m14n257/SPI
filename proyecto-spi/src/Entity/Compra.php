<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Compra
 *
 * @ORM\Table(name="Compra")
 * @ORM\Entity
 */
class Compra
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_compra", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id_compra;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pago", type="string", length=63)
     */
    private $tipo_pago;

    /**
     * @var string
     *
     * @ORM\Column(name="num_factura", type="string", length=31)
     */
    private $num_factura;

    /**
     * @var string
     *
     * @ORM\Column(name="num_requisicion", type="string", length=31)
     */
    private $num_requisicion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_compra", type="string", length=63)
     */
    private $tipo_compra;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_ce", type="blob")
     */
    private $imagen_CE;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\ProductoComprado", mappedBy="compra")
     */
    private $productos_comprados;

    /**
     * @var \App\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="compras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id_usuario")
     * })
     */
    private $usuario;

    /**
     * @var \App\Entity\Almacen
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Almacen", inversedBy="compras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacen_id", referencedColumnName="id_almacen")
     * })
     */
    private $almacen;
    
    /**
     * @var \App\Entity\Proveedor
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Proveedor", inversedBy="compras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proveedor_id", referencedColumnName="id_proveedor")
     * })
     */
    private $proveedor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productos_comprados = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdCompra(): ?string
    {
        return $this->id_compra;
    }

    public function getTipoPago(): ?string
    {
        return $this->tipo_pago;
    }

    public function setTipoPago(string $tipo_pago): self
    {
        $this->tipo_pago = $tipo_pago;

        return $this;
    }

    public function getNumFactura(): ?string
    {
        return $this->num_factura;
    }

    public function setNumFactura(string $num_factura): self
    {
        $this->num_factura = $num_factura;

        return $this;
    }

    public function getNumRequisicion(): ?string
    {
        return $this->num_requisicion;
    }

    public function setNumRequisicion(string $num_requisicion): self
    {
        $this->num_requisicion = $num_requisicion;

        return $this;
    }

    public function getTipoCompra(): ?string
    {
        return $this->tipo_compra;
    }

    public function setTipoCompra(string $tipo_compra): self
    {
        $this->tipo_compra = $tipo_compra;

        return $this;
    }

    public function getImagenCE()
    {
        return $this->imagen_CE;
    }

    public function setImagenCE($imagen_CE): self
    {
        $this->imagen_CE = $imagen_CE;

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
            $productosComprado->setCompra($this);
        }

        return $this;
    }

    public function removeProductosComprado(ProductoComprado $productosComprado): self
    {
        if ($this->productos_comprados->removeElement($productosComprado)) {
            // set the owning side to null (unless already changed)
            if ($productosComprado->getCompra() === $this) {
                $productosComprado->setCompra(null);
            }
        }

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

    public function getAlmacen(): ?Almacen
    {
        return $this->almacen;
    }

    public function setAlmacen(?Almacen $almacen): self
    {
        $this->almacen = $almacen;

        return $this;
    }

    public function getProveedor(): ?proveedor
    {
        return $this->proveedor;
    }

    public function setProveedor(?proveedor $proveedor): self
    {
        $this->proveedor = $proveedor;

        return $this;
    }

}

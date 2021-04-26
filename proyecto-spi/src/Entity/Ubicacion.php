<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicacion
 *
 * @ORM\Table(name="Ubicacion")
 * @ORM\Entity
 */
class Ubicacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_ubicacion", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id_ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=255)
     */
    private $calle;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="colonia", type="string", length=127)
     */
    private $colonia;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=127)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=127)
     */
    private $localidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Almacen", mappedBy="ubicacion")
     */
    private $almacenes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->almacenes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdUbicacion(): ?string
    {
        return $this->id_ubicacion;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getColonia(): ?string
    {
        return $this->colonia;
    }

    public function setColonia(string $colonia): self
    {
        $this->colonia = $colonia;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getMunicipio(): ?string
    {
        return $this->municipio;
    }

    public function setMunicipio(string $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad): self
    {
        $this->localidad = $localidad;

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
            $almacene->setUbicacion($this);
        }

        return $this;
    }

    public function removeAlmacene(Almacen $almacene): self
    {
        if ($this->almacenes->removeElement($almacene)) {
            // set the owning side to null (unless already changed)
            if ($almacene->getUbicacion() === $this) {
                $almacene->setUbicacion(null);
            }
        }

        return $this;
    }

}

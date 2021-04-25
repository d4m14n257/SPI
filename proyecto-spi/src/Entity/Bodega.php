<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bodega
 *
 * @ORM\Table(name="Bodega")
 * @ORM\Entity
 */
class Bodega extends Almacen
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono;

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }


}

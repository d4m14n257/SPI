<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obra
 *
 * @ORM\Table(name="Obra")
 * @ORM\Entity
 */
class Obra extends Almacen
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrega", type="date")
     */
    private $fecha_entrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date")
     */
    private $fecha_inicio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dependencia_contratos", type="text", nullable=true)
     */
    private $dependencia_contratos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dependencia_ejecutora", type="text", nullable=true)
     */
    private $dependencia_ejecutora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contrato_proyecto", type="text", nullable=true)
     */
    private $contrato_proyecto;

    public function getFechaEntrega(): ?\DateTimeInterface
    {
        return $this->fecha_entrega;
    }

    public function setFechaEntrega(\DateTimeInterface $fecha_entrega): self
    {
        $this->fecha_entrega = $fecha_entrega;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(\DateTimeInterface $fecha_inicio): self
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getDependenciaContratos(): ?string
    {
        return $this->dependencia_contratos;
    }

    public function setDependenciaContratos(?string $dependencia_contratos): self
    {
        $this->dependencia_contratos = $dependencia_contratos;

        return $this;
    }

    public function getDependenciaEjecutora(): ?string
    {
        return $this->dependencia_ejecutora;
    }

    public function setDependenciaEjecutora(?string $dependencia_ejecutora): self
    {
        $this->dependencia_ejecutora = $dependencia_ejecutora;

        return $this;
    }

    public function getContratoProyecto(): ?string
    {
        return $this->contrato_proyecto;
    }

    public function setContratoProyecto(?string $contrato_proyecto): self
    {
        $this->contrato_proyecto = $contrato_proyecto;

        return $this;
    }


}

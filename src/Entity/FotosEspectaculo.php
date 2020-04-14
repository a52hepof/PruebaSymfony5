<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FotosEspectaculoRepository")
 */
class FotosEspectaculo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rutaFotoEspectaculo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Espectaculo", inversedBy="foto")
     * @ORM\JoinColumn(nullable=false)
     */
    private $espectaculo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRutaFotoEspectaculo(): ?string
    {
        return $this->rutaFotoEspectaculo;
    }

    public function setRutaFotoEspectaculo(string $rutaFotoEspectaculo): self
    {
        $this->rutaFotoEspectaculo = $rutaFotoEspectaculo;

        return $this;
    }

    public function getEspectaculo(): ?Espectaculo
    {
        return $this->espectaculo;
    }

    public function setEspectaculo(?Espectaculo $espectaculo): self
    {
        $this->espectaculo = $espectaculo;

        return $this;
    }
}

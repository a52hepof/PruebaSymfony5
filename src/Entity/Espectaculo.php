<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EspectaculoRepository")
 */
class Espectaculo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $nombreEspectaculo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcionEspectaculo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rutaCartelEspectaculo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $webOficialEspectaculo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FotosEspectaculo", mappedBy="espectaculo")
     */
    private $foto;

    public function __construct()
    {
        $this->foto = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEspectaculo(): ?\DateTimeInterface
    {
        return $this->nombreEspectaculo;
    }

    public function setNombreEspectaculo(?\DateTimeInterface $nombreEspectaculo): self
    {
        $this->nombreEspectaculo = $nombreEspectaculo;

        return $this;
    }

    public function getDescripcionEspectaculo(): ?string
    {
        return $this->descripcionEspectaculo;
    }

    public function setDescripcionEspectaculo(?string $descripcionEspectaculo): self
    {
        $this->descripcionEspectaculo = $descripcionEspectaculo;

        return $this;
    }

    public function getRutaCartelEspectaculo(): ?string
    {
        return $this->rutaCartelEspectaculo;
    }

    public function setRutaCartelEspectaculo(?string $rutaCartelEspectaculo): self
    {
        $this->rutaCartelEspectaculo = $rutaCartelEspectaculo;

        return $this;
    }

    public function getWebOficialEspectaculo(): ?string
    {
        return $this->webOficialEspectaculo;
    }

    public function setWebOficialEspectaculo(?string $webOficialEspectaculo): self
    {
        $this->webOficialEspectaculo = $webOficialEspectaculo;

        return $this;
    }

    /**
     * @return Collection|FotosEspectaculo[]
     */
    public function getFoto(): Collection
    {
        return $this->foto;
    }

    public function addFoto(FotosEspectaculo $foto): self
    {
        if (!$this->foto->contains($foto)) {
            $this->foto[] = $foto;
            $foto->setEspectaculo($this);
        }

        return $this;
    }

    public function removeFoto(FotosEspectaculo $foto): self
    {
        if ($this->foto->contains($foto)) {
            $this->foto->removeElement($foto);
            // set the owning side to null (unless already changed)
            if ($foto->getEspectaculo() === $this) {
                $foto->setEspectaculo(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\AreasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AreasRepository::class)
 */
class Areas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity=Propiedades::class, mappedBy="area", orphanRemoval=true)
     */
    private $propiedades;

    /**
     * @ORM\OneToMany(targetEntity=ParteDiario::class, mappedBy="Area", orphanRemoval=true)
     */
    private $parteDiarios;

    public function __construct()
    {
        $this->propiedades = new ArrayCollection();
        $this->parteDiarios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|Propiedades[]
     */
    public function getPropiedades(): Collection
    {
        return $this->propiedades;
    }

    public function addPropiedade(Propiedades $propiedade): self
    {
        if (!$this->propiedades->contains($propiedade)) {
            $this->propiedades[] = $propiedade;
            $propiedade->setArea($this);
        }

        return $this;
    }

    public function removePropiedade(Propiedades $propiedade): self
    {
        if ($this->propiedades->removeElement($propiedade)) {
            // set the owning side to null (unless already changed)
            if ($propiedade->getArea() === $this) {
                $propiedade->setArea(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ParteDiario[]
     */
    public function getParteDiarios(): Collection
    {
        return $this->parteDiarios;
    }

    public function addParteDiario(ParteDiario $parteDiario): self
    {
        if (!$this->parteDiarios->contains($parteDiario)) {
            $this->parteDiarios[] = $parteDiario;
            $parteDiario->setArea($this);
        }

        return $this;
    }

    public function removeParteDiario(ParteDiario $parteDiario): self
    {
        if ($this->parteDiarios->removeElement($parteDiario)) {
            // set the owning side to null (unless already changed)
            if ($parteDiario->getArea() === $this) {
                $parteDiario->setArea(null);
            }
        }

        return $this;
    }
}

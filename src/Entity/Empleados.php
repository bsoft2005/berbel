<?php

namespace App\Entity;

use App\Repository\EmpleadosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpleadosRepository::class)
 */
class Empleados
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $state;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity=ParteDiario::class, mappedBy="empleado", orphanRemoval=true)
     */
    private $parteDiarios;

    public function __construct()
    {
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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

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
            $parteDiario->setEmpleado($this);
        }

        return $this;
    }

    public function removeParteDiario(ParteDiario $parteDiario): self
    {
        if ($this->parteDiarios->removeElement($parteDiario)) {
            // set the owning side to null (unless already changed)
            if ($parteDiario->getEmpleado() === $this) {
                $parteDiario->setEmpleado(null);
            }
        }

        return $this;
    }
    
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomersRepository")
 */
class Customers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $mailCustomer;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $passwordCustomer;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nameCustomer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surnameCustomer;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $consentCustomer;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $rolCustomer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailCustomer(): ?string
    {
        return $this->mailCustomer;
    }

    public function setMailCustomer(string $mailCustomer): self
    {
        $this->mailCustomer = $mailCustomer;

        return $this;
    }

    public function getPasswordCustomer(): ?string
    {
        return $this->passwordCustomer;
    }

    public function setPasswordCustomer(string $passwordCustomer): self
    {
        $this->passwordCustomer = $passwordCustomer;

        return $this;
    }

    public function getNameCustomer(): ?string
    {
        return $this->nameCustomer;
    }

    public function setNameCustomer(string $nameCustomer): self
    {
        $this->nameCustomer = $nameCustomer;

        return $this;
    }

    public function getSurnameCustomer(): ?string
    {
        return $this->surnameCustomer;
    }

    public function setSurnameCustomer(string $surnameCustomer): self
    {
        $this->surnameCustomer = $surnameCustomer;

        return $this;
    }

    public function getConsentCustomer(): ?bool
    {
        return $this->consentCustomer;
    }

    public function setConsentCustomer(?bool $consentCustomer): self
    {
        $this->consentCustomer = $consentCustomer;

        return $this;
    }

    public function getRolCustomer(): ?string
    {
        return $this->rolCustomer;
    }

    public function setRolCustomer(string $rolCustomer): self
    {
        $this->rolCustomer = $rolCustomer;

        return $this;
    }
}

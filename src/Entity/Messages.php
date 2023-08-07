<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=15, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=500, nullable=true)
     */
    private $message;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_occasion", type="integer", nullable=true)
     */
    private $idOccasion;

    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getIdOccasion(): ?int
    {
        return $this->idOccasion;
    }

    public function setIdOccasion(?int $idOccasion): static
    {
        $this->idOccasion = $idOccasion;

        return $this;
    }


}

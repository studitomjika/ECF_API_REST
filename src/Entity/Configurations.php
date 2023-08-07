<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Configurations
 *
 * @ORM\Table(name="configurations")
 * @ORM\Entity
 */
class Configurations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_configuration", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfiguration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="text", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    public function getIdConfiguration(): ?int
    {
        return $this->idConfiguration;
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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): static
    {
        $this->value = $value;

        return $this;
    }


}

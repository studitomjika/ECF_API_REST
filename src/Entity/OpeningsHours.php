<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpeningsHours
 *
 * @ORM\Table(name="openings_hours")
 * @ORM\Entity
 */
class OpeningsHours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_opening_hours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOpeningHours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="day", type="string", length=8, nullable=true)
     */
    private $day;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hours", type="string", length=50, nullable=true)
     */
    private $hours;

    public function getIdOpeningHours(): ?int
    {
        return $this->idOpeningHours;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(?string $day): static
    {
        $this->day = $day;

        return $this;
    }

    public function getHours(): ?string
    {
        return $this->hours;
    }

    public function setHours(?string $hours): static
    {
        $this->hours = $hours;

        return $this;
    }


}

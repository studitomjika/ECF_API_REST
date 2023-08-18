<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * UsedCars
 *
 * @ORM\Table(name="used_cars")
 * @ORM\Entity
 * @ApiResource()
 */
#[ORM\Entity]
#[ORM\Table(name: "used_cars")]
class UsedCars
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_occasion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    #[ORM\Column(name: "id_occasion", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $idOccasion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=250, nullable=true)
     */
    #[ORM\Column(name: "model", type: "string", length: 250, nullable: true)]
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="decimal", precision=6, scale=2, nullable=true)
     */
    #[ORM\Column(name: "price", type: "decimal", precision: 6, scale: 2, nullable: true)]
    private $price;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kilometres", type="integer", nullable=true)
     */
    #[ORM\Column(name: "kilometres", type: "integer", nullable: true)]
    private $kilometres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    #[ORM\Column(name: "year", type: "integer", nullable: true)]
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture_link", type="string", length=250, nullable=true)
     */
    #[ORM\Column(name: "picture_link", type: "string", length: 250, nullable: true)]
    private $pictureLink;

    public function getIdOccasion(): ?int
    {
        return $this->idOccasion;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getKilometres(): ?int
    {
        return $this->kilometres;
    }

    public function setKilometres(?int $kilometres): static
    {
        $this->kilometres = $kilometres;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getPictureLink(): ?string
    {
        return $this->pictureLink;
    }

    public function setPictureLink(?string $pictureLink): static
    {
        $this->pictureLink = $pictureLink;

        return $this;
    }


}

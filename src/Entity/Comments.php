<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity
 * @ApiResource()
 */
#[ORM\Entity]
#[ORM\Table(name: "comments")]
class Comments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    #[ORM\Column(name: "id_commentaire", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $idCommentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    #[ORM\Column(name: "name", type: "string", length: 50, nullable: true)]
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="grade", type="integer", nullable=true)
     */
    #[ORM\Column(name: "grade", type: "integer", nullable: true)]
    private $grade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=300, nullable=true)
     */
    #[ORM\Column(name: "message", type: "text", length: 300, nullable: true)]
    private $message;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=true, options={"default"="False"})
     */
    #[ORM\Column(name: "accepted", type: "boolean", nullable: true, options: array("default" => false))]
    private $accepted = 'False';

    public function getIdCommentaire(): ?int
    {
        return $this->idCommentaire;
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

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(?int $grade): static
    {
        $this->grade = $grade;

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

    public function isAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(?bool $accepted): static
    {
        $this->accepted = $accepted;

        return $this;
    }


}

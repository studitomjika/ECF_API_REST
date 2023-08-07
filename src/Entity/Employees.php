<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="employees")
 * @ORM\Entity
 */
class Employees
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=250, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=60, nullable=true, options={"fixed"=true})
     */
    private $password;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="role_admin", type="boolean", nullable=true)
     */
    private $roleAdmin;

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): static
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function isRoleAdmin(): ?bool
    {
        return $this->roleAdmin;
    }

    public function setRoleAdmin(?bool $roleAdmin): static
    {
        $this->roleAdmin = $roleAdmin;

        return $this;
    }


}

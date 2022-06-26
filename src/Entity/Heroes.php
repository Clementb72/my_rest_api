<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\HeroesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HeroesRepository::class)]
#[ApiResource]
class Heroes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'boolean')]
    private $isHuman;

    #[ORM\Column(type: 'boolean')]
    private $isAvengers;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $createdAt;

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

    public function isIsHuman(): ?bool
    {
        return $this->isHuman;
    }

    public function setIsHuman(bool $isHuman): self
    {
        $this->isHuman = $isHuman;

        return $this;
    }

    public function isIsAvengers(): ?bool
    {
        return $this->isAvengers;
    }

    public function setIsAvengers(bool $isAvengers): self
    {
        $this->isAvengers = $isAvengers;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

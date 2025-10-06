<?php

namespace App\Entity;

use App\Repository\DepotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepotRepository::class)]
class Depot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 2)]
    private ?string $poidsEstime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'depots')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PointCollecte $pointCollecte = null;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getPoidsEstime(): ?string
    {
        return $this->poidsEstime;
    }

    public function setPoidsEstime(string $poidsEstime): static
    {
        $this->poidsEstime = $poidsEstime;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getPointCollecte(): ?PointCollecte
    {
        return $this->pointCollecte;
    }

    public function setPointCollecte(?PointCollecte $pointCollecte): static
    {
        $this->pointCollecte = $pointCollecte;

        return $this;
    }
}
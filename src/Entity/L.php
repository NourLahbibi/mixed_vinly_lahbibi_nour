<?php

namespace App\Entity;

use App\Repository\LRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LRepository::class)]
class L
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}

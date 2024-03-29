<?php

namespace App\Entity;

use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhoneRepository::class)]
class Phone
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'phones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contact $id_contact = null;

    #[ORM\Id]
    #[ORM\Column(length: 20)]
    private ?string $number = null;

    #[ORM\Column(length: 10, options: ["default"=>"Mobile"])]
    private ?string $type = null;

      public function getIdContact(): ?Contact
    {
        return $this->id_contact;
    }

    public function setIdContact(?Contact $id_contact): static
    {
        $this->id_contact = $id_contact;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): static
    {
        $this->number = $number;

        return $this;
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
    public function toArray(): array
    {
        return array(
            'number' => $this->number,
            'type' => $this->type
        );
}
}

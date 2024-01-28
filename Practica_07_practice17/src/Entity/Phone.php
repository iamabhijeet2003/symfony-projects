<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;


use Symfony\Component\Serializer\Annotation\Groups;

use Symfony\Component\Validator\Constraints as Assert;

use ApiPlatform\Metadata\Link;

#[ORM\Entity(repositoryClass: PhoneRepository::class)]
#[ApiResource (
    operations: [
        new Get(),
        new GetCollection(),
        new Post(),
        new Put(),
        new Delete(),
        ],  
        normalizationContext: ['groups'=>['phone']]
        
)
]

#[ApiResource(
    uriTemplate: '/contacts/{id}/phones',
    operations: [ new GetCollection()],
    uriVariables: [
        'id' => new Link(fromClass: Contact::class, toProperty: 'contact'),
    ],
    normalizationContext: ['groups'=>['phone']]
)]


class Phone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read','phone'])]
    
    private ?int $id = null;

    #[ORM\Column(length: 9)]
    #[Groups(['read','write','phone'])]
   
    private ?string $number = null;

    #[ORM\Column(length: 50)]
    #[Groups(['read','write','phone'])]
    
    private ?string $type = null;

    
    #[ORM\ManyToOne(inversedBy: 'phones')]
    #[Groups(['write','phone'])]

    private ?Contact $contact = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): static
    {
        $this->contact = $contact;

        return $this;
    }
}

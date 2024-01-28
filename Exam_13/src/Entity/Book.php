<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Link;

use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post(),
        new Put(),
        new Delete(),
        ], 
        normalizationContext: ['groups'=>['books']]
)
]
#[ApiResource(
    uriTemplate: '/authors/{id}/books',
    operations: [ new GetCollection()],
    uriVariables: [
        'id' => new Link(fromClass: Author::class, toProperty: 'author'),
    ],
)]


class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['books'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['books'])]
    private ?string $title = null;

    #[ORM\Column]
    #[Groups(['books'])]
    #[Assert\PositiveOrZero]
    #[Assert\LessThanOrEqual(2024)]
    private ?int $year = null;

    #[ORM\Column(length: 255)]
    #[Groups(['books'])]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['books'])]
    #[Assert\PositiveOrZero]
    private ?int $chapters = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
   
    private ?Author $author = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getChapters(): ?int
    {
        return $this->chapters;
    }

    public function setChapters(int $chapters): static
    {
        $this->chapters = $chapters;

        return $this;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): static
    {
        $this->author = $author;

        return $this;
    }
}

<?php

namespace Source\Core\Database\ORMs;

use \DateTime;

class Card
{
    private ?int $id;
    private ?string $name;
    private ?string $description;
    private string $hash;

    public function __construct(?string $name = null, ?string $description = null)
    {
        $this->setId(null);
        $this->setName($name);
        $this->setDescription($description);
        $this->setHash();
    }

    public function __toString(): string
    {
        return json_encode([
            "id" => $this->getId(),
            "name" => $this->getName(),
            "description" => $this->getDescription(),
            "hash" => $this->getHash()
        ]);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    private function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getHash(): ?string
    {
        return isset($this->hash) ? $this->hash : null;
    }

    private function setHash(): void
    {
        if (empty($this->getHash())) {
            $this->hash = md5(strtotime("now"));
        }
    }
}

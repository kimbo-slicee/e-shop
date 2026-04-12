<?php

namespace models;
class ProductModel
{
    private int $id;
    private string $name;
    private string $description;
    private float $price;
    private int $stock;
    private string $createdAt;
    private string $image;

    public function __construct(
        int    $id,
        string $name,
        string $description,
        float  $price,
        int    $stock,
        string $createdAt
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->createdAt = $createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['name'],
            $data['description'],
            $data['price'],
            $data['stock'],
            $data['created_at']
        );
    }
}
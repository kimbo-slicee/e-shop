<?php


class ProductDTO
{
    public string $name;
    public float $price;

    public static function fromModel(array $product): self
    {
        $dto = new self();
        $dto->name = $product['name'];
        $dto->price = $product['price'];
        return $dto;
    }
}
<?php

namespace services;

use DTO\ProductDTO;
use repository\ProductRepository;

class ProductServices
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function getAllProducts($limit = 10, $offset = 0): array
    {
        $products = $this->productRepository->findAll();
        // convert to DTO
        return array_map(fn($p) => ProductDTO::fromModel($p), $products);

    }
}
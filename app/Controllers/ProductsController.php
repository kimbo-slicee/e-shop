<?php

//include_once  './views/products.view.php'

namespace controllers;

use services\ProductServices;

class ProductsController
{
    private ProductServices $productServices;

    public function __construct()
    {
        $this->productServices = new ProductServices();
    }

    public function index()
    {
        $products = $this->productServices->getAllProducts();
        include_once './views/products.view.php';
    }

    public function show($id)
    {
        $product = $this->repo->findById($id);

        require '../views/products/show.php';
    }

}


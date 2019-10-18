<?php
declare(strict_types=1);
class ProductLoader
{

    private $products = [];
    public function __construct()
    {
        $json = json_decode(file_get_contents('products.json'), true);
        foreach ($json AS $productJson) {
            $this->products[$productJson['id']] = new Product($productJson['id'], $productJson['name'], $productJson['description'], $productJson['price']);
        }
    }
    public function loadById(int $productId) : Product {
        return $this->products[$productId];
    }
    public function loadProducts() : array
    {
        return $this->products;
    }
}


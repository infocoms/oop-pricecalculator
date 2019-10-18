<?php
declare(strict_types=1);
class ProductController
{
    public function render(int $productId)
    {
        $loader = new ProductLoader();
        $product = $loader->loadById($productId);
        $allProducts = $loader->loadProducts();
        require 'View/product.php';
    }
}
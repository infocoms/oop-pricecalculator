<?php
declare(strict_types=1);
class CustomerController
{
    public function render(int $customerId, $productId,int $groupId)
    {
        $loader = new CustomerLoader();
        $customer = $loader->loadById($customerId);
        $allCustomers = $loader->loadCustomers();

        $loader2 = new ProductLoader();
        $product = $loader2->loadByIdP($productId);
        $allProducts = $loader2->loadProducts();

       /* $loader3 = new GroupLoader();
        $group = $loader3->loadById($groupId);
        $allGroups = $loader3->loadGroups();*/

        require 'View/customer.php';
    }
}






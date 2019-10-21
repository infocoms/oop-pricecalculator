<?php
declare(strict_types=1);
class CustomerLoader
{
    private $customers = [];
    public function __construct()
    {
        $json = json_decode(file_get_contents('customers.json'), true);
        foreach ($json AS $customerJson) {
            $this->customers[$customerJson['id']] = new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
        }
    }
    public function loadById(int $customerId) : Customer {
        return $this->customers[$customerId];
    }
    public function loadCustomers() : array
    {
        return $this->customers;
    }
}
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
    public function loadByIdP( $productId) : Product {
        return $this->products[$productId];
    }
    public function loadProducts() : array
    {
        return $this->products;
    }
}
class GroupLoader
{
    private $groups = [];
    public function __construct()
    {
        $json = json_decode(file_get_contents('groups.json'), true);
        foreach ($json AS $groupJson) {
            if (isset($groupJson['variable_discount'],$groupJson['group_id'])&& !empty($groupJson['variable_discount']) && !empty($groupJson['group_id'])){
                $this->groups[$groupJson['id']] = new Group($groupJson['id'] , $groupJson['name'], $groupJson['variable_discount'],$groupJson['group_id']);
            }

        }
    }
    public function loadById(int $groupId)  {
         $this->groups[]=$groupId;
    }


    public function loadGroups() : array
    {
        return $this->groups;
    }
}

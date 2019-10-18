<?php
declare(strict_types=1);

class Product
{
    private $id;
    private $name;
    private $desc;
    private $price;
    function __construct(int $_id, string $_name, string $_desc, float $_price)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->desc = $_desc;
        $this->price = $_price;
    }

    public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getDesc() : string
    {
        return $this->desc;
    }
    public function getPrice() : float
    {
        return $this->price;
    }
}
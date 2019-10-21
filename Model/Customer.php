<?php
declare(strict_types=1);
class Customer
{
    private $id;
    private $name;
    private $group;
    function __construct(int $_id, string $_name, int $_group)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->group = $_group;
    }
    public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getGroup() : int
    {
        return $this->group;
    }
}

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

    public function getIdP() : int
    {
        return $this->id;
    }
    public function getNameP() : string
    {
        return $this->name;
    }
    public function getDescP() : string
    {
        return $this->desc;
    }
    public function getPrice() : float
    {
        return $this->price;
    }
}

class Group
{
    private $id;
    private $name;
    private $disc;
    private $groupId;
    function __construct(?int $_id, ?string $_name, ?int $_discount, ?int $_groupId)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->disc = $_discount;
        $this->groupId = $_groupId;
    }

    public function getIdG() : ?int
    {
        return $this->id;
    }
    public function getNameG() : ?string
    {
        return $this->name;
    }
    public function getDiscount() : ?int
    {
        return $this->disc;
    }
    public function getGroupId() : ?int
    {
        return $this->groupId;
    }
}
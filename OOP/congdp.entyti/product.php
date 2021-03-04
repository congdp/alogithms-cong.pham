<?php
class Product
{
    protected $id;
    protected $name;
    protected $categoryId;

    public function __construct($id, $name, $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}

// $p = new Product();
// $p->set_id(1);
// $p->set_name('Dell');
// $p->set_category('Laptop');

// echo $p->get_name();
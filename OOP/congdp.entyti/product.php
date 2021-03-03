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

    public function set_id($id)
    {
        $this->id = $id;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function set_categoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function get_categoryId()
    {
        return $this->categoryId;
    }
}

// $p = new Product();
// $p->set_id(1);
// $p->set_name('Dell');
// $p->set_category('Laptop');

// echo $p->get_name();
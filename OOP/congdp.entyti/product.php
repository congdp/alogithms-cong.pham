<?php
include_once 'baseRow.php';

class Product extends BaseRow
{
    protected $categoryId;

    public function __construct($id, $name, $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
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
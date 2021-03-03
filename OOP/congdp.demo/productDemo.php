<?php
require '../congdp.entyti/product.php';

class ProductDemo
{
    protected $productDemo;
    public function createProductTest($id, $name, $categoryId)
    {
        $this->productDemo = new Product($id, $name, $categoryId);
        // return $this->productDemo;
    }
    public function printProduct()
    {
        return "Id:" . $this->productDemo->get_id() . '<br>' . 'Name:' . $this->productDemo->get_name() . '<br>' . 'CategoryId:' . $this->productDemo->get_categoryId() . "";
    }
}

// $productDemo = new ProductDemo();
// $productDemo->createProductTest(1, 'cong', 10);
// echo $productDemo->printProduct();
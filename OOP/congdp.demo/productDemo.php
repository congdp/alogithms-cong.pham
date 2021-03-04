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
        return "Id:" . $this->productDemo->getId() . '<br>' . 'Name:' . $this->productDemo->getName() . '<br>' . 'CategoryId:' . $this->productDemo->getCategoryId() . "";
    }
}

// $productDemo = new ProductDemo();
// $productDemo->createProductTest(1, 'cong', 10);
// echo $productDemo->printProduct();
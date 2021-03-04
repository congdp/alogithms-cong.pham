<?php
require '../congdp.dao/productDao.php';
class ProductDaoDemo extends ProductDAO
{

    protected $productDaoDemo;

    public function insertTest($row)
    {
        return $this->insert($row);
    }

    public function updateTest($row)
    {
        return $this->update($row);
    }

    public function deleteTest($row)
    {
        return $this->delete($row);
    }

    public function findAllTest($row)
    {
        return $this->findAll($row);
    }

    public function findByIdTest($id)
    {
        return $this->findById($id);
    }
    public function findByNameTest($name)
    {
        return $this->findByName($name);
    }
}

$productDaoDemo = new ProductDaoDemo(new Database);
$row = new Product(1, 'cong', 1);

echo "<pre>";
print_r($productDaoDemo->insertTest($row));
print_r($productDaoDemo->findAllTest($row));
print_r($productDaoDemo->findByIdTest(1));
<?php
require '../congdp.dao/categoryDao.php';
class CategoryDaoDemo extends CategoryDAO
{
    protected $categoryDaoDemo;

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
}

$categoryDaoDemo = new CategoryDaoDemo(new Database);
$row = new Category(1, 'cong');

echo "<pre>";
print_r($categoryDaoDemo->insertTest($row));
// print_r($categoryDaoDemo->findAllTest($row));
// print_r($categoryDaoDemo->findByIdTest(1));
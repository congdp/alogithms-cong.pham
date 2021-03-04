<?php
require '../congdp.dao/accessoryDao.php';
class AccessoryDaoDemo extends AccessoryDAO
{
    protected $accessoryDaoDemo;

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

    public function searchTest($name)
    {
        return $this->search($name);
    }
}

$accessoryDaoDemo = new AccessoryDaoDemo(new Database);
$row = new Accessory(1, 'cong', 1);

echo "<pre>";
print_r($accessoryDaoDemo->insertTest($row));
print_r($accessoryDaoDemo->searchTest('cong'));
// print_r($accessoryDaoDemo->findByIdTest(1));
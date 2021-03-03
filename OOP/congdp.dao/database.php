<?php
// require '../congdp.entyti/product.php';
require '../congdp.demo/productDemo.php';

class Database
{
    protected $productTable;
    protected $categoryTable;
    protected $accessoryTable;

    public function getProductTable()
    {
        return $this->productTable;
    }
    public function getCategoryTable()
    {
        return $this->categoryTable;
    }
    public function getAccessoryTable()
    {
        return $this->accessoryTable;
    }
    public function setProductTable($productTable)
    {
        $this->productTable = $productTable;
    }
    public function setCategoryTable($categoryTable)
    {
        $this->categoryTable = $categoryTable;
    }
    public function setAccessoryTable($accessoryTable)
    {
        $this->accessoryTable = $accessoryTable;
    }

    public function insertTable($tableName, $row)
    {
        return $this->$tableName[] = $row;
    }

    public function selectTable($tableName, $elementName)
    {
        $table = array();
        foreach ($this->$tableName as $item) {
            if ($item->get_name() == $elementName) {
                $table[] = $item;
            }
        }
        return $table;
    }

    public function findById($tableName, $id)
    {
        foreach ($this->$tableName as $item) {
            if ($item->get_id() == $id) {
                return $item;
            }
        }
        return false;
    }

    public function findByName($tableName, $name)
    {
        foreach ($this->$tableName as $item) {
            if ($item->get_name() == $name) {
                return ($item);
            }
        }
        return false;
    }

    public function updateTable($tableName, $row)
    {
        foreach ($this->$tableName as $key => $item) {
            if ($item->get_id() == $row->get_id()) {
                return ($this->$tableName[$key] = $row);
            }
        }
        return false;
    }

    public function deleteTable($tableName, $id)
    {
        foreach ($this->$tableName as $key => $item) {
            if ($item->get_id() == $id) {
                unset($this->$tableName[$key]);
                return true;
            }
        }
        return false;
    }

    public function truncateTable($tableName)
    {
        unset($this->$tableName);
        return true;
    }
}

// $productTable = new Database();
// $row = new Product(1, 'cong', 1);
// $row1 = new Product(2, 'conggggg', 2);
// $update = new Product(1, 'congpham', 1);

// $row->createProductTest(1, 'cong', 10);
// $productTable->insertTable('productTable', $row);
// $productTable->insertTable('productTable', $row1);

// $productTable->selectTable('productTable', 'cong');

// echo "<pre>";
// print_r($productTable);

// echo "<pre>";
// print_r($productTable->selectTable('productTable', 'conggggg'));

// echo "<pre>";
// print_r($productTable->findById('productTable', 2));

// print_r($productTable->findByName('productTable', 'cong'));
// print_r($productTable->updateTable('productTable', $update));

// print_r($productTable->deleteTable('productTable', 1));

// print_r($productTable->truncateTable('productTable'));

// echo "<pre>";
// print_r($productTable);
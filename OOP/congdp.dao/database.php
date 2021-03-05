<?php
require_once '../congdp.entyti/accessory.php';
require_once '../congdp.entyti/category.php';
require_once '../congdp.demo/productDemo.php';

define('TABLE_NAMES', ['productTable', 'categoryTable', 'accessoryTable']);

class Database
{
    private static $database;
    protected $productTable;
    protected $categoryTable;
    protected $accessoryTable;

    public static function createDatabase()
    {
        if (self::$database !== null) {
            return self::$database;
        }
        self::$database = new self();
        return self::$database;
    }

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

    public function insertTable($tableName, BaseRow $row)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        return $this->$tableName[] = $row;
    }

    public function selectTable($tableName, $elementName)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        $table = [];
        foreach ($this->$tableName as $item) {
            if ($item->getName() == $elementName) {
                $table[] = $item;
            }
        }
        return $table;
    }

    public function findById($tableName, $id)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        foreach ($this->$tableName as $item) {
            if ($item->getId() == $id) {
                return $item;
            }
        }
        return false;
    }

    public function findByName($tableName, $name)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        foreach ($this->$tableName as $item) {
            if ($item->getName() == $name) {
                return $item;
            }
        }
        return false;
    }

    public function updateTable($tableName, BaseRow $row)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        foreach ($this->$tableName as $key => $item) {
            if ($item->getId() == $row->getId()) {
                return ($this->$tableName[$key] = $row);
            }
        }
        return false;
    }

    public function deleteTable($tableName, $id)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        foreach ($this->$tableName as $key => $item) {
            if ($item->getId() == $id) {
                unset($this->$tableName[$key]);
                return true;
            }
        }
        return false;
    }

    public function truncateTable($tableName)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        unset($this->$tableName);
        return true;
    }

    public function getAllTable($table)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        $result = [];
        foreach ($this->$table as $value) {
            $result[] = $value;
        }
        return $result;
    }

    public function updateTableById($id, $row, $tableName)
    {
        if (!in_array($tableName, TABLE_NAMES)) {
            return false;
        }
        foreach ($this->$tableName as $key => $item) {
            if ($item->getId() == $id) {
                return ($this->$tableName[$key] = $row);
            }
        }
        return false;

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
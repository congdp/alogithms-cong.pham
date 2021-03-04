<?php
// require '../congdp.dao/database.php';
require '../congdp.dao/database.php';
require_once '../congdp.entyti/category.php';
require_once '../congdp.entyti/accessory.php';

class DatabaseDemo extends Database
{
    protected $databaseDemo;

    public function insertTableTest($name, $row)
    {
        return $this->insertTable($name, $row);
    }

    public function selectTableTest($name, $where)
    {
        return $this->selectTable($name, $where);
    }

    public function updateTableTest($name, $row)
    {
        return $this->updateTable($name, $row);
    }

    public function deleteTableTest($name, $row)
    {
        return $this->deleteTable($name, $row);
    }

    public function truncateTableTest($name)
    {
        return $this->truncateTable($name);
    }

    public function getAllTable($table)
    {
        $result = array();
        foreach ($this->$table as $value) {
            $result[] = $value;
        }
        return $result;
    }

    public function initDatabase()
    {
        $numRow = 10;
        for ($i = 1; $i < $numRow; $i++) {
            $this->insertTableTest('productTable', new Product($i, 'product test', $i));
            $this->insertTableTest('categoryTable', new Category($i, 'category test', $i));
            $this->insertTableTest('accessoryTable', new Accessory($i, 'accessory test', $i));
        }
    }

    public function printTable($table)
    {
        $result = $this->getAllTable($table);
        foreach ($result as $item) {

            echo "Id:" . $item->getId() . '<br>' . 'Name:' . $item->getName() . '<br>' . 'CategoryId:' . $item->getCategoryId() . '<br>' . "";
        }
    }

    public function updateTableByIdTest($id, $row, $tableName)
    {
        return $this->updateTableById($id, $row, $tableName);
    }
}

$databaseDemo = new DatabaseDemo();
$row = new Product(1, 'cong', 1);
$row1 = new Product(2, 'conggggg', 2);
$update = new Product(1, 'congpham', 1);

echo "<pre>";

// $databaseDemo->initDatabase();
// $databaseDemo->printTable('productTable');

print_r($databaseDemo->insertTableTest('product', $row));
print_r($databaseDemo->insertTableTest('product', $row1));

// echo "<pre>";
// print_r($databaseDemo->selectTableTest('product', 'cong'));

// print_r($databaseDemo->updateTableTest('product', $update));

// print_r($databaseDemo->deleteTableTest('product', 1));

// print_r($databaseDemo->truncateTableTest('product'));

// print_r($databaseDemo->updateTableByIdTest(1, $update, 'product'));
<?php
// require '../congdp.dao/database.php';
require '../congdp.dao/database.php';

class DatabaseDemo extends Database
{
    protected $databaseDemo;

    //  public function __construct(Database $database)
    // {
    //     $this->databaseTest = $database;
    // }

    // public function getDatabase(): Database
    // {
    //     return $this->databaseTest;
    // }

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

}

$databaseDemo = new DatabaseDemo();
$row = new Product(1, 'cong', 1);
$row1 = new Product(2, 'conggggg', 2);
$update = new Product(1, 'congpham', 1);

echo "<pre>";
print_r($databaseDemo->insertTableTest('product', $row));

// echo "<pre>";
print_r($databaseDemo->selectTableTest('product', 'cong'));

print_r($databaseDemo->updateTableTest('product', $update));

// print_r($databaseDemo->deleteTableTest('product', 1));

// print_r($databaseDemo->truncateTableTest('product'));

// print_r($databaseDemo->insertTableTest('product', $row));
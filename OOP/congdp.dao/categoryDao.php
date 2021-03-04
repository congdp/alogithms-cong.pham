<?php
require 'database.php';
class CategoryDAO
{
    protected $database;
    protected $categoryDao;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getDatabase(): Database
    {
        return $this->database;
    }

    // public function getTableName(): string
    // {
    //     return $this->tableName;
    // }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function insert($row)
    {
        return $this->database->insertTable('categoryTable', $row);
    }

    public function update($row)
    {
        return $this->database->updateTable('categoryTable', $row);
    }

    public function delete($id)
    {
        return $this->database->deleteTable('categoryTable', $id);
    }

    public function findAll()
    {
        return $this->database->getAllTable('categoryTable');
    }

    public function findById($id)
    {
        return $this->database->findById('categoryTable', $id);
    }

}
// $db = new Database();
// $categoryDao = new CategoryDAO($db);
// $row = new Category(1, 'cong');
// $row1 = new Category(2, 'congg');

// $row2 = new Category(3, 'congggggg');

// $rowUpdate = new Category(1, 'congdp');

// echo "<pre>";

// print_r($categoryDao->insert($row));
// print_r($categoryDao->insert($row1));

// print_r($categoryDao->insert($row2));

// print_r($categoryDao->update($rowUpdate));
// print_r($categoryDao->delete(1));
// print_r($categoryDao->findById(1));

// print_r($categoryDao->findAll());
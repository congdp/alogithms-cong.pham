<?php
// require '../congdp'
require 'database.php';
class ProductDAO
{
    protected $database;
    protected $productDao;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getDatabase(): Database
    {
        return $this->database;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function insert($row)
    {
        return $this->database->insertTable('productTable', $row);
    }

    public function update($row)
    {
        return $this->database->updateTable('productTable', $row);
    }

    public function delete($id)
    {
        return $this->database->deleteTable('productTable', $id);
    }

    public function findAll()
    {
        return $this->database->getAllTable('productTable');
    }

    public function findById($id)
    {
        return $this->database->findById('productTable', $id);
    }

    public function findByName($name)
    {
        return $this->database->findById('productTable', $id);
    }

}
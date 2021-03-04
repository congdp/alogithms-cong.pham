<?php
require 'database.php';
class AccessoryDAO
{
    protected $database;
    protected $accessoryDao;

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
        return $this->database->insertTable('accsessoryTable', $row);
    }

    public function update($row)
    {
        return $this->database->updateTable('accsessoryTable', $row);
    }

    public function delete($id)
    {
        return $this->database->deleteTable('accsessoryTable', $id);
    }

    public function findAll()
    {
        return $this->database->getAllTable('accsessoryTable');
    }

    public function findById($id)
    {
        return $this->database->findById('accsessoryTable', $id);
    }

    public function findByName($name)
    {
        return $this->database->findById('accsessoryTable', $id);
    }
    public function search($name)
    {
        return $this->database->selectTable('accsessoryTable', $name);
    }
}
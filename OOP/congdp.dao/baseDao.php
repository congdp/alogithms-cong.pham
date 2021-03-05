<?php
require 'database.php';
require_once 'interfaceDao.php';
abstract class BaseDAO implements InterfaceDAO
{
    protected $database;
    protected $tableName;

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

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    public function insert(BaseRow $row)
    {
        return $this->database->insertTable($this->tableName, $row);
    }

    public function update(BaseRow $row)
    {
        return $this->database->updateTable($this->tableName, $row);
    }

    public function delete($id)
    {
        return $this->database->deleteTable($this->tableName, $id);
    }

    public function findAll()
    {
        return $this->database->getAllTable($this->tableName);
    }

    public function findById($id)
    {
        return $this->database->findById($this->tableName, $id);
    }

    public function findByName($name)
    {
        return $this->database->findById($this->tableName, $id);
    }
    public function search($name)
    {
        return $this->database->selectTable($this->tableName, $name);
    }

}
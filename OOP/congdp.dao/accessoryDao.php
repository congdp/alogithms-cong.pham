<?php
require_once 'baseDao.php';
class AccessoryDAO extends BaseDAO
{
    public function __construct($database)
    {
        $this->database = $database;
        $this->tableName = 'accessoryTable';
    }
}
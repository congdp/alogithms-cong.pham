<?php
require_once 'baseDao.php';
class ProductDAO extends BaseDao
{
    public function __construct($database)
    {
        $this->database = $database;
        $this->tableName = 'productTable';
    }
}
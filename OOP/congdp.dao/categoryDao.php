<?php
require_once 'baseDao.php';
class CategoryDAO extends BaseDAO
{
    public function __construct($database)
    {
        $this->database = $database;
        $this->tableName = 'categoryTable';
    }
}
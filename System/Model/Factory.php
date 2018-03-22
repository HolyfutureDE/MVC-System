<?php

namespace System\Model;


class Factory extends FactoryManager
{

    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }


    public function getByCol($col, $val)
    {
        $stmt = $this->getConnection()->prepare("SELECT * FROM ". $this->table . " WHERE $col = '$val'");
        $stmt->execute();

        return $row = $stmt->fetchColumn();
    }

    public function User()
    {
        return new User();
    }

    public function Config()
    {
        return new Config();
    }
}
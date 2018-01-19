<?php

namespace System\Model;


class Connection
{
    public $connection;

    private $host;
    private $database;
    private $hostuser;
    private $hostpassword;

    public function setPDO($host, $database, $hostuser, $hostpassword)
    {
        return [
            $this->host = $host,
            $this->database = $database,
            $this->hostuser = $hostuser,
            $this->hostpassword = $hostpassword
        ];
    }

    public function initPDO()
    {
        return [
            "host" => $this->host,
            "database" => $this->database,
            "hostuser" => $this->hostuser,
            "hostpassword" => $this->hostpassword
        ];
    }

    public function connection()
    {
        return new \PDO("mysql:host=".$this->initPDO()["host"].";dbname=".$this->initPDO()["database"]."", $this->initPDO()["hostuser"], $this->initPDO()["hostpassword"]);
    }



    public function insert($table, $column, $value)
    {
        $stmt = $this->connection()->prepare("INSERT INTO $table ($column) VALUES (:". $value . ")");
        $stmt->bindParam(":$value", $value);
        return $this->connection = $stmt->execute();
    }


}
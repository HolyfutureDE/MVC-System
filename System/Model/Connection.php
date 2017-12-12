<?php

namespace System\Model;


class Connection
{
    public $connection;

    public $host;
    public $database;
    public $hostuser;
    public $hostpassword;

    public function setPDO($host, $database, $hostuser, $hostpassword)
    {
        return [
            $this->host = $host,
            $this->database = $database,
            $this->hostuser = $hostuser,
            $this->hostpassword = $hostpassword
        ];
    }

    public function configPDO()
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
        return $this->connection = new \PDO("mysql:host=".$this->configPDO()["host"].";dbname=".$this->configPDO()["database"]."", $this->configPDO()["hostuser"], $this->configPDO()["hostpassword"]);
    }


}
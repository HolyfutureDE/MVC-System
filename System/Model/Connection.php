<?php

namespace System\Model;


class Connection
{
    public $connection;

    private $host;
    private $database;
    private $hostuser;
    private $hostpassword;

    public function connection($host, $db, $user, $pw)
    {
        return new \PDO("mysql:host=".$host.";dbname=".$db."", $user, $pw);
    }



}
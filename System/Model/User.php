<?php

namespace System\Model;


class User extends Factory
{

    public function __construct()
    {
        parent::__construct("users");
    }

    public function setSession($username)
    {
        if ($this->getByCol("username", $username) > 0) {
            if (!isset($_SESSION['username'])) {
                $_SESSION['username'] = $username;
            }
        }
    }

    public function destroySession()
    {
        if (isset($_SESSION['username'])) {
            return session_destroy();
        }

        return null;
    }

    public function getRank()
    {
        if(isset($_SESSION['username'])){
           $stmt = $this->getConnection()->prepare("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
           $stmt->execute();

           $rank = $stmt->fetchAll();

           return $rank[0]["rank"];
        }
    }


}
<?php

namespace System\Model;


class Register extends Factory
{

    public function __construct()
    {

        parent::__construct("users");
    }

    public function checkValidData($username, $password, $mail)
    {

        if ($this->getByCol("username", $username) > 0 OR $this->getByCol("mail", $mail) > 0) {
            echo "Dein Benutzername oder deine E-Mail ist bereits vergeben!";
        } else {
            $createTime = new \DateTime();
            $createTime = $createTime->getTimestamp();

            $stmt = $this->getConnection()->prepare("INSERT INTO users (username, password, mail, account_created) VALUES (:username, :password, :mail, :account_created)");
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":mail", $mail);
            $stmt->bindParam(":account_created", $createTime);

            $stmt->execute();

            $userModel = new User();
            $userModel->setSession($username);
        }
    }

}
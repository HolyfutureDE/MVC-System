<?php

namespace App\Controller;

use System\Model\Register;
use System\View\Handler;

class RegisterController extends Handler
{
    public function onRequest()
    {
        $this->initControllerConfig("Habbo: Registrier dich völlig kostenlos und ohne Probleme!", "0", "0");
        $this->setPermission();

        $this->addView("register/Register");
    }

    public function checkRegister($username, $password, $repassword, $mail)
    {
        if (!empty($username) AND !empty($password) AND !empty($repassword) AND !empty($mail)) {
            if (!preg_match("/^([0-9]+)$/", $username)) {
                if (hash("sha256", $password) == hash("sha256", $repassword)) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        if (strlen($username) <= 14 AND strlen($username) >= 2) {
                            if (strlen($mail) <= 30 AND strlen($mail) >= 3) {
                                $register = new Register();
                                return $register->checkValidData($username, hash("sha256", $password), $mail);
                            } else {
                                echo $this->getError()["register"]["string_mail"];
                            }
                        } else {
                            echo $this->getError()["register"]["string_username"];
                        }
                    } else {
                        echo $this->getError()["register"]["mail_notvalid"];
                    }
                } else {
                    echo $this->getError()["register"]["re_password"];
                }
            } else {
                echo $this->getError()["register"]["username_number"];
            }
        } else {
            echo $this->getError()["general"]["empty"];
        }

        return null;
    }

    public function test()
    {


    }
}
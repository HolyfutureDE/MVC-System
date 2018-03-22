<?php
/**
 * Created by PhpStorm.
 * User: Wieland
 * Date: 16.02.2018
 * Time: 15:36
 */

namespace System\Model;


class Login extends Factory
{

    public function __construct()
    {
        parent::__construct("users");
    }

    public function checkValidData($username, $password)
    {
        if(filter_var($username, FILTER_VALIDATE_EMAIL)){
            if($this->getByCol("mail", $username) > 0 AND $this->getByCol("password", $password) > 0){
                return $this->User()->setSession($username);
            }
        } else {
            if($this->getByCol("username", $username) > 0 AND $this->getByCol("password", $password) > 0){
                return $this->User()->setSession($username);
            }
        }
    }
}
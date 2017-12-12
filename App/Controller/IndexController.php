<?php

namespace App\Controller;

use System\View\Handler;

class IndexController extends Handler
{

    //ToDo Config: Global Config


    public function onRequest()
    {
        return [
            $this->addView("index/Index")
        ];
    }

    public function test()
    {

        $sql = "SELECT * FROM users";
        $user = $this->connection()->query($sql)->fetch();
        echo $user['username'];


    }
}
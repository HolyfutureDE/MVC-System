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
        $this->insert("users", "username", "Jeffrey");
        echo $this->connection;
    }
}
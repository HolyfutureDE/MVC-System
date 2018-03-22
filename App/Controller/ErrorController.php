<?php


namespace App\Controller;


use System\View\Handler;

class ErrorController extends Handler
{

    public function __construct()
    {
        $this->initControllerConfig("Error", "0","");
    }

    public function onRequest()
    {
        return [
            $this->addView("error/Error"),
            $this->addCSS("error/Error")
        ];
    }

}
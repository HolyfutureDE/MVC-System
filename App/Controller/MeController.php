<?php
/**
 * Created by PhpStorm.
 * User: Wieland
 * Date: 16.02.2018
 * Time: 18:52
 */

namespace App\Controller;


use System\View\Handler;

class MeController extends Handler
{

    public function onRequest()
    {
        $this->initControllerConfig("Habbo ME", "1", "1");
        $this->setPermission();

        $this->addView("me/Me");
    }

}
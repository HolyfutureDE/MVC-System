<?php

namespace App\Controller;


use System\View\Handler;

class MaintenanceController extends Handler
{

    public function __construct()
    {
        $this->initControllerConfig("HabboAF - Sei bereit für das unglaubliche!", "0", "");
        parent::__construct();
    }

    public function onRequest()
    {
        return [
            $this->addView("maintenance/Maintenance"),
            $this->addCSS("maintenance/Maintenance")
        ];
    }

}
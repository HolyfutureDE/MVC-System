<?php

namespace System\Model;

class Config extends Connection
{

    // ControllerConfig
    public $title;
    public $minRank;
    public $directUrl;

    public function __construct()
    {
        return [
            $this->initControllerConfig("Startseite", "0", "http://localhost/MVC/index"),
            $this->setPDO("localhost", "base", "root", "")
        ];
    }

    public function initControllerConfig($title, $minRank, $directUrl)
    {
        return [
            $this->title = $title,
            $this->minRank = $minRank,
            $this->directUrl = $directUrl
        ];
    }

    public function controllerConfig()
    {
        return [
            "title" => $this->title,
            "minRank" => $this->minRank,
            "directUrl" => $this->directUrl
        ];
    }


}

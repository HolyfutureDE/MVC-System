<?php

namespace System\Model;

class Permission extends Factory
{

    public $userModel;
    public $minPermission;
    public $rank;

    public function __construct($minPermission)
    {

        $this->userModel = new User();
        $this->rank = $this->userModel->getRank();

        $this->minPermission = $minPermission;

        parent::__construct("users");

        return $this->checkPermission();
    }

    public function checkPermission()
    {
        if($this->rank <= $this->minPermission){
            //TODO: Weiterleitung Erroseite (keine Permission)
        } else {
            return Header ("Location:" . $this->Config()->defaultConfig()["dirUrl"] . "/me");
        }

        return null;
    }
}
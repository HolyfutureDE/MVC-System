<?php

namespace System\Model;

class Config extends Connection
{

    // ControllerConfig
    public $title;
    public $minPermission;
    public $directUrl;

    public function initControllerConfig($title, $minPermission, $directUrl)
    {
        return [
            $this->title = $title,
            $this->minPermission = $minPermission,
            $this->directUrl = $directUrl
        ];
    }

    public function defaultConfig()
    {
        return [
            "dirUrl" => "http://localhost/habboaf",
            "avaImage" => "https://www.habbo.nl/habbo-imaging/avatarimage?figure="
        ];
    }


    public function controllerConfig()
    {
        return [
            "title" => $this->title,
            "minPermission" => $this->minPermission,
            "directUrl" => $this->directUrl
        ];
    }

    public function getError()
    {
        return $error = array(
            "general" => array(
                "unknown_error" => "Whoups! Unbekannter Fehler! Bitte melde dich bei einem Administrator!",
                "empty" => "Bitte fülle alle Felder aus!",
                "not_found" => "Whoups! Die Seite wurde nicht gefunden, 404",
            ),

            "register" => array(
                "username_number" => "Dein Username darf nicht nur aus Zahlen bestehen!",
                "re_password" => "Dein Passwort stimmt nicht überein!",
                "mail_notvalid" => "Deine E-Mail Adresse ist nicht gültig!",
                "string_username" => "Dein Username darf nicht mehr als 14 und weniger als 2 Buchstaben haben!",
                "string_mail" => "Deine E-Mail Adresse darf nicht mehr als 30 und weniger als 3 Buchstaben haben!"
            )
        );
    }

    public function setPermission()
    {
        return $permission = new Permission($this->controllerConfig()["minPermission"]);
    }

}
<?php

namespace System\Route;

class Route
{

    private $_url;

    public function __construct($url)
    {
        $this->_url = $url;
    }

    public function listen()
    {

        // url wird gefiltert und zum array konvertiert
        $url = explode("/", rtrim($this->_url, "/"));

        // übergebe den ersten wert des arrays $url an getController
        $controller = $this->getController($url[0]);

        // standard methode OnRequest
        $method = "onRequest";

        // methode aufrufen = 1, parameter = 2
        $urlOffset = 1;


        // print_r($url);

        // Standard Methode onRequest wird bei jedem Controller initalisiert
        if(isset($url[1])){
            if(method_exists($controller, strtolower($url[1]) . "Action")){
                $method = strtolower($url[1]). "Action";
                $urlOffset = 2;
            }
        }

        if(isset($url[1])){
            return $this->getMethod($url[1], $url[0], $controller);
        }

        $params = array_splice($url, $urlOffset);
        $controller->$method($params);

    }

    public function getController($controllerName)
    {
        $file = "App/Controller/". ucfirst($controllerName). "Controller.php";

        if(file_exists($file)){
            require_once $file;
            $controllerClass = "\\App\\Controller\\". ucfirst($controllerName). "Controller";
            return new $controllerClass;
        } else {
            return $this->getController("error");
        }
    }

    public function getMethod($methodName, $url, $controller)
    {

        if(method_exists($controller, $methodName)){
            $controller->$methodName();
        } else {
            $url = rtrim($url, $methodName);
            header("Location: /hubbafever/error");
            return $this->getController("error");
        }

    }


}
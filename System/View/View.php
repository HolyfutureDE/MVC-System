<?php

namespace System\View;


use System\Model\Config;

class View extends Config
{

    public function Render($request)
    {
        $request = "www/template/" . $request . ".tpl.php";
        if(file_exists($request)){
            return [
                require "../MVC/www/template/header/Header.tpl.php",
                require $request,
                require "../MVC/www/template/footer/Footer.tpl.php",
            ];
        }
    }

    public function getCSS($request)
    {
        $request = "/MVC/www/public/css/" . $request . ".css";
        echo '<link rel="stylesheet" href= "' . $request . '">';
        return true;
    }


}
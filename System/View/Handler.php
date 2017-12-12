<?php


namespace System\View;


class Handler extends View
{

    public function addView($request)
    {
        return $this->Render($request);
    }

    public function addCSS($request)
    {
        return $this->getCSS($request);
    }

}
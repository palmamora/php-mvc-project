<?php
namespace controllers;

class Help extends \Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('help/index');
    }

    public function other($arg = false)
    {
        echo ('we are inside other');
        if (isset($arg)) {
            echo ('optional : ' . $arg);
        }
    }

}

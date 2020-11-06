<?php
namespace controllers;

class Help extends \Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function other($arg = false)
    {
        require_once __DIR__ . '/../models/help.php';
        $model = new \models\Help();
        $model->blah();
        if (isset($arg)) {
            echo ('optional : ' . $arg);
        }
    }

    public function index(){
        $this->view->render('help/index');
    }

}

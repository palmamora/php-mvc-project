<?php 
namespace controllers;
require_once __DIR__ . '/../libs/Controller.php';

class Error extends \Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('error/index');
    }
}

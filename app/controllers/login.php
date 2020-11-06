<?php
namespace controllers;

class Login extends \Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    //reciclar estas clases a futuro
    public function index()
    {
        $this->view->render('login/index');
    }

    public function auth()
    {
        $this->initModel('Login');
        $this->model->auth();
    }
}

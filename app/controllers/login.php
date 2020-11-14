<?php
namespace controllers;

use Session;

class Login extends \Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->initModel('Login');
    }
    //reciclar estas clases a futuro
    public function index()
    {
        $this->view->render('login/index');
    }

    public function auth()
    {
        if ($this->model->auth()) {
            header('location:'. URL . 'dashboard');
        }else{
            header('location:' . URL . 'login');
        }
    }

    public function logout(){
        Session::destroy();
        header('location:'. URL . 'login');
    }
}

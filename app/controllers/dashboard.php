<?php

namespace controllers;

use Session;

class Dashboard extends \Controller
{
    public function __construct()
    {
        Session::start();
        if (Session::get('logged')) {
            parent::__construct();
            $this->view->js = array('dashboard/js/default.js');
        } else {
            Session::destroy();
            header('location:' . URL . 'login');
        }

    }

    public function index()
    {
        $this->view->render('dashboard/index');
    }

    function xhrInsert(){
        $this->initModel('dashboard');
        $this->model->xhrInsert();  
    }

    function xhrGetList(){
        $this->initModel('dashboard');
        echo $this->model->xhrGetList();
    }
}

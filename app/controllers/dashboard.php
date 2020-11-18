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
            $this->view->js = array('dashboard.js');
            $this->initModel('dashboard');
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
        echo $this->model->xhrInsert();  
    }

    function xhrGetList(){
        echo $this->model->xhrGetList();
    }
    function xhrDelete(){
        echo $this->model->xhrDelete();
    }
}

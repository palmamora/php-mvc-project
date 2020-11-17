<?php

namespace controllers;

use Session;

class User extends \Controller
{
    public function __construct()
    {
        Session::start();
        if (Session::get('logged') && Session::get('role')=='owner') {
            parent::__construct();
            //$this->view->js = array('dashboard/js/default.js');
            $this->initModel('user');
        } else {
            //Session::destroy();
            header('location:' . URL . 'error');
        }

    }

    public function users(){
        $this->view->users = $this->model->getAllUsers();
        $this->view->render('user/index');
    }

    public function create(){
        
    }

    public function edit($id){

    }
    public function delete($id){

    }
}

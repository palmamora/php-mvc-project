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
            $this->index();
        } else {
            Session::destroy();
            header('location:' . URL . 'login');
        }

    }

    public function index()
    {
        $this->view->render('dashboard/index');
    }
}

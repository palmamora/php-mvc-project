<?php

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function initModel($name)
    {
        require_once __DIR__ . '/../models/' . $name . '.php';
        $path = '\models\\' . $name;
        $this->model = new $path();
    }

}

<?php

class View
{
    public function __construct()
    {

    }

    public function render($name)
    {
        require_once __DIR__ . '/../views/header.php';
        require_once __DIR__ . '/../views/' . $name . '.php';
        require_once __DIR__ . '/../views/footer.php';
    }
}

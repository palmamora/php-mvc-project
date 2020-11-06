<?php

class Database
{
    private static $instance;

    public function __construct()
    {
        $instance = mysqli_connect(
            'localhost', 
            'root',
            '',
            'id14855054_palmamora001',
            3306
        );

        return $instance;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

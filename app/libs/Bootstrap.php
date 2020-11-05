<?php

class Bootstrap
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $file = __DIR__ . '/../controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require_once $file;
            $namespace = 'controllers\\' . $url[0];
            $controller = new $namespace();
            if (isset($url[1]) && method_exists($controller , $url[1])) {
                $controller->{$url[1]}();
            } else {
                if (isset($url[2])) {
                    $controller->{$url[1]}($url[2]);
                }
            }
        } elseif (!file_exists($file) && $url[0] != null) {
            require_once __DIR__ . '/../controllers/error.php';
            $error = new controllers\Error();
            return false;
        } else {
            require_once __DIR__ . '/../controllers/index.php';
            $controller = new controllers\Index();
        }

    }
}

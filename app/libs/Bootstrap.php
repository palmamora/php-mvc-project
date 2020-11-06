<?php

class Bootstrap
{
    public function __construct()
    {
        $url = $this->url();
        $file = $this->file($url);

        //si se solicita un controlador
        if (!empty($url[0])) {
            //si el controlador solicitado existe
            if (file_exists($file)) {
                //si se solicita alguna función
                if (isset($url[1])) {
                    require_once $file;
                    $namespace = 'controllers\\' . $url[0];
                    $controller = new $namespace();
                    //si la función solicitada existe
                    if (method_exists($controller, $url[1])) {
                        //si hay un parámetro
                        if(isset($url[2])){
                        $controller->{$url[1]}($url[2]);
                        //si no hay un parámetro
                        }else{
                            $controller->{$url[1]}();
                        }
                        //si la función solicitada no existe
                    } else {
                        $this->error();
                    }

                } else {
                    //si no se solicita ninguna función
                    require_once $file;
                    $namespace = 'controllers\\' . $url[0];
                    $controller = new $namespace();
                    $controller->index();
                }
                //si el controlador solicitado no existe
            } else {
                $this->error();
            }
        } else {
            //si no se solicita ningún controlador
            $this->index();
        }
    }//end construct

    //llama al controlador error
    public function error()
    {
        require_once __DIR__ . '/../controllers/error.php';
        $controller = new controllers\Error();
        $controller->index();
    }
    //retorna un arreglo con la url
    public function url()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }

    public function file($url)
    {
        return __DIR__ . '/../controllers/' . $url[0] . '.php';
    }

    public function index()
    {
        require_once __DIR__ . '/../controllers/index.php';
        $controller = new controllers\Index();
        $controller->index();
    }
}

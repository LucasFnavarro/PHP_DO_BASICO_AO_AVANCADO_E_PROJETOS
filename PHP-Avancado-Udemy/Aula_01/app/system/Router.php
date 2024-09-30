<?php

namespace app\system;

use app\controllers\Main;

use Exception;

// sistemas de rotas da aplicação!

class Router
{
    public static function dispathc()
    {
        // valores da rota principal
        $httpverb = $_SERVER['REQUEST_METHOD'];
        $controller = 'main';
        $metodo = 'index';

        // verificar parâmetros uri 
        if (isset($_GET['ct'])) {
            $controller = $_GET['ct'];
        }

        if (isset($_GET['mt'])) {
            $metodo = $_GET['mt'];
        }

        // parâmetro do método
        $parameters = $_GET;

        // remover controlador dos parâmetros
        if (key_exists("ct", $parameters)) {
            unset($parameters['ct']);
        }

        if (key_exists("mt", $parameters)) {
            unset($parameters['mt']);
        }

        // tenta instanciar o controlador e executar o método
        try {
            $class = "app\Controllers\\$controller";
            $controller = new $class();
            $controller->$metodo(...$parameters);
        } catch (Exception $err) {
            die($err->getMessage());
        }
    }
}

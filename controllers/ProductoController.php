<?php

namespace Controllers;

use MVC\Router;

class ProductoController {
    public static function index(Router $router){
        $router->render('productos/index', []);
        echo json_encode($_POST);
    }

}
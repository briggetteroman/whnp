<?php
    require_once 'autoload.php';


    // A pior forma de fazer um route,  então qual é uma melhor forma?
    $route = $_SERVER['REQUEST_URI'];

    switch ($route) {
        case '/':
            $auth = new AuthController();
            if ($auth -> checkAuth()) {
                echo 'Olá, voce esta autenticado!.';
            } else {
                echo 'Olá, voce NÃO esta autenticado!.';
            }
            break;

        case '/login':
            $controller = new AuthController();
            break;

        default:
            echo "Rota não encontrada!";
            break;
    }
?>
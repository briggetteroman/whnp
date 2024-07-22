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
                header('Location: /login');
            }
            break;

        case '/login':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo 'Fazer autenticação!!!';
            } else {
                $controller = new AuthController();
                // $controller -> render('login');
            }
            break;

        default:
            echo "Rota não encontrada!";
            break;
    }
?>
<?php

    session_start();
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
                $request = file_get_contents('php://input');
                // echo $request;
                $data_obj = json_decode($request);

                // echo $data_obj;
                $auth = new AuthController();
                $result = $auth -> login($data_obj -> username, $data_obj -> password);

                echo $result;
            } else {
                $controller = new ViewController();
                $controller -> render('login');
            }
            break;

            case '/register':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo 'Fazer registro!!!';
            } else {
                $controller = new ViewController();
                $controller -> render('register');
            }
            break;

        default:
            echo "Rota não encontrada!";
            break;
    }
?>
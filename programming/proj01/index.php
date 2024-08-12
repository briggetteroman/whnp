<?php

    session_start();
    require_once 'autoload.php';


    // A pior forma de fazer um route,  então qual é uma melhor forma?
    $route = $_SERVER['REQUEST_URI'];

    switch ($route) {
        case '/':
            $auth = new AuthController();
            if ($auth -> checkAuth()) {
                echo "Olá {$_SESSION['username']}, voce esta autenticado!.";
            } else {
                header('Location: /login');
            }
            break;

        case '/login':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $request = file_get_contents('php://input');
                $data_obj = json_decode($request);

                $auth = new AuthController();
                $result = $auth -> login($data_obj -> username, $data_obj -> password);

                if ($result) {
                    header('Content-Type: application/json');
                    echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso!']);
                } else {
                    header('Content-Type: application/json');
                    echo json_encode(['success' => false, 'message' => 'Login ou senha invalido!']);
                }
            } else {
                $controller = new ViewController();
                $controller -> render('login');
            }
            break;

            case '/register':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $request = file_get_contents('php://input');
                $data_obj = json_decode($request);

                $auth = new AuthController();
                $result = $auth -> register($data_obj -> username, $data_obj -> password);

                if ($result) {
                    header('Content-Type: application/json');
                    echo json_encode(['success' => true, 'message' => 'Registro realizado com sucesso!']);
                } else {
                    header('Content-Type: application/json');
                    echo json_encode(['success' => false, 'message' => 'Registro invalido!']);
                }

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
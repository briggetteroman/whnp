<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "teste@teste.com" && $senha == "123456") {
     echo "login e senha correto!";
} else {
    echo "Login incorreto";
}
?>
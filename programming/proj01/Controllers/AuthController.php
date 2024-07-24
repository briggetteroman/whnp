<?php
class AuthController {
    public $is_auth = false;
    public $username;
    public $user_id;

    public function login($username, $password) {
        return "Tela de login Resultttt!";
    }

    public function register($username, $password) {
        return "Tela de registro!";
    }

    public function checkAuth() {
        return $this -> is_auth;
    }
}
?>
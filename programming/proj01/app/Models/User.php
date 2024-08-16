<?php
class User {
    public $id;
    public $username;
    public $password;

    public $connection;

    public function __construct(){
        $this -> connection = new mysqli('mysql', 'crowsec', 'crowsec123', 'live_crowsec');
    }

    public function getAll(){
        $sql = "SELECT * FROM users";
        $result = $this -> connection -> query($sql);

        $users = [];
        while ($row = $result -> fetch_assoc()) {
            $users[] = $row;
        }

        return $users;
    }

    public function getUserByUsername($username){
        $sql = "SELECT * FROM users where username = '$username'";
        $result = $this -> connection -> query($sql);

        if ($result -> num_rows > 0) {
            $user = $result -> fetch_assoc();
            return $user;
        } else {
            return false;
        }
    }


    public function registerUser ($username, $password) {
        $sql = "INSERT INTO users (`username`, `password`, `role`) VALUES ('$username', '$password', 'user')";
        $result = $this -> connection -> query($sql);

        return $result;
    }

    public function __destruct(){
        $this -> connection -> close();
    }

}
?>
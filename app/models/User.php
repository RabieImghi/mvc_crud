<?php
class User{
    public static function ListUsers(){
        $conn = Connect::connecte();
        $sql = "SELECT * FROM users";
        return $conn->query($sql);
    }
    public static function InserUser(){
        $conn = Connect::connecte();
        extract($_POST);
        $sql = "INSERT INTO users SET userame='$username', email='$email', password='$password'";
        return $conn->query($sql);
    }
}
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
    public static function UpdateUser(){
        $conn = Connect::connecte();
        extract($_POST);
        $sql = "UPDATE users SET userame='$username', email='$email' WHERE UserID='$idUser'";
        return $conn->query($sql);
    }
    public static function DeletUser(){
        $conn = Connect::connecte();
        extract($_POST);
        $sql = "DELETE FROM users  WHERE UserID='$idUser'";
        return $conn->query($sql);
    }
    
}
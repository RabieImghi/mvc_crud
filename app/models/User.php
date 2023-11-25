<?php
class User{
    public static function ListUsers(){
        $conn = Connect::connecte();
        $sql = "SELECT * FROM users";
        return $conn->query($sql);
    }
}
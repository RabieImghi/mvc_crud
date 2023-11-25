<?php
class Classe{
    public static function ListClasses(){
        $conn = Connect::connecte();
        $sql = "SELECT * FROM classes";
        return $conn->query($sql);
    }
    public static function InserClasses(){
        $conn = Connect::connecte();
        extract($_POST);
        $sql = "INSERT INTO classes SET ClassName='$classename', ClasseLevel='$level'";
        return $conn->query($sql);
    }
    
}
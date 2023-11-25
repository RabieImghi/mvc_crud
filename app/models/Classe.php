<?php
class Classe{
    public static function ListClasses(){
        $conn = Connect::connecte();
        $sql = "SELECT * FROM classes";
        return $conn->query($sql);
    }
    
    
}
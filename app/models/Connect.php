<?php
class Connect{
    public static function connecte(){
        return  new MYSQLI("localhost","root","","mvc_crud");
    }
}
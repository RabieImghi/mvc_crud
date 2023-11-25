<?php
class Autoloader {
    public static function register() {
        spl_autoload_register(function ($class) {
            if(file_exists("app/controllers/".$class .".php")) {
                require_once "app/controllers/".$class .".php";
            }
            if(file_exists("app/models/".$class . ".php")){
                require_once "app/models/".$class . ".php";
            }
        });
    }
}
Autoloader::register();
<?php
class userController{
    public static function listUserActoion(){
        $title_page ="HOME";
        $listUser = User::ListUsers();
        $listClass = Classe::ListClasses();
        include_once "app/views/UsersVue.php";
    }
    public static function InserUserActoion(){
        $res=User::InserUser();
        if($res) header("location: index.php");
    }
    public static function UpdateUserActoion(){
        $res=User::UpdateUser();
        if($res) header("location: index.php");
    }
    public static function DeletUserActoion(){
        $res=User::DeletUser();
        if($res) header("location: index.php");
    }
    
}
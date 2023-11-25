<?php
class userController{
    public static function listUserActoion(){
        $title_page ="HOME";
        $listUser = User::ListUsers();
        include_once "app/views/listUserVue.php";
    }
    public static function InserUserActoion(){
        $res=User::InserUser();
        if($res) header("location: index.php");
    }
}
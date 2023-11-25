<?php
class userController{
    public static function listUserActoion(){
        $title_page ="HOME";
        $listUser = User::ListUsers();
        include_once "app/views/listUserVue.php";
    }
}
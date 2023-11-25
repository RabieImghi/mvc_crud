<?php
    require 'Autoloader.php';
    if(isset($_GET["action"])){
        $action = $_GET["action"];
        switch($action){
            case "list": userController::listUserActoion(); break;
            case "classe": classController::listClasseActoion();break;
        }
    }else
    if(isset($_POST["submit"])){
        $action = $_POST["action"];
        switch($action){
            //CRUD USERS----------------------
            case "deletUser" : userController::DeletUserActoion(); break;
            case "addUser" : userController::InserUserActoion(); break;
            case "updateUser" : userController::UpdateUserActoion(); break;
            //CRUD CLASS----------------------
            case "addClass" : classController::InserClassActoion(); break;
            case "updateClass" : classController::UpdateClassActoion(); break;
            case "deletClass" : classController::DeletClassActoion(); break;
        }
    }else{
        userController::listUserActoion();
    }
    
?>
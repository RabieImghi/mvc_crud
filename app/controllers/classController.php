<?php
class classController{
    public static function listClasseActoion(){
        $title_page ="CLASSES";
        $listClasse = Classe::ListClasses();
        include_once "app/views/ClassesVue.php";
    }
    public static function InserClassActoion(){
        $res=Classe::InserClasses();
        if($res) header("location: index.php?action=classe");
    }
    public static function UpdateClassActoion(){
        $res=Classe::UpdateClasses();
        if($res) header("location: index.php?action=classe");
    }
}
<?php
class classController{
    public static function listClasseActoion(){
        $title_page ="CLASSES";
        $listClasse = Classe::ListClasses();
        include_once "app/views/ClassesVue.php";
    }
    public static function InserClassActoion(){
        $listClasse = Classe::InserClasses();
        include_once "app/views/ClassesVue.php";
    }
}
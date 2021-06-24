<?php

class App
{
    /**
     * fonction qui permet de faire demarer l'aplication a la page home /index
     * @return void
     * 
     */
    public static function process(): void
    {   //en changeant la variable $ conollerName on change la page d'acceuil de l'appli
        $controllerName = "home";
        $task = "index";
        //$controller et le nom du controleur vers lequel nou voulons aller
        if (!empty($_GET['controller'])) {

            $controllerName = $_GET['controller'];
        }

        //task est la tache a effectuer que l on recurer dans les GET
        if (!empty($_GET['task'])) {

            $task = $_GET['task'];
        }


        //** ucfirst()  capitalize la 1ere lettre du mot
        $controllerName = ucfirst($controllerName);
        //On reafecte $controllerName avec des string pour le diriger vers une url extact
        $controllerName = "\Controllers\\" . $controllerName;
        $controller = new $controllerName();
        $controller->$task();
    }
}

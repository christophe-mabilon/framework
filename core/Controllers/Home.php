<?php

namespace Controllers;


class Home //extends Controller si besoin d'un model
{
    //  protected $modelName; si besoin d'un model


    /**
     * affiche l'accueil du framework
     * 
     * 
     */
    public function index()
    {
        $titreDeLaPage = "Accueil Framework";

        $message = "Bienvenue dans la documentation";
        $messageChangeable = "Changez moi grace au formulaire";
        if (!empty($_POST['messageChangeable'])) {
            $messageChangeable = $_POST['messageChangeable'];
        }


        // render un template
        //render() sert a transmettre des informations d 'un page a une autre
        //compact() cree un tableau associatif a paritir des variable et de leurs valeurs.
        \Rendering::render('home/home', compact('messageChangeable', 'titreDeLaPage', 'message'));
    }
}

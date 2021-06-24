<?php


class Rendering

{


    /**
     * 
     * genere le rendu de données interpolées dans un template
     * 
     * @param string $template
     * @param array $donnees
     * 
     */
    public static function render(string $template, array $donnees): void
    {

        // on extrait des données tableaux assiciatifs vers des variables chaque item du tableau crée un nouvelle variable du meme nom 
        extract($donnees);
        // ob_start() enclenche la temporisation de données des que la fonction s'execute plus aucun code html n est affiché,le tout est gardé en memoire tampon jusqu' ala appelle de ob_get_clean()
        ob_start();

        //On recuprere le template du nom donnée dans la variale $template
        require_once "templates/" . $template . ".html.php";

        // ici ob_get_clean() est reaffecté a la variable contanu de la page ,tout le contenu est affecté depuis le declanchement de ob_start()
        $contenuDeLaPage = ob_get_clean();


        require_once "templates/layout.html.php";
    }
}

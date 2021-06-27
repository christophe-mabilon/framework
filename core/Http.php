<?php

class Http
{

    /**
     * 
     * redirige vers l'url passé en parametre
     * @param string $url
     */
    //function static 
    //def:Le fait de déclarer des propriétés ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe. 
    //Comme les méthodes statiques peuvent être appelées sans qu'une instance d'objet n'ait été créée, la pseudo-variable $this n'est pas disponible dans les méthodes déclarées comme statiques.
    public static function redirect(string $url): void

    {
        //header redirige ,Location'' est l url a rediriger
        header('Location: ' . $url);
    }
}

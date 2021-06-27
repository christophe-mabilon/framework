<?php

//la function spl_autoload_register()crée une file d'attente de fonctions d'autochargement, et les exécute les unes après les autres, dans l'ordre où elles ont été définies. A contrario, la fonction __autoload() ne peut être définie qu'une seule fois.
//Cela permet d 'eviter les fautes de frappe et d 'eviter d'eventuelles erreurs.
spl_autoload_register(function ($nomDeClasse) {



    //remplace une chaine de charactere donné par une autre dans une variable.
    //exemple ici on reaffecte $nomClasse en replacant les \ par de /.
    $nomDeClasse = str_replace("\\", "/", $nomDeClasse);

    //a besoin de charger core/$nomDeClasse pou continuer
    require_once "core/$nomDeClasse.php";
});

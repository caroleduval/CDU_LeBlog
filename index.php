<?php

/**function genererFichier()
    {
    ob_start();
        // Inclut le fichier vue
        // Son résultat est placé dans le tampon de sortie
        require "vue/Accueil.php";
        // Arrêt de la temporisation et renvoi du tampon de sortie
        return ob_get_clean();
        }



$contenu=genererFichier();
    
require 'vue/template.php';
*/        

require 'modele/Routeur.php';
$routeur = new Routeur();
$routeur->routerRequete() ;

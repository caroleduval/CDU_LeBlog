<?php

// Page Accueil : le contrôleur insère la vue correspondant à id dans template.php

abstract class Controller
{
    public $fichier;
        
    public function genererVue ($donnees=[])
    {
        $contenu=self::genererFichier($donnees);
        require 'View/Template.php' ;
    }
    
    public function genererFichier(array $donnees)
    {
        // Rend les éléments du tableau $donnees accessibles dans la vue
        extract($donnees);
        // Enclenche la temporisation
        ob_start();
        // Inclut le fichier vue
        require $this->fichier;
        // Arrêt de la temporisation et renvoi du tampon de sortie
        return ob_get_clean();
    }
    
    public abstract function index();
}
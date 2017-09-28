<?php

// Page Accueil : le contrôleur insère le single.php correspondant à id dans template.php

abstract class Controller
{
    public $fichier;
        

=======
    public function genererVue()
    {
        $contenu=self::genererFichier();
        require 'View/Template.php' ;
    }
    
    private function genererFichier()
    {

        // Enclenche la temporisation
        ob_start();
        // Inclut le fichier vue
        require $this->fichier;
        // Arrêt de la temporisation et renvoi du tampon de sortie
        return ob_get_clean();
    }
    
    public abstract function index();
}
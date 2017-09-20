<?php

// Page Accueil : le contrôleur insère Accueil.php dans template.php

class ControleurAccueil
{
    public $fichier = "vue/Accueil.php";
        
    public function genererVue()
    {
        $contenu=self::genererFichier();
        require 'vue/template.php' ;
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
}
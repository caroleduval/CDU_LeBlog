<?php

// Page Accueil : le contrôleur insère le single.php correspondant à id dans template.php

class ControleurPost
{
    public $fichier = "vue/Single.php";
        
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
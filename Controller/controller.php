<?php

// Page Accueil : le contrôleur insère la vue correspondant à id dans template.php

abstract class Controller
{
    private  $fichier;
    private  $id;
    private  $message="";
    
    public function fichier() {return $this->fichier;}
    public function setFichier($fichier){if(is_string($fichier)){$this->fichier = $fichier;}}  
    
    public function id() {return $this->id;}
    public function setId($id){$id = (int) $id;if ($id > 0){$this->id = $id;}} 
    
    public function message() {return $this->message;}
    public function setMessage($msg) { $this->message=$msg ;}
        
    public function genererVue ($donnees=[])
    {
        $donnees["messageConfirmation"] = $this->message;
        extract($donnees);
        $contenu=self::genererFichier($donnees);
        require 'View/Template.php' ;
    }
    
    public function genererFichier($donnees)
    {
        // Enclenche la temporisation
        ob_start();
        // Inclut le fichier vue
        require $this->fichier();
        // Arrêt de la temporisation et renvoi du tampon de sortie
        return ob_get_clean();
    }
    
    public abstract function index();
}
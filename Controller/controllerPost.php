<?php

// Page Accueil : le contrôleur insère le single.php correspondant à id dans template.php

require_once "Controller.php";
require_once "Modele/PostManager.php";

class ControllerPost extends Controller
{
    public $id;
    
    public function id() {return $this->id;}
    public function setId($id){$id = (int) $id;if ($id > 0){$this->id = $id;}}
    
    public function index()
    {
        $PM = new PostManager();
        $post=$PM->getPost($this->id);
        $attr=$post->toArray();
        extract($attr);
        ob_start();
        require $this->fichier;
        $contenu=ob_get_clean();
        require 'View/Template.php';
    }
}

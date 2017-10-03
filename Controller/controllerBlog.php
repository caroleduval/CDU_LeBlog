<?php

// Page Blog : le contrôleur insère la liste détaillée des posts dans template.php


class ControllerBlog extends Controller
{
    private $nbPostsParPage = 2 ;
    
    public function index()
    {
        $pageDde = $_GET["id"];
        $PM = new PostManager();
        $posts=$PM->getBlog($pageDde,$this->nbPostsParPage);
        $nbPages=$PM->nbPages();
        extract(array_merge($posts,array("nbPages"=>$nbPages,"pageDde"=>$pageDde),array("messageConfirmation"=>"")));
        ob_start();
        require $this->fichier();
        $contenu=ob_get_clean();
        require 'View/Template.php' ;
    }
}
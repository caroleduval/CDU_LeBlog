<?php

// Page Blog : le contrôleur insère la liste détaillée des posts dans template.php


class ControllerBlog extends Controller
{
    public function index()
    {
        $PM = new PostManager();
        $posts=$PM->getBlog();
        extract(array_merge($posts,array("messageConfirmation"=>"")));
        ob_start();
        require $this->fichier();
        $contenu=ob_get_clean();
        require 'View/Template.php' ;
    }
}
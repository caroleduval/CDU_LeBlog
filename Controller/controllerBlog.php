<?php

// Page Blog : le contrôleur insère la liste détaillée des posts dans template.php


require "Controller.php";
require "Modele/PostManager.php";


class ControllerBlog extends Controller
{
    public function index()
    {
        $PM = new PostManager();
        $posts=$PM->getBlog();
        extract($posts);
        ob_start();
        require $this->fichier;
        $contenu=ob_get_clean();
        require 'View/Template.php' ;
    }
}
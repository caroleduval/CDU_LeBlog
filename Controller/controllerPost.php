<?php

// Page Accueil : le contrôleur insère le single.php correspondant à id dans template.php


class ControllerPost extends Controller
{
    public function index()
    {
        $PM = new PostManager();
        $id=$this->id;
        $post=$PM->getPost($id);
        $attr=$post->toArray();
        $attr["messageConfirmation"] = $this->message;
        extract($attr);
        ob_start();
        require $this->fichier;
        $contenu=ob_get_clean();
        require 'View/Template.php';
    }
}

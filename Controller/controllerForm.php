<?php

// Page Accueil : le contrôleur insère le formulaire de saisie article dans template.php



class ControllerForm extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
    
    public function update()
    {
        $PM = new PostManager();
        $post=$PM->getPost($this->id());
        $attr=$post->toArray();
        $attr["messageConfirmation"] = $this->message();
        extract($attr);
        ob_start();
        require $this->fichier();
        $contenu=ob_get_clean();
        require 'View/Template.php';
    }
    
    public function record()
    {
        $post= new Post($_POST);
        $PM = new PostManager();
        if(($_GET["id"])=="")
        {
            $id=$PM->add($post);
            $messageConfirmation="Votre article a été publié sur le blog.";

        }
        else
        {
            $id=$PM->update($post);
            $messageConfirmation="Votre article a été modifié sur le blog.";
        }
        $routeur2 = new Router(array("controleur"=>"Post","action"=>"index","id"=>($id)));
        $routeur2->setMessage($messageConfirmation);
        $routeur2->routerRequete() ;
    }
    
}
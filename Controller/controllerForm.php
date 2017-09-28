<?php

// Page Accueil : le contrôleur insère le formulaire de saisie article dans template.php


require_once "Controller.php";
require_once "ControllerPost.php";
require_once "Modele/PostManager.php";



class ControllerForm extends Controller
{
    private $id;
    
    public function id() {return $this->id;}
    public function setId($id){$id = (int) $id;if ($id > 0){$this->id = $id;}}
    
    public function index()
    {
        $this->genererVue();
    }
    
    public function record()
    {
        $post= new Post($_POST);
        $PM = new PostManager();
        if(isset($_GET["id"]))
        {
            $newId=$PM->add($post);
            self::index();
        }
        else
        {
            $PM->update($post);
            self::index();
        }

    }
    
    public function update()
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
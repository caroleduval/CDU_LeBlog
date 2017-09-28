<?php

// Page Accueil : le contrôleur insère Accueil.php dans template.php


Require "Controller.php";
Require "Modele/Mail.php";


class ControllerAccueil extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
    
    public function sendMail()
    {
        $monMail= new Mail($_POST);
        $monMail->envoyerMail();
        $this->genererVue();
    }   
}
<?php

// Page Accueil : le contrôleur insère le formulaire de saisie article dans template.php

Require "controller.php";

class ControllerForm extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
}
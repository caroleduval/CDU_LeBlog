<?php

// Page Accueil : le contrôleur insère le single.php correspondant à id dans template.php

Require "Controller.php";

class ControllerPost extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
}
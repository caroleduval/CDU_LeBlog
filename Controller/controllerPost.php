<?php

// Page Accueil : le contrôleur insère le single.php correspondant à id dans template.php

Require "controller.php";

class ControllerPost extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
}
<?php

// Page Blog : le contrôleur insère la liste détaillée des posts dans template.php

Require "controller.php";

class ControllerBlog extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
}
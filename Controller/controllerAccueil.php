<?php

// Page Accueil : le contrôleur insère Accueil.php dans template.php

class ControllerAccueil extends Controller
{
    public function index()
    {
        $this->genererVue();
    }
    
    public function sendMail()
    {
        $monMail= new Mail($_POST);
        $messageConfirmation=$monMail->envoyerMail();
        $this->message=$messageConfirmation;
        $this->genererVue();
    }   
}
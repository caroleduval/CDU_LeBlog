<?php

// Classe de routage des requêtes.

class Routeur
{
    public function routerRequete()
    {
        $controleur=($_GET['controleur']=="")?"Accueil":ucfirst(strtolower($_GET['controleur']));
        try
        {
            $classeControleur='controleur'.$controleur;
            $fichierControleur='controleur/'.$classeControleur.'.php';
            require $fichierControleur;
            $monControleur = new $classeControleur();
            $monControleur->genererVue();
        }
        catch (Exception $e) {$this->gererErreur($e);}
    }
}
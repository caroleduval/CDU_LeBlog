<?php

// Classe de routage des requêtes.

class Router
{
    public function routerRequete()
    {
        /** Récupère les infos url pour définir l'action à entreprendre
* - Controleur Accueil + Action Index => Affichage de la page d'Accueil
* - Controleur Accueil + Action SendMail => Envoi du message de contact + Affiche la page d'accueil avec confirmation
* - Controleur Blog + Action Index => Affichage de la page de Blog
* - Controleur Post + id => Affichage de l'article de l'id sélectionné
* - Controleur Formulaire + Action Index => Affichage du formulaire Article vide pour création
* - Controleur Formulaire + Action Update + id => Affichage du formulaire Article prérempli pour modification d'un article existant
* - Controleur Formulaire + Action record => enregistrement dans la base de données soit en update (si id) soit en insert
          */
        $controleur=($_GET['controleur']=="")?"Accueil":ucfirst(strtolower($_GET['controleur']));
        $action=($_GET['action']=="")?"index":ucfirst(strtolower($_GET['action']));
        
        try
        {

            $classeControleur='Controller'.$controleur;

            $fichierControleur='Controller/'.$classeControleur.'.php';
            require $fichierControleur;
            $monControleur = new $classeControleur();
            $monControleur->fichier="View/".$controleur.".php";
            $monControleur->$action();
        }
        catch (Exception $e) {$this->gererErreur($e);}
    }
    
}

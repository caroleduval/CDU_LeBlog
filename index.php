<?php

   
require 'Modele/router.php';
$routeur = new Router();
$routeur->routerRequete() ;


/*** 
foreach ($posts as $post)
{
    echo "<br>";
    echo "<br>".$post->title();
    echo "<br>".$post->standFirst();
    echo "<br>".$post->lastModif();}



require "Modele/postManager.php";

function genererVue($posts)
    {
        $contenu=genererFichier($posts);
        require 'View/Template.php' ;
        return $vue;
    }

function genererFichier(array $donnees)
{
    extract($donnees);
    // Enclenche la temporisation
    ob_start();
    // Inclut le fichier vue
    require "View/Blog.php";
    // Arrêt de la temporisation et renvoi du tampon de sortie
    return ob_get_clean();
}


$PM = new PostManager();
$posts=$PM->getBlog();
$vue = genererFichier($posts);
echo $vue;*/
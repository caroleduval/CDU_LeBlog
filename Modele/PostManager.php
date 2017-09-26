<?php

require "Post.php";

class PostManager
{
    private static $bdd; // Instance de PDO
    
    public function __construct()
    {
        $bbd = self::getBdd();
    }
    
    private static function getBdd()
    {
        if (self::$bdd === null)
        {
            // Création de la connexion
            self::$bdd = new PDO('mysql:host=localhost;dbname=CDu_LeBlog', 'root', 'root',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }

    

    public function getBlog()
    {
        $posts=[];
        $q = self::$bdd->query('SELECT id, title, lastModif, standFirst FROM Article ORDER BY id DESC');
        while ($donnees=$q->fetch(PDO::FETCH_ASSOC))
        {
            $posts[]=new Post($donnees);
        }
        $q->closeCursor();
        return $posts;
    }
    
    public function getPost($id)
    {
        if (is_int($id))
        {
            $q = self::$bdd->query('SELECT * FROM Article WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            $post = new Post($donnees);
            return $post;
        }
    }
    public function add(Post $post)
    {
        $q = self::$bdd->prepare('INSERT INTO Article(title, author, standFirst, content, lastModif) VALUES(:title, :author, :standFirst, :content, NOW())');
        $q->execute(array(
            'title' => $post->title(),
            'author' => $post->author(),
            'standFirst' => $post->standFirst(),
            'content' => $post->content()));
        $newId=self::$bdd->lastInsertId();
        return $newId;
    }
    
    public function update(Post $post)
    {
        $q = self::$bdd->prepare('UPDATE Article SET title = :title, author = :author, standFirst =:standFirst, content = :content, lastModif = NOW() WHERE id = :id');
        $q->execute(array(
            'title' => $post->title(),
            'author' => $post->author(),
            'standFirst' => $post->standFirst(),
            'content' => $post->content(),
            'id' => $post->id()));
    } 
}
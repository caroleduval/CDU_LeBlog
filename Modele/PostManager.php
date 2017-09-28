<?php

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
    
    public function exists($id)
    {
        return self::$bdd->query('SELECT COUNT(*) FROM Article WHERE id = '.$id)->fetchColumn();
    }

    public function getPost($id)
    {
        if (self::exists($id))
        {
            $q = self::$bdd->query('SELECT * FROM Article WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            $q->closeCursor();
            $post = new Post($donnees);
            return $post;
        }
        else
        { throw new Exception("Désolée, cet article n'est pas disponible.");}
    }
    public function add(Post $post)
    {
        $q = self::$bdd->prepare('INSERT INTO Article(title, author, standFirst, content, lastModif) VALUES(:title, :author, :standFirst, :content, NOW())');
        $q->execute(array(
            'title' => $post->title(),
            'author' => $post->author(),
            'standFirst' => $post->standFirst(),
            'content' => $post->content()));
        $newId=(self::$bdd->lastInsertId());
        $q->closeCursor();
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
        return $post->id();
    }
    
    public function count()
    {
        $nbPosts = self::$bdd->query('SELECT COUNT(*) FROM Article')->fetchColumn();
        return $nbPosts;
    }
}
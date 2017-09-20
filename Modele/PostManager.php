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
    
    public function add(Post $post)
    {
        $q = self::$bdd->prepare('INSERT INTO Article(title, author, standFirst, content, lastModif) VALUES(:title, :author, :standFirst, :content, :lastModif)');
        $q->bindValue(':title', $post->title(),
                     ':author', $post->author(),
                     ':standFirst', $post->standFirst(),
                     ':content', $post->content(),
                      ':lastModif', now());
        $q->execute();
        $post->hydrate([
            'id' => $this->_db->lastInsertId(),
            'degats' => 0,
        ]);
    }
    
    public function count()
    {
        return self::$bdd->query('SELECT COUNT(*) FROM Article')->fetchColumn();
    }
    
    public function getPost($id)
    {
        if (is_int($id))
        {
            $q = self::$bdd->query('SELECT * FROM Article WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Post($donnees);
        }
        else
        {
            $q = self::$bdd->prepare('SELECT id, nom, degats FROM Article WHERE nom = :nom');
            $q->execute([':nom' => $info]);
            return new Post($q->fetch(PDO::FETCH_ASSOC));
        }
    }
    
    public function getBlog()
    {
        $posts = [];
        $q = self::$bdd->prepare('SELECT * FROM Article ORDER BY id');
        $q->execute([':nom' => $nom]);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $posts[] = new Post($donnees);
        }
        return $post;
    }
    
    public function update(Post $post)
    {
        $q = self::$bdd->prepare('UPDATE Article SET title = :title WHERE id = :id');
        $q->bindValue(':title', $post->title(), PDO::PARAM_INT);
        $q->bindValue(':id', $post->id(), PDO::PARAM_INT);
        $q->execute();
    }
    
}
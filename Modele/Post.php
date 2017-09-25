<?php

// Classe des articles du Blog

class Post {
    
    private $id,
            $title,
            $author,
            $standFirst,
            $content,
            $lastModif
        
    
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    
    
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    // Getters
    
    public function id() {return $this->id;}
    public function title() {return $this->title;}
    public function author() {return $this->author;}
    public function standFirst() {return $this->standFirst;}
    public function content() {return $this->content;}
    public function lastModif() {return $this->lastModif;}
    
    // Setters
    
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {$this->_id = $id;}
    }
    
    public function setTitle($title)
    {
        if (is_string($title))
        {$this->title = $title;}
    }
    
    public function setAuthor($author)
    {
        if (is_string($author))
        {$this->author = $author;}
    }
    
    public function setStandFirst($standfirst)
    {
        if (is_string($standfirst))
        {$this->standfirst = $standfirst;}
    }
    
    public function setContent($content)
    {
        if (is_string($content))
        {$this->content = $content;}
    }
    
    public function setLastModif($datemodif)
    {
        if (chekdate($datemodif))
        {$this->datemodif = date('j F Y',$datemodif);}
    }
    
    
    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getPosts() {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' order by BIL_ID desc';
        $posts = $this->executerRequete($sql);
        return $posts;
    }
    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getPost($idBillet) {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
}
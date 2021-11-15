<?php

namespace App\src\model;

/**
 * Classe représentant un compentaire du blog
 */
class Comment
{
    private $id;
    private $pseudo;
    private $content;
    private $createdAt;
    private $flag;
    private $article_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function isFlag()
    {
        return $this->flag;
    }

    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    public function getArticleId()
    {
        return $this->article_id;
    }

    public function setArticleId($article_id)
    {
        $this->article_id = $article_id;
    }
}
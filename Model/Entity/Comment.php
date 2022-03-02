<?php

namespace App\Model\Entity;
use AbstractEntity;

class Comment extends AbstractEntity
{

    private string $content;
    private user $user;
    private article $article;




    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return user
     */
    public function getUser(): user
    {
        return $this->user;
    }

    /**
     * @param user $user
     */
    public function setUser(user $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return article
     */
    public function getArticle(): article
    {
        return $this->article;
    }

    /**
     * @param article $article
     */
    public function setArticle(article $article): self
    {
        $this->article = $article;
        return $this;
    }


}


<?php

namespace App\Model\Manager;

use App\model\DB;
use App\Model\Entity\Article;
use DateTime;

class ArticleManager {

    public Function findAll(): array {

        $article = [];
        $query = DB::getPDO()->query("SELECT * FROM article");
        if ($query) {
            $userManager = new UserManager();
            $format =  'Y-m-d H:I:S';

            foreach ($query->fetchAll() as $articleData) {
                $articles[] = (new Article())
                    ->setId($articleData['id'])
                    ->setAuthor($userManager->getUserById($articleData['author']))
                    ->setContent($articleData['content'])
                    ->setDateAdd(DateTime::createFromFormat($format, $articleData['date_add']))
                    ->setDateUpdate(DateTime::createFromFormat($format, $articleData['date_update']))
                    ->setTitle($articleData['Title']);
            }
        }
        return $article;
    }

}
<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\Comment;

class CommentManager {


    public function findAll(): array
    {

        $users = [];
        $query = DB::getPDO()->query("SELECT * FROM Comment");

    }

}


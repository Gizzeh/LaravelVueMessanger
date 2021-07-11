<?php


namespace App\Repositories;

use App\Models\Message as Model;

class MessageRepository extends BaseRepository
{

    protected function getModelClass() {
        return Model::class;
    }



}

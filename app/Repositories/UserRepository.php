<?php


namespace App\Repositories;


use App\Models\User as Model;

class UserRepository extends BaseRepository
{

    protected function getModelClass() {
        return Model::class;
    }



}

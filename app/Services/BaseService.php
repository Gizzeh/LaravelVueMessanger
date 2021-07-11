<?php


namespace App\Services;


use App\Repositories\BaseRepository;

abstract class BaseService
{
    protected $modelRepository;

    public function __construct(BaseRepository $modelRepository) {
        $this->modelRepository = app($modelRepository);
    }
}

<?php


namespace App\Repositories;


abstract class BaseRepository
{
    protected $model;

    public function __construct() {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    protected function startCondition() {
        return clone $this->model;
    }
}

<?php

namespace Core\Repositories;

use Core\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public function save(array $data)
    {
        return $this->model->create($data);
    }

    public function delete($id)
    {
        $model = $this->find($id);
        return $model ? $model->delete() : null;
    }
}
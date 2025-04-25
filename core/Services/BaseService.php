<?php

namespace Core\Services;

use Core\Repositories\Contracts\RepositoryInterface;

class BaseService
{
    protected $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function save(array $data)
    {
        return $this->repository->save($data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
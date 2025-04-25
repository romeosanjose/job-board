<?php

namespace Core\Repositories\Contracts;

interface RepositoryInterface
{
    public function find($id);

    public function findAll();

    public function save(array $data);

    public function delete($id);
}
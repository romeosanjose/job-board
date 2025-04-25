<?php

namespace App\Job\Repositories\Contracts;

use Core\Repositories\EloquentRepository;

interface JobRepositoryInterface extends EloquentRepository
{
    public function create(array $data);
    public function findByEmail(string $email);
}
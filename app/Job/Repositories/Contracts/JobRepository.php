<?php

namespace App\Repositories;

use App\Job\Models\Job;
use App\Job\Repositories\Contracts\JobRepositoryInterface;

class JobRepository implements JobRepositoryInterface
{
    public function create(array $data)
    {
        return Job::create($data);
    }

    public function findByEmail(string $email)
    {
        return Job::where('email', $email)->first();
    }

    public function getAll()
    {
        return Job::all()->toArray();
    }
}
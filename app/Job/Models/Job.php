<?php

namespace App\Job\Models;

use Core\Models\BaseModel;

class Job extends BaseModel
{
    protected $fillable = ['title', 'description', 'email', 'is_first_post'];

    public $timestamps = true;
}
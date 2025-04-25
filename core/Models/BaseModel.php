<?php

namespace Core\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $fillable = [];

    public function save(array $options = [])
    {
        // Custom save logic can be added here
        return parent::save($options);
    }

    public function delete()
    {
        // Custom delete logic can be added here
        return parent::delete();
    }
}
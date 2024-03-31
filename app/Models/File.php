<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->morphOne('App\models\Type', 'type');
    }

    public function fileable()
    {
        return $this->morphTo(__FUNCTION__, 'file_type', 'file_id');
    }
}

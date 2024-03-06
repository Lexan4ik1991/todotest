<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['name', 'completed', 'user_id'];

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}

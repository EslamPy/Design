<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];
    protected $table = 'users';

    public function projects()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }
}

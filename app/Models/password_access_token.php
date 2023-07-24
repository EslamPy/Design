<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class password_access_token extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'token'];
    protected $table = 'password_access_tokens';
}

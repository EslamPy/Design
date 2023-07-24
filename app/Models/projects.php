<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'description', 'start_date', 'end_date', 'created_at', 'updated_at'];
    protected $table = 'projects';

    public function clients()
    {
        return $this->belongsToMany(clients::class, 'client_projects', 'project_id', 'client_id');
    }
}


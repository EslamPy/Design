<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'company_name', 'contact_name', 'contact_email', 'contact_phone', 'address', 'city', 'state', 'created_at', 'updated_at'];

    protected $table = 'clients';

    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }
}

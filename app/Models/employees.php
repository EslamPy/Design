<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'position', 'hire_date'];
    protected $table = 'employees';


    public function projects()
    {
        return $this->hasMany(projects::class, 'employee_project', 'employee_id', 'project_id');
    }
}

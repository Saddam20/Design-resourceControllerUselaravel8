<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table = 'employee_models';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'address',
        'image'
        
    ];
}
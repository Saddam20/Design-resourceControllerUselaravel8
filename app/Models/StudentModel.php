<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'student_models';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'age',
        'phone',
        'address',
        'image'
        
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'cni', 
        'lastname',
        'name',
        'category',
        'range',
        'birthday',
        'phone',
        'tutor',      
        'email',
        'image',
    ];

   
}

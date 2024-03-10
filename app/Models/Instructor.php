<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'pic',
        'f_name',
        'l_name',
        'email',
        'contact',
        'gender',
        'age',
    ];
}

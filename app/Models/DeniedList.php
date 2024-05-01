<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeniedList extends Model
{
    use HasFactory;

    protected $fillable = [
        'pic',
        'first_name', 
        'last_name',
        'email', 
        'contact',
        'age',
        'birthday', 
        'date',
        'course',
        'valid_id',
        'paid_attachment',
        'transmission',
    ];
}

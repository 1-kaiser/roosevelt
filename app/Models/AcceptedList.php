<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'contact', 
        'date',
        'course',
        'paid_attachment',
        'transmission',
    ];
}

<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAccount extends Model implements Authenticatable
{
    use HasFactory;
    use AuthAuthenticatable;

    protected $fillable = ['full_name', 'email', 'password'];
}

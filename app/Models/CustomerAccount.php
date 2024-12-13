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

    protected $fillable = ['first_name', 'last_name', 'email', 'contact', 'password'];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

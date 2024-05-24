<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerIndex extends Controller
{
    public function render()
    {
        $user = session('first_name');
        $lastLoginTime = session('last_login_time');

        return view('customer.customer-index', compact('user', 'lastLoginTime'));
    }
}

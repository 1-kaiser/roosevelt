<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerLoginController extends Controller
{
    public function render(): View
    {
        return view('customer.customer-login');
    }
}

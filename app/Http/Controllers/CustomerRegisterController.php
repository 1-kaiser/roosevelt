<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerRegisterController extends Controller
{
    public function render(): View
    {
        return view('customer.customer-register');
    }
}

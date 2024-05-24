<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CustomerLoginController extends Controller
{
    public function render(): View
    {
        return view('customer.customer-login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->passes()) {
            
            if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {

                Session::put('first_name', Auth::guard('customer')->user()->first_name);
                Session::put('last_login_time', now());

                $request->session()->regenerate();
                
                return redirect()->route('customer-index')->with('successLogin', 'Login Success');

            } else {

                return redirect()->route('customer-login')->with('errorLogin', 'Error Login');

            } 

        } else {
            
            return redirect()
            ->route('customer-login')
            ->withInput()
            ->withErrors($validator);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();  
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('customer-index')->with('successLogout', 'Logout Success');
    }
}

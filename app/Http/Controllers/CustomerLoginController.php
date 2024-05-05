<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                
                return redirect()->route('customer-index')->with('successLogin', 'Login Success');

            } else {

                return redirect()->route('customer-login')->with('errorLogin');
            } 

        } else {

            return redirect()
            ->route('customer-login')
            ->withInput()
            ->withErrors($validator);
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();  
        return redirect()->route('customer-index-before')->with('successLogout', 'Logout Success');
    }
}

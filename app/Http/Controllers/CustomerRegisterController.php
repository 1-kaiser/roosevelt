<?php

namespace App\Http\Controllers;

use App\Models\CustomerAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CustomerRegisterController extends Controller
{
    public function render(): View
    {
        return view('customer.customer-register');
    }

    public function registerProcessRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        if ($validator->passes()) {

            $user = new CustomerAccount();
            $user->full_name = $request->full_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('customer-login')->with('successRegister','You have successfully registered');

        } else {

            return redirect()
            ->route('customer-register')
            ->withInput()
            ->withErrors($validator);
        }
    }
}

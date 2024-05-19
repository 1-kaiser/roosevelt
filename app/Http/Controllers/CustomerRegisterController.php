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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact' => 'required|min:11|max:11',
            'password' => 'required|confirmed',
        ]);

        if ($validator->passes()) {

            $user = new CustomerAccount();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->contact = $request->contact;
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

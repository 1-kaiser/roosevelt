<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PDCIndex extends Controller
{
    public function render(): View
    {
        return view('customer.pdc.pdc-index');
    }

    public function save(Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'vehicle' => 'required',
            'branch' => 'required',
            'transmission' => 'required',
            'date' => 'required',
            'course' => ''
        ]);

        $data = Customer::create($validate);

        ($data)
        ? session()->flash('success')
        : session()->flash('error', 'Error while processing your registration');
            return redirect(route('tdc-index'));  
    }
}

<?php

namespace App\Http\Controllers;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TDCIndex extends Controller
{
    public CustomerForm $form;

    public function render(): View
    {
        return view('customer.tdc.tdc-index');
    }

    public function save(Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'time' => 'required',
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

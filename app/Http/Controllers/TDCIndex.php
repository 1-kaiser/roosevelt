<?php

namespace App\Http\Controllers;

use App\Mail\TDCConfirmation;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\WithFileUploads;

class TDCIndex extends Controller
{
    use WithFileUploads;

    public function save(Request $request) {

        // $name = $request->input('name');
        // $file = $request->file('pic');

        $validate = $request->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required|min:11|max:11',
            'date' => 'required',
            'course' => '',
            'paid_attachment' => 'required|image|mimes:jpeg,png,jpg,gif',
            'transmission' => 'required',
        ]);

        $data = Customer::create([
            'pic' => $validate['pic']->store('img', 'public'),
            'name' => $validate['name'],
            'email' => $validate['email'],
            'contact' => $validate['contact'],
            'date' => $validate['date'],
            'course' => $validate['course'],
            'paid_attachment' => $validate['paid_attachment']->store('img', 'public'),
            'transmission' => $validate['transmission'],
        ]);

        $mailData = [
            'title' => 'Reservation Request',
            'name' => $validate['name'],
            'email' => $validate['email'],
            'contact' => $validate['contact'],
            'date' => $validate['date'],
            'course' => $validate['course'],
            'transmission' => $validate['transmission'],
        ];

        if ($data) {

            Mail::to($validate['email'])->queue(new TDCConfirmation($mailData));
            session()->flash('success');

        } else {

            session()->flash('error', 'Error while processing your registration');
            return redirect(route('tdc-index'));
        }
        
        return redirect(route('tdc-index'));
    }

    public function render(): View
    {
        return view('customer.tdc.tdc-index');
    }
}

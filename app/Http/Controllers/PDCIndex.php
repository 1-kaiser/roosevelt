<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailPDCConfirmationJob;
use App\Mail\PDCConfirmation;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\WithFileUploads;

class PDCIndex extends Controller
{
    use WithFileUploads;

    public function savePDC(Request $request) {

        $validate = $request->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif',
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|min:11|max:11',
            'age' => 'required',
            'birthday' => 'required',
            'date' => 'required',
            'course' => '',
            'valid_id' => 'required|image|mimes:jpeg,png,jpg,gif',
            'paid_attachment' => 'required|image|mimes:jpeg,png,jpg,gif',
            'transmission' => 'required',
        ]);

        $data = Customer::create([
            'pic' => $validate['pic']->store('img', 'public'),
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'email' => $validate['email'], 
            'contact' => $validate['contact'],
            'age' => $validate['age'],
            'birthday' => $validate['birthday'],
            'date' => $validate['date'],
            'course' => $validate['course'],
            'valid_id' => $validate['valid_id']->store('img', 'public'),
            'paid_attachment' => $validate['paid_attachment']->store('img', 'public'),
            'transmission' => $validate['transmission'],
        ]);

        $mailData = [
            'title' => 'Reservation Request',
            'first_name' => $validate['first_name'],
            'email' => $validate['email'],
            'date' => $validate['date'],
        ];

        if ($data) {

            SendEmailPDCConfirmationJob::dispatch($mailData);
            // Mail::to($validate['email'])->queue(new PDCConfirmation($mailData));
            session()->flash('success');

        } else {

            session()->flash('error', 'Error while processing your registration');
            return redirect(route('pdc-index'));
        }
        
        return redirect(route('pdc-index'));
    }

    public function render(): View
    {
        return view('customer.pdc.pdc-index');
    }
}

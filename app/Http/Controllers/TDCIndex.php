<?php

namespace App\Http\Controllers;

use App\Mail\EnrollCustomer;
use App\Mail\TDCConfirmation;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class TDCIndex extends Controller
{
    public $name;
    public $email;
    public $branch;
    public $date;
    public $course;

    public function render(): View
    {
        return view('customer.tdc.tdc-index');
    }

    public function save(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'branch' => 'required',
            'date' => 'required',
            'course' => '',
            'vehicle' => 'required',
            'driving_course' => 'required',
        ]);

        $data = Customer::create($validate);

        $mailData = [
            'title' => 'Reserve Confirmation',
            'body' => 'hoi kaw ba nagpa reserve?',
            'name' => $validate['name'],
            'email' => $validate['email'],
            'branch' => $validate['branch'],
            'date' => $validate['date'],
            'course' => $validate['course'],
            'vehicle' => $validate['vehicle'],
            'driving_course' => $validate['driving_course'],
        ];

        if ($data) {
            Mail::to($validate['email'])->send(new TDCConfirmation($mailData));
            session()->flash('success');
        } else {
            session()->flash('error', 'Error while processing your registration');
            return redirect(route('tdc-index'));
        }
        
        return redirect(route('tdc-index'));
    }
}

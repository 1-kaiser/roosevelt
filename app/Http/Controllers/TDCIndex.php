<?php

namespace App\Http\Controllers;

use App\Livewire\Forms\CustomerForm;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TDCIndex extends Controller
{
    public CustomerForm $form;

    public function render(): View
    {
        return view('customer.tdc.tdc-index');
    }

    public function save() {
        // $this->validate();
        $this->form->store();

        $this->dispatch('swal',
            title: 'Success',
            text: 'Your application for enrollment has been processing now, please wait for the email confirmation',
            icon: 'success',
        );
    }
}

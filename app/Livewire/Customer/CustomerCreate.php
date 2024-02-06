<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use Livewire\WithFileUploads;
use Livewire\Component;

class CustomerCreate extends Component
{
    public CustomerForm $form;

    public $modalCustomerCreate = false;

    public function save() {
        $this->validate();
        $this->form->store();

        $this->dispatch('swal',
            title: 'Success',
            text: 'Your application for enrollment has been processing now, please wait for the email confirmation',
            icon: 'success',
        );

        $this->modalCustomerCreate = false;
    }

    public function render()
    {
        return view('livewire.customer.customer-create');
    }
}

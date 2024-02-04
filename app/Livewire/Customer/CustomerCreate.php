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
        $created = $this->form->store();

        is_null($created)
        ? $this->dispatch('notify', title: 'success', message: '')
        : $this->dispatch('notify', title: 'fail', message: '');
    }

    public function render()
    {
        return view('livewire.customer.customer-create');
    }
}

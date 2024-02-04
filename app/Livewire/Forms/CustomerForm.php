<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Form;
use Livewire\Attributes\Rule;

class CustomerForm extends Form
{
    public Customer $customer;

    public $id;

    #[Rule('required|min:3', as: 'Full Name')]
    public $full_name;

    #[Rule('required|min:3|email', as: 'Email')]
    public $email;

    #[Rule('required', as: 'Age')]
    public $age;

    #[Rule('required|max:11', as: 'Contact')]
    public $contact;

    #[Rule('required', as: 'Vehicle')]
    public $vehicle;

    #[Rule('required', as: 'Transmission')]
    public $transmission;

    public function setCustomer(Customer $customer) {
        

    }

    
}

?>
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

    #[Rule('required|min:11|max:11', as: 'Contact')]
    public $contact;

    #[Rule('required', as: 'Vehicle')]
    public $vehicle;

    #[Rule('required', as: 'Transmission')]
    public $transmission;

    public function setCustomer(Customer $customer) {
        $this->customer = $customer;

        $this->full_name = $customer->full_name;
        $this->email = $customer->email;
        $this->age = $customer->age;
        $this->contact = $customer->contact;
        $this->vehicle = $customer->vehicle;
        $this->transmission = $customer->transmission;
    }

    public function store() {
        Customer::create($this->except(['customer']));
    }

    public function update() {
        $this->customer->update($this->except(['customer']));
    }

    public function delete() {
        $this->customer->delete($this->except(['customer']));
    }

    
}

?>
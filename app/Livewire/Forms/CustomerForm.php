<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Form;
use Livewire\Attributes\Rule;

class CustomerForm extends Form
{
    public Customer $customer;

    public $id;

    #[Rule('required|min:3', as: 'Name')]
    public $name;

    #[Rule('required|min:3|email', as: 'Email')]
    public $email;

    #[Rule('required', as: 'Time')]
    public $time;

    #[Rule('required', as: 'Contact')]
    public $date;

    public $course;

    public function setCustomer(Customer $customer) {
        $this->customer = $customer;

        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->time = $customer->time;
        $this->date = $customer->date;
        $this->course = $customer->course;
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
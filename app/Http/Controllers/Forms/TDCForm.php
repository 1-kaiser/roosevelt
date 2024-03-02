<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;

class TDCForm extends Controller
{
    public Customer $customer;

    public $id;

    #[Rule('required', as: 'Name')]
    public $name;

    #[Rule('required', as: 'Email')]
    public $email;

    #[Rule('required', as: 'Branch')]
    public $branch;

    #[Rule('required', as: 'Date')]
    public $date;

    public $course;

    public function setCustomer(Customer $customer) {
        $this->customer = $customer;

        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->branch = $customer->branch;
        $this->date = $customer->date;
        $this->course = $customer->course;
    }

    public function store() {
        Customer::create($this->except(['customer']));
    }


}

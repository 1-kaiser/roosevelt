<?php

namespace App\Livewire\Customer;

use Illuminate\View\View;
use Livewire\Component;

class CustomerIndex extends Component
{
    public function render(): View
    {
        return view('customer.customer-index');
    }
}

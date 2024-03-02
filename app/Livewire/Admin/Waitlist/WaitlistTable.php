<?php

namespace App\Livewire\Admin\Waitlist;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class WaitlistTable extends Component
{
    use WithPagination;

    public $paginate = 5, $searchCustomer =  '';
        
    public function render()
    {
        return view('livewire.admin.waitlist.waitlist-table', [
            'data' => Customer::where('name', 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }


}

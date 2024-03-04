<?php

namespace App\Livewire\Admin\Waitlist;

use App\Livewire\Admin\AcceptedList\AcceptedListTable;
use App\Models\AcceptedList;
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

    public function accepted($name)
    {
        $sourceData = Customer::where('name', '=', $name)->get();
        $getData = Customer::where('name', '=', $name)->get()->toArray();
        
        foreach ($getData as $data) {
            AcceptedList::insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'branch' => $data['branch'],
                'date' => $data['date'],
                'course' => $data['course'],
                'vehicle' => $data['vehicle'],
                'driving_course' => $data['driving_course'],
            ]);
        }

        $this->dispatch('swal',
            title: 'Success',
            text: 'Customer successfully transferred',
            icon: 'success',
        );

        $this->dispatch('dispatch-customer-accepted')->to(AcceptedListTable::class);

        $sourceData->each->delete();  
    }

}

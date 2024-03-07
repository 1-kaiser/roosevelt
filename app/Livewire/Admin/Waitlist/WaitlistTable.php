<?php

namespace App\Livewire\Admin\Waitlist;

use App\Livewire\Admin\AcceptedList\AcceptedListTable;
use App\Livewire\Admin\AcceptedList\TdcAcceptedList;
use App\Models\AcceptedList;
use App\Models\Customer;
use App\Models\DeniedList;
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
                'transmission' => $data['transmission'],
            ]);
        }

        $this->dispatch('swal',
            title: 'Success',
            text: 'Customer successfully transferred',
            icon: 'success',
        );

        $this->dispatch('dispatch-customer-accepted')->to(TdcAcceptedList::class);

        $sourceData->each->delete();  
    }

    public function denied($name)
    {
        $sourceData = Customer::where('name', '=', $name)->get();
        $getData = Customer::where('name', '=', $name)->get()->toArray();
        
        foreach ($getData as $data) {
            DeniedList::insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'branch' => $data['branch'],
                'date' => $data['date'],
                'course' => $data['course'],
                'vehicle' => $data['vehicle'],
                'transmission' => $data['transmission'],
            ]);
        }

        $this->dispatch('swal',
            title: 'Success',
            text: 'Customer successfully denied',
            icon: 'success',
        );

        $this->dispatch('dispatch-customer-accepted')->to(WaitlistIndex::class);

        $sourceData->each->delete();  
    }

}

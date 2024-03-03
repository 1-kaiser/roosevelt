<?php

namespace App\Livewire\Admin\Waitlist;

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
            $inserted = AcceptedList::insert([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'branch' => $data['branch'],
                        'date' => $data['date'],
                        'course' => $data['course'],
                        'vehicle' => $data['vehicle'],
                        'driving_course' => $data['driving_course'],
            ]);

            if ($inserted) {
                session()->flash('success');
            }
        }

        $sourceData->each->delete();
        
    }


}

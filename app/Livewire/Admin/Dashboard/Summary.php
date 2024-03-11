<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\AcceptedList;
use App\Models\Customer;
use Livewire\Component;

class Summary extends Component
{
    public function render()
    {
        $tdcQuery = Customer::query();
        $tdcQuery->where('course', 'like', '%' . 'TDC' . '%');
        $tdcCount = $tdcQuery->count();

        $pdcQuery = Customer::query();
        $pdcQuery->where('course', 'like', '%' . 'PDC' . '%');
        $pdcCount = $pdcQuery->count();    

        $tdcAcceptedQuery = AcceptedList::query();
        $tdcAcceptedQuery->where('course', 'like', '%' . 'TDC' . '%');
        $tdcAcceptedCount = $tdcAcceptedQuery->count();

        $pdcAcceptedQuery = AcceptedList::query();
        $pdcAcceptedQuery->where('course', 'like', '%' . 'PDC' . '%');
        $pdcAcceptedCount = $pdcAcceptedQuery->count();

        return view('livewire.admin.dashboard.summary', [
            'tdcCount' => $tdcCount, 
            'pdcCount' => $pdcCount,
            'tdcAcceptedCount' => $tdcAcceptedCount,
            'pdcAcceptedCount' => $pdcAcceptedCount
        ]);
    }
}

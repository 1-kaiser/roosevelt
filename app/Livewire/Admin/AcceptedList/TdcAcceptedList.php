<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Models\AcceptedList;
use Livewire\Attributes\Title;
use Livewire\Component;

class TdcAcceptedList extends Component
{
    public $paginate = 5, $searchCustomer = '';

    #[Title('TDC')]
    public function render()
    {
        return view('livewire.admin.accepted-list.tdc-accepted-list', [
            'data' => AcceptedList::where('name', 'like', '%' . $this->searchCustomer . '%')
            ->where('course', 'like', '%'. 'TDC'. '%')
            ->paginate($this->paginate)
        ]);
    }
}

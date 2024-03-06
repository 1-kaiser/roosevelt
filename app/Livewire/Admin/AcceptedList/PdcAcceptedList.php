<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Models\AcceptedList;
use Livewire\Attributes\Title;
use Livewire\Component;

class PdcAcceptedList extends Component
{
    public $paginate = 5, $searchCustomer = '';

    #[Title('PDC')]
    public function render()
    {
        return view('livewire.admin.accepted-list.pdc-accepted-list', [
            'data' => AcceptedList::where('name', 'like', '%' . $this->searchCustomer . '%')
            ->where('course', 'like', '%'. 'PDC'. '%')
            ->paginate($this->paginate)
        ]);
    }
}

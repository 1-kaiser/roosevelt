<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Models\AcceptedList;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class TdcAcceptedList extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';
    public $modalTDCEdit = false;
    public $accepted;

    public function save($name)
    {
        $this->modalTDCEdit = true;
        $this->accepted = AcceptedList::where('name', '=', $name)->get();
    }

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

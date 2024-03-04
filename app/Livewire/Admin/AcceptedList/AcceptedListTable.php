<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Models\AcceptedList;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AcceptedListTable extends Component
{
    use WithPagination;

    public $paginate = 5, $searchCustomer = '';

    #[On('dispatch-customer-accepted')]
    public function render()
    {
        return view('livewire.admin.accepted-list.accepted-list-table', [
            'data' => AcceptedList::where('name', 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }
}

<?php

namespace App\Livewire\Admin\Denied;

use App\Models\DeniedList;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DeniedHistory extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';

    #[Title('Denied')]
    public function render()
    {
        return view('livewire.admin.denied.denied-history', [
            'data' => DeniedList::where('name', 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }
}

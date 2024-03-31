<?php

namespace App\Livewire\Admin\Denied;

use App\Models\DeniedList;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DeniedHistory extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';
    public $modelName;

    #[Title('Denied')]
    public function render(): View
    {
        return view('livewire.admin.denied.denied-history', [
            'data' => DeniedList::whereAny(['name', 'email', 'date', 'course'], 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }

    public function confirmDelete($name) 
    {
        $this->modelName = DeniedList::where('name', '=', $name)->get();
        $this->dispatch('confirm-delete');
    }

    public function delete() {
        $this->modelName->each->delete();
    }
}

<?php

namespace App\Livewire\Admin\AcceptedList;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class AcceptedListIndex extends Component
{
    #[Title('Accepted List')]
    public function render(): View
    {
        return view('livewire.admin.accepted-list.accepted-list-index');
    }
}

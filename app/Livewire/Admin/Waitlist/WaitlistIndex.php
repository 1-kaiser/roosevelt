<?php

namespace App\Livewire\Admin\Waitlist;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class WaitlistIndex extends Component
{
    #[Title('Waitlist')]
    public function render(): View
    {
        return view('livewire.admin.waitlist.waitlist-index');
    }
}

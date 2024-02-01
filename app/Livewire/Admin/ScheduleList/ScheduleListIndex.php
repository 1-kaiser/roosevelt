<?php

namespace App\Livewire\Admin\ScheduleList;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class ScheduleListIndex extends Component
{
    #[Title('Schedule List')]
    public function render(): View
    {
        return view('livewire.admin.schedule-list.schedule-list-index');
    }
}

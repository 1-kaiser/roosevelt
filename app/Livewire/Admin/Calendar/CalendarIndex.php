<?php

namespace App\Livewire\Admin\Calendar;

use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CalendarIndex extends Component
{
    #[On('dispatch-event-create')]
    public function render(): View
    {
        return view('livewire.admin.calendar.calendar-index');
    }
}

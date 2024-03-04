<?php

namespace App\Livewire\Admin\Calendar;

use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class CalendarIndex extends Component
{
    #[Title('Calendar')]
    #[On('dispatch-event-create')]
    public function render(): View
    {
        return view('livewire.admin.calendar.calendar-index');
    }
}

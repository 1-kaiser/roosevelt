<?php

namespace App\Livewire\Admin\Calendar;

use Illuminate\View\View;
use Livewire\Component;

class CalendarIndex extends Component
{
    public function render(): View
    {
        return view('livewire.admin.calendar.calendar-index');
    }
}

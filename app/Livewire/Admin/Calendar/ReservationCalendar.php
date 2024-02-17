<?php

namespace App\Livewire\Admin\Calendar;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;
use Omnia\LivewireCalendar\LivewireCalendar;

class ReservationCalendar extends LivewireCalendar
{
    #[On('dispatch-event-create')]
    public function events(): Collection
    {
        return Schedule::query()
            ->whereDate('date', '>=', $this->gridStartsAt)
            ->whereDate('date', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Schedule $schedule) {
                return [
                    'id' => $schedule->id,
                    'title' => $schedule->title,
                    'description' => $schedule->description,
                    'date' => $schedule->date,
                ];
            });
    }

    
}

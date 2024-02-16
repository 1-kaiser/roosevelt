<?php

namespace App\Livewire\Admin\Calendar;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;
use Omnia\LivewireCalendar\LivewireCalendar;

class ReservationCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return Schedule::query()
            ->whereDate('created_at', '>=', $this->gridStartsAt)
            ->whereDate('created_at', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Schedule $schedule) {
                return [
                    'id' => $schedule->id,
                    'title' => $schedule->title,
                    'description' => $schedule->description,
                    'date' => $schedule->created_at,
                ];
            });
    }
}

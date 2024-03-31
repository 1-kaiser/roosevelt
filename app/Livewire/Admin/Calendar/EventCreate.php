<?php

namespace App\Livewire\Admin\Calendar;

use App\Livewire\Forms\EventForm;
use App\Models\Event;
use Livewire\Attributes\On;
use Livewire\Component;

class EventCreate extends Component
{
    public EventForm $form;

    public $modalEventCreate = false;

    #[On('dispatch-event-create')]
    public function save() {
        $this->validate();
        Event::create($this->form->all());
        $this->modalEventCreate = false;

        $this->dispatch('swal',
            title: 'Success',
            text: 'Event created successfully',
            icon: 'success',
        );

        $this->dispatch('dispatch-event-create')->to(ReservationCalendar::class);
    }
}

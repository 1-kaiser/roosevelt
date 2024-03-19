<?php

namespace App\Livewire\Admin\Calendar;

use App\Livewire\Forms\EventForm;
use Livewire\Attributes\On;
use Livewire\Component;

class EventCreate extends Component
{
    public EventForm $form;

    public $modalEventCreate = false;

    #[On('dispatch-event-create')]
    public function save() {
        $this->validate();
        $this->form->store();

        $this->dispatch('swal',
            title: 'Success',
            text: 'Event created successfully',
            icon: 'success',
        );

        $mailData = [
            'title' => 'Event Creation',
            'body' => 'Event created successfully'
        ];

        $this->modalEventCreate = false;
        $this->dispatch('dispatch-event-create')->to(ReservationCalendar::class);
    }
}

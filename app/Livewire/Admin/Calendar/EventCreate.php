<?php

namespace App\Livewire\Admin\Calendar;

use App\Livewire\Forms\EventForm;
use App\Mail\EnrollCustomer;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EventCreate extends Component
{
    public EventForm $form;

    public $modalEventCreate = false;

    public function save() {
        $this->validate();
        $this->form->store();

        $this->dispatch('swal',
            title: 'Success',
            text: 'Event created successfully',
            icon: 'success',
        );

        $mailData = [
            'title' => 'Event Notification',
            'body' => 'Event created successfully'
        ];

        $this->modalEventCreate = false;
        Mail::to('emanpunay565@gmail.com.com')->send(new EnrollCustomer($mailData));
        // $this->dispatch('dispatch-event-create')->to(ReservationCalendar::class);
    }
}

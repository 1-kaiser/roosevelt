<?php

namespace App\Livewire\Forms;

use App\Models\Event;
use App\Models\Schedule;
use Livewire\Form;
use Livewire\Attributes\Rule;

class EventForm extends Form
{
    public Event $event;
    public $id;

    #[Rule('required', as: 'Title')]
    public $title;

    #[Rule('required', as: 'Description')]
    public $description;

    #[Rule('required', as: 'Date')]
    public $date;

    #[Rule('required', as: 'Time')]
    public $time;

    public function setEvent(Event $event) {
        $this->event = $event;

        $this->title = $event->title;
        $this->description = $event->description;
        $this->date = $event->date;
        $this->time = $event->time;
    }

    public function store() {
        event::create($this->except(['event']));
    }

    

}


?>
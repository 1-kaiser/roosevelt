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

    #[Rule('required', as: 'Status')]
    public $status;

    #[Rule('required', as: 'Date')]
    public $date;

    #[Rule('required', as: 'Branch')]
    public $branch;

    public function setEvent(Event $event) {
        $this->event = $event;

        $this->title = $event->title;
        $this->description = $event->description;
        $this->status = $event->status;
        $this->date = $event->date;
        $this->branch = $event->branch;
    }

    public function store() {
        Event::create($this->except(['event']));
    }

    

}


?>
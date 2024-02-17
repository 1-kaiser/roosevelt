<?php

namespace App\Livewire\Forms;

use App\Models\Schedule;
use Livewire\Form;
use Livewire\Attributes\Rule;

class EventForm extends Form
{
    public Schedule $schedule;
    public $id;

    #[Rule('required', as: 'Title')]
    public $title;

    #[Rule('required', as: 'Description')]
    public $description;

    #[Rule('required', as: 'Date')]
    public $date;

    #[Rule('required', as: 'Time')]
    public $time;

    public function setEvent(Schedule $schedule) {
        $this->schedule = $schedule;

        $this->title = $schedule->title;
        $this->description = $schedule->description;
        $this->date = $schedule->date;
        $this->time = $schedule->time;
    }

    public function store() {
        Schedule::create($this->except(['schedule']));
    }

    

}


?>
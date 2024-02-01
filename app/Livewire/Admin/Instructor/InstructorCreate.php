<?php

namespace App\Livewire\Admin\Instructor;

use App\Livewire\Forms\InstructorForm;
use Livewire\Component;

class InstructorCreate extends Component
{
    public InstructorForm $form;

    public $modalInstructorCreate = false;

    public function save() {
        $this->validate();
        $created = $this->form->store();

        is_null($created)
        ? $this->dispatch('notify', title: 'success', message: '')
        : $this->dispatch('notify', title: 'fail', message: '');
    }
    
    public function render()
    {
        return view('livewire.admin.instructor.instructor-create');
    }
}

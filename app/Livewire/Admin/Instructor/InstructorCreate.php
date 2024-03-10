<?php

namespace App\Livewire\Admin\Instructor;

use App\Livewire\Forms\InstructorForm;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class InstructorCreate extends Component
{
    use WithFileUploads;
    public InstructorForm $form;

    public $modalInstructorCreate = false;

    public function save() {
        $this->validate();
        $created = $this->form->store();

        ($created)
        ? $this->dispatch('swal')
        : $this->dispatch('notify', title: 'fail', message: '');
    }
    
    public function render()
    {
        return view('livewire.admin.instructor.instructor-create');
    }
}

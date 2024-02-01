<?php

namespace App\Livewire\Forms;

use App\Models\Instructor;
use Livewire\Form;
use Livewire\Attributes\Rule;

class InstructorForm extends Form 
{
    public Instructor $instructor;

    public $id;

    #[Rule('required|min:3', as: 'Full Name')]
    public $full_name;

    #[Rule('required', as: 'Gender')]
    public $gender;

    #[Rule('required', as: 'Age')]
    public $age;

    #[Rule('required|max:11', as: 'Contact')]
    public $contact;

    public function setInstructor(Instructor $instructor) {
        $this->instructor = $instructor;

        $this->full_name = $instructor->full_name;
        $this->gender = $instructor->gender;
        $this->age = $instructor->age;
        $this->contact = $instructor->contact;
    }

    public function store() {

        Instructor::create($this->except(['instructor']));

        $this->reset();
    }

    public function update() {
        $this->instructor->update($this->except(['instructor']));
    }

    public function delete() {
        $this->instructor->delete($this->except(['instructor']));
    }

}




?>
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

}




?>
<?php

namespace App\Livewire\Forms;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class InstructorForm extends Form 
{
    use WithFileUploads;
    public Instructor $instructor;

    public $id;

    public $path = 'img';

    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048', as: 'Image')]
    public $pic;

    #[Rule('required|min:3', as: 'First Name')]
    public $f_name;

    #[Rule('required|min:3', as: 'Last Name')]
    public $l_name;

    #[Rule('required|min:3', as: 'Email')]
    public $email;

    #[Rule('required|max:11', as: 'Contact')]
    public $contact;

    #[Rule('required', as: 'Gender')]
    public $gender;

    #[Rule('required', as: 'Age')]
    public $age;

    public function setInstructor(Instructor $instructor) {
        $this->instructor = $instructor;

        $this->pic = $instructor->pic;
        $this->f_name = $instructor->f_name;
        $this->l_name = $instructor->l_name;
        $this->email = $instructor->email;
        $this->contact = $instructor->contact;
        $this->gender = $instructor->gender;
        $this->age = $instructor->age;
    }

    public function store() {
        Storage::disk('public')->put($this->path, $this->pic);
        Instructor::create(
            ['pic' => $this->pic->store()],
            $this->except(['instructor'])
        );
    }

    // public function update() {
    //     $this->instructor->update($this->except(['instructor']));
    // }

    // public function delete() {
    //     $this->instructor->delete($this->except(['instructor']));
    // }

}




?>
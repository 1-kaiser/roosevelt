<?php

namespace App\Livewire\Admin\Instructor;

use App\Livewire\Forms\InstructorForm;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

use function Pest\Laravel\put;

class InstructorCreate extends Component
{
    use WithFileUploads;
    // public InstructorForm $form;

    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048', as: 'Image')]
    public $pic;

    #[Rule('required|min:3', as: 'First Name')]
    public $f_name;

    #[Rule('required|min:3', as: 'Last Name')]
    public $l_name;

    #[Rule('required|min:3', as: 'Email')]
    public $email;

    #[Rule('required|min:11|max:11', as: 'Contact')]
    public $contact;

    #[Rule('required', as: 'Gender')]
    public $gender;

    #[Rule('required', as: 'Age')]
    public $age;

    public $modalInstructorCreate = false;

    #[On('dispatch-instructor-create')]
    public function save() {
        $this->validate();
        Instructor::create([
            'pic' => $this->pic->store('img', 'public'),
            'f_name' => $this->f_name,
            'l_name' => $this->l_name,
            'email' => $this->email,
            'contact' => $this->contact,
            'gender' => $this->gender,
            'age' => $this->age
        ]);

        $this->dispatch('swal');
        $this->dispatch('dispatch-instructor-create')->to(InstructorIndex::class);
        $this->modalInstructorCreate = false;
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.admin.instructor.instructor-create');
    }
}

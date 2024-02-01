<?php

namespace App\Livewire\Admin\Instructor;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class InstructorIndex extends Component
{
    #[Title('Instructor')]
    public function render(): View
    {
        return view('livewire.admin.instructor.instructor-index');
    }
}

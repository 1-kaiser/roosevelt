<?php

namespace App\Livewire\Admin\Instructor;

use App\Models\Instructor;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class InstructorIndex extends Component
{
    use WithPagination;

    public $paginate = 5, $searchCustomer =  '';

    #[Title('Instructor')]
    #[On('dispatch-instructor-create')]
    public function render(): View
    {
        return view('livewire.admin.instructor.instructor-index', [
            'data' => Instructor::where('f_name', 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }
}

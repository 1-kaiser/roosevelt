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
    public $modalView = false;
    public $viewData;

    #[Title('Instructor')]
    #[On('dispatch-instructor-create')]
    public function render(): View
    {
        return view('livewire.admin.instructor.instructor-index', [
            'data' => Instructor::whereAny(['f_name', 'l_name', 'email', 'contact', 'gender', 'age'], 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }

    public function viewInstructor($f_name) {
        $this->modalView = true;
        $this->viewData = Instructor::where('f_name', '=', $f_name)->get();
    }
}

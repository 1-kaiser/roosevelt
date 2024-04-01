<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Mail\TDCAcceptedMail;
use App\Models\AcceptedList;
use App\Models\Instructor;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class TdcAcceptedList extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';
    public $modalTDCEdit = false;
    public $reserve = false;
    public $accepted, $instructor;

    public function edit($name)
    {
        $this->modalTDCEdit = true;
        $this->accepted = AcceptedList::where('name', '=', $name)->get();
        $this->instructor = Instructor::all();

        foreach ($this->accepted as $row) {
        
            $mailData = [
                'pic' => $row['pic'],
                'name' => $row['name'],
                'email' => $row['email'],
                'contact' => $row['contact'],
                'date' => $row['date'],
                'course' => $row['course'],
                'instructor' => $row['instructor'],
                'transmission' => $row['transmission'],
            ];
        }

    }

    public function save($name) {

        $this->accepted = AcceptedList::where('name', '=', $name)->get();
        $this->instructor = Instructor::all();

        foreach ($this->accepted as $accepted) {
        
            $mailData = [
                'pic' => $accepted['pic'],
                'name' => $accepted['name'],
                'email' => $accepted['email'],
                'contact' => $accepted['contact'],
                'date' => $accepted['date'],
                'course' => $accepted['course'],
                'instructor' => $accepted['instructor'],
                'transmission' => $accepted['transmission'],
            ];  
        }

        Mail::to($mailData['email'])->send(new TDCAcceptedMail($mailData));
        $this->dispatch('swal');
        $this->modalTDCEdit = true;
    }

    #[Title('TDC')]
    public function render(): View
    {
        return view('livewire.admin.accepted-list.tdc-accepted-list', [
            'data' => AcceptedList::whereAny(['name', 'email', 'date'], 'like', '%' . $this->searchCustomer . '%')
            ->where('course', 'like', '%'. 'TDC'. '%')
            ->paginate($this->paginate)
        ]);
    }
}

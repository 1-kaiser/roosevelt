<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Exports\TDCAcceptedExportPDF;
use App\Exports\TDCAcceptedExportXLSX;
use App\Mail\TDCAcceptedMail;
use App\Models\AcceptedList;
use App\Models\Instructor;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class TdcAcceptedList extends Component
{
    use WithPagination, WithFileUploads;
    public $paginate = 5, $searchCustomer = '';
    public $modalTDCEdit = false;
    public $reserve = false;
    public $accepted, $instructorList, $instructor;

    public function edit($name)
    {
        $this->modalTDCEdit = true;
        $this->accepted = AcceptedList::where('name', '=', $name)->get();
        $this->instructorList = Instructor::all();
    }

    public function save($name = null) {

        AcceptedList::where('name', '=', $name)->update(['instructor' => $this->instructor]);

        $this->accepted = AcceptedList::where('name', '=', $name)->get();

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
                'instructor' => $this->instructor
            ];  

            Mail::to($mailData['email'])->send(new TDCAcceptedMail($mailData));
            $this->dispatch('swal');
        }
    }

    public function exportXLSX() 
    {
        return Excel::download(new TDCAcceptedExportXLSX, 'solid_tdc_accepted.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function exportPDF()
    {
        return Excel::download(new TDCAcceptedExportPDF, 'solid_tdc_accepted.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
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

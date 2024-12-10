<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Exports\TDCAcceptedExportPDF;
use App\Exports\TDCAcceptedExportXLSX;
use App\Jobs\SendEmailTDCAcceptedMailJob;
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

    public function edit($first_name)
    {
        $this->modalTDCEdit = true;
        $this->accepted = AcceptedList::where('first_name', '=', $first_name)->get();
        $this->instructorList = Instructor::all();
    }

    public function save($first_name = null) {

        AcceptedList::where('first_name', '=', $first_name)->update([
            'instructor' => $this->instructor,
            'status' => 'reserved',
        ]);

        $this->accepted = AcceptedList::where('first_name', '=', $first_name)->get();

        foreach ($this->accepted as $accepted) {
            $mailData = [
                'email' => $accepted['email'],
                'date' => $accepted['date'],
                'instructor' => $this->instructor
            ];  

            SendEmailTDCAcceptedMailJob::dispatch($mailData);
            // Mail::to($mailData['email'])->queue(new TDCAcceptedMail($mailData));
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
        $data = AcceptedList::whereAny(['first_name', 'last_name', 'email', 'date'], 'like', '%' . $this->searchCustomer . '%')
        ->where('course', 'like', '%'. 'TDC'. '%')
        ->paginate($this->paginate);

        return view('livewire.admin.accepted-list.tdc-accepted-list', ['data' => $data]);
    }
}

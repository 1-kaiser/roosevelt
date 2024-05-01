<?php

namespace App\Livewire\Admin\AcceptedList;

use App\Exports\PDCAcceptedExportPDF;
use App\Exports\PDCAcceptedExportXLSX;
use App\Models\AcceptedList;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class PdcAcceptedList extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';

    #[Title('PDC')]
    public function render(): View
    {
        return view('livewire.admin.accepted-list.pdc-accepted-list', [
            'data' => AcceptedList::whereAny(['first_name', 'last_name', 'email', 'date', 'transmission'], 'like', '%' . $this->searchCustomer . '%')
            ->where('course', 'like', '%'. 'PDC'. '%')
            ->paginate($this->paginate)
        ]);
    }

    public function exportXLSX() 
    {
        return Excel::download(new PDCAcceptedExportXLSX, 'solid_pdc_accepted.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function exportPDF()
    {
        return Excel::download(new PDCAcceptedExportPDF, 'solid_pdc_accepted.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}

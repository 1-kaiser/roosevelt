<?php

namespace App\Livewire\Admin\Waitlist;

use App\Exports\WaitlistExportPDF;
use App\Exports\WaitlistExportXLSX;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class WaitlistIndex extends Component
{

    #[Title('Waitlist')]
    public function render(): View
    {
        return view('livewire.admin.waitlist.waitlist-index');
    }

    public function exportXLSX() 
    {
        return Excel::download(new WaitlistExportXLSX, 'solid_waitlist.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function exportPDF()
    {
        return Excel::download(new WaitlistExportPDF, 'solid_waitlist.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}

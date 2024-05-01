<?php

namespace App\Livewire\Admin\Denied;

use App\Exports\DeniedExportPDF;
use App\Exports\DeniedExportXLSX;
use App\Models\DeniedList;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class DeniedHistory extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';
    public $modelName;

    #[Title('Denied')]
    public function render(): View
    {
        return view('livewire.admin.denied.denied-history', [
            'data' => DeniedList::whereAny(['first_name', 'last_name', 'email', 'date', 'course'], 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }

    public function confirmDelete($first_name) 
    {
        $this->modelName = DeniedList::where('first_name', '=', $first_name)->get();
        $this->dispatch('confirm-delete');
    }

    public function delete() {
        $this->modelName->each->delete();
    }

    public function exportXLSX() 
    {
        return Excel::download(new DeniedExportXLSX, 'solid_denied.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function exportPDF()
    {
        return Excel::download(new DeniedExportPDF, 'solid_denied.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}

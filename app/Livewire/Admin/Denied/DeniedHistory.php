<?php

namespace App\Livewire\Admin\Denied;

use App\Exports\DeniedExportPDF;
use App\Exports\DeniedExportXLSX;
use App\Models\Customer;
use App\Models\DeniedList;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Facades\Excel;

class DeniedHistory extends Component
{
    use WithPagination;
    public $paginate = 5, $searchCustomer = '';
    public $modelName, $modelNameArray;

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

    public function confirmRestore($first_name)
    {
        $this->modelName = DeniedList::where('first_name', '=', $first_name)->get();
        $this->modelNameArray = DeniedList::where('first_name', '=', $first_name)->get()->toArray();
        $this->dispatch('confirm-restore');
    }

    public function restore()
    {
        foreach ($this->modelNameArray as $data) {
            
            Customer::insert([
                'pic' => $data['pic'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'contact' => $data['contact'],
                'age' => $data['age'],
                'birthday' => $data['birthday'],
                'date' => $data['date'],
                'course' => $data['course'],
                'valid_id' => $data['valid_id'],
                'paid_attachment' => $data['paid_attachment'],
                'transmission' => $data['transmission'],
            ]);
        }

        $this->modelName->each->delete();

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

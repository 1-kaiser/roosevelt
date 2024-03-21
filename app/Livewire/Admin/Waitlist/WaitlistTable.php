<?php

namespace App\Livewire\Admin\Waitlist;

use App\Livewire\Admin\AcceptedList\PdcAcceptedList;
use App\Livewire\Admin\AcceptedList\TdcAcceptedList;
use App\Livewire\Admin\Denied\DeniedHistory;
use App\Mail\PDCAcceptedMail;
use App\Mail\TDCAcceptedMail;
use App\Models\AcceptedList;
use App\Models\Customer;
use App\Models\DeniedList;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class WaitlistTable extends Component
{
    use WithPagination;

    public $paginate = 5, $searchCustomer =  '';
    public $modalView = false;
    public $viewData;
        
    public function render()
    {
        return view('livewire.admin.waitlist.waitlist-table', [
            'data' => Customer::whereAny(['name', 'email', 'date', 'course'], 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }

    public function viewCustomer($name) {
        $this->modalView = true;
        $this->viewData = Customer::where('name', '=', $name)->get();
    }

    public function accepted($name)
    {
        $sourceData = Customer::where('name', '=', $name)->get();
        $getData = Customer::where('name', '=', $name)->get()->toArray();
        
        foreach ($getData as $data) {
            AcceptedList::insert([
                'pic' => $data['pic'],
                'name' => $data['name'],
                'email' => $data['email'],
                'contact' => $data['contact'],
                'date' => $data['date'],
                'course' => $data['course'],
                'paid_attachment' => $data['paid_attachment'],
                'transmission' => $data['transmission'],
            ]);

            if ($data['course'] === 'TDC') {
                Mail::to($data['email'])->send(new TDCAcceptedMail($data));
            }

            if ($data['course'] === 'PDC') {
                Mail::to($data['email'])->send(new PDCAcceptedMail($data));
            }
        }

        $this->dispatch('swal');

        $this->dispatch('dispatch-customer-accepted')->to(TdcAcceptedList::class);
        $this->dispatch('dispatch-customer-accepted')->to(PdcAcceptedList::class);

        $sourceData->each->delete();  
    }

    public function denied($name)
    {
        $sourceData = Customer::where('name', '=', $name)->get();
        $getData = Customer::where('name', '=', $name)->get()->toArray();
        
        foreach ($getData as $data) {
            DeniedList::insert([
                'pic' => $data['pic'],
                'name' => $data['name'],
                'email' => $data['email'],
                'contact' => $data['contact'],
                'date' => $data['date'],
                'course' => $data['course'],
                'paid_attachment' => $data['paid_attachment'],
                'transmission' => $data['transmission'],
            ]);
        }

        $this->dispatch('swal',
            title: 'Success',
            text: 'Customer successfully denied',
            icon: 'success',
        );

        $this->dispatch('dispatch-customer-accepted')->to(DeniedHistory::class);

        $sourceData->each->delete();  
    }

}

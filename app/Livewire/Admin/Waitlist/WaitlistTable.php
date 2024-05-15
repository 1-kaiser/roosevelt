<?php
namespace App\Livewire\Admin\Waitlist;

use App\Livewire\Admin\AcceptedList\PdcAcceptedList;
use App\Livewire\Admin\AcceptedList\TdcAcceptedList;
use App\Livewire\Admin\Denied\DeniedHistory;
use App\Mail\PDCAcceptedMail;
use App\Models\AcceptedList;
use App\Models\Customer;
use App\Models\DeniedList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class WaitlistTable extends Component
{
    use WithPagination;

    public $paginate = 5, $searchCustomer =  '';
    public $modalView = false;
    public $modalReasonForDenial = false;
    public $viewData, $viewDataDeny;
    public $deny_reason;
        
    public function render()
    {
        return view('livewire.admin.waitlist.waitlist-table', [
            'data' => Customer::whereAny(['first_name', 'last_name', 'email', 'date', 'course'], 'like', '%' . $this->searchCustomer . '%')
            ->paginate($this->paginate)
        ]);
    }

    public function viewCustomer($first_name) {
        $this->modalView = true;
        $this->viewData = Customer::where('first_name', '=', $first_name)->get();
    }

    public function accepted($first_name) {
        $sourceData = Customer::where('first_name', '=', $first_name)->get();
        $getData = Customer::where('first_name', '=', $first_name)->get()->toArray();
        
        foreach ($getData as $data) {
            AcceptedList::insert([
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

            ($data['course'] === 'PDC') ? Mail::to($data['email'])->send(new PDCAcceptedMail($data))
            : ''; 
        }

        $this->dispatch('swal');
        $this->dispatch('dispatch-customer-accepted')->to(TdcAcceptedList::class);
        $this->dispatch('dispatch-customer-accepted')->to(PdcAcceptedList::class);

        $sourceData->each->delete();  
    }

    public function denied($first_name = null) {
        $sourceData = Customer::where('first_name', '=', $first_name)->get();
        $getData = Customer::where('first_name', '=', $first_name)->get()->toArray();
        
        foreach ($getData as $data) {
            DeniedList::insert([
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
                'deny_reason' => $this->deny_reason
            ]);
        }

        DeniedList::where('first_name', '=', $first_name)->update(['deny_reason' => $this->deny_reason]);

        $this->dispatch('swal',
            title: 'Success',
            text: 'Customer successfully denied',
            icon: 'success',
        );

        $this->dispatch('dispatch-customer-accepted')->to(DeniedHistory::class);

        $sourceData->each->delete();  
        $this->modalReasonForDenial = false;
    }

    public function reasonForDenial($first_name)
    {
        $this->modalReasonForDenial = true;
        $this->viewDataDeny = Customer::where('first_name', '=', $first_name)->get();
    }
}

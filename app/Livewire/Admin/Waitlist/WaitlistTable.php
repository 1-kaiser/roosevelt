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

    public $searchCustomer =  '';
    public $modalView = false;
    public $modalReasonForDenial = false;
    public $viewData, $viewDataDeny;
    public $deny_reason;
        
    public function render()
    {
        return view('livewire.admin.waitlist.waitlist-table', [
            'data' => Customer::latest()->whereAny(['first_name', 'last_name', 'email', 'date', 'course'], 'like', '%' . $this->searchCustomer . '%')
            ->paginate(5)
        ]);
    }

    public function viewCustomer($first_name)
    {
        // Get the customer data where the first_name is equal to the
        // parameter passed in.
        $this->viewData = Customer::where('first_name', '=', $first_name)
            ->get();

        // Set the $modalView property to true so that the customer's
        // information is shown in the modal.
        $this->modalView = true;
    }



    public function accepted($first_name) {
        // get the customer data
        $data = Customer::where('first_name', '=', $first_name)->get()->toArray();

        // map the customer data to a new array
        $acceptedData = array_map(function ($item) {
            return [
                'pic' => $item['pic'],
                'first_name' => $item['first_name'],
                'last_name' => $item['last_name'],
                'email' => $item['email'],
                'contact' => $item['contact'],
                'age' => $item['age'],
                'birthday' => $item['birthday'],
                'date' => $item['date'],
                'course' => $item['course'],
                'valid_id' => $item['valid_id'],
                'paid_attachment' => $item['paid_attachment'],
                'transmission' => $item['transmission'],
            ];
        }, $data);

        // insert the mapped data into the accepted_lists table
        AcceptedList::insert($acceptedData);

        // send an email to the customer if the course is PDC
        foreach ($data as $item) {
            if ($item['course'] === 'PDC') {
                Mail::to($item['email'])->queue(new PDCAcceptedMail($item));
            }
        }

        // dispatch swal and dispatch-customer-accepted events
        $this->dispatch('swal');
        $this->dispatch('dispatch-customer-accepted')->to(TdcAcceptedList::class);
        $this->dispatch('dispatch-customer-accepted')->to(PdcAcceptedList::class);

        // delete the customer data from the customer table
        Customer::where('first_name', '=', $first_name)->delete();
    }

    public function denied($first_name = null) {
        
        // Get the customer data where the first name matches the provided.
        // The data is limited to the fields we need.
        $data = Customer::where('first_name', '=', $first_name)
            ->get(['pic', 'first_name', 'last_name', 'email', 'contact', 'age', 'birthday', 'date', 'course', 'valid_id', 'paid_attachment', 'transmission']);

        // Add the denial reason to each item.
        $data->each(function ($item) {
            $item->deny_reason = $this->deny_reason;
        });

        // Insert the data into the denied_lists table.
        DeniedList::insert($data->toArray());

        // Dispatch a swal event to notify the admin that the customer was denied.
        $this->dispatch('swal', [
            'title' => 'Success',
            'text' => 'Customer successfully denied',
            'icon' => 'success',
        ]);

        // Dispatch a dispatch-customer-accepted event to the denied_list component.
        $this->dispatch('dispatch-customer-accepted')->to(DeniedHistory::class);

        // Delete the customer from the customer table.
        Customer::where('first_name', '=', $first_name)->delete();

        // Hide the denial modal.
        $this->modalReasonForDenial = false;
    }


    public function reasonForDenial($first_name)
    {
        $this->modalReasonForDenial = true;
        $this->viewDataDeny = Customer::where('first_name', '=', $first_name)->get();
    }
}

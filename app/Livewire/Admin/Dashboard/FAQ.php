<?php

namespace App\Livewire\Admin\Dashboard;

use App\Mail\AdminReply;
use App\Models\FAQ as ModelsFAQ;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Component;

class FAQ extends Component
{
    public $paginate = 5, $searchCustomer =  '';
    public $modalViewInquiry = false;
    public $viewData, $admin_reply;

    public function render(): View
    {
        return view('livewire.admin.dashboard.f-a-q', [
            'inquiries' => ModelsFAQ::whereAny(['name', 'age', 'email', 'contact', 'message'], 'like', '%' .$this->searchCustomer. '%')->paginate($this->paginate)
        ]);
    }

    public function viewInquiry($name) 
    {
        $this->modalViewInquiry = true;
        $this->viewData = ModelsFAQ::where('name', '=', $name)->get();
    }

    public function save($name = null)
    {
        ModelsFAQ::where('name', '=', $name)->update(['admin_reply' => $this->admin_reply]);
        
        $this->viewData = ModelsFAQ::where('name', '=', $name)->get()->toArray();

        foreach ($this->viewData as $data) {
            
            $mailData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'admin_reply' => $this->admin_reply,
            ];

            Mail::to($data['email'])->send(new AdminReply($mailData));
        }

        $this->dispatch('swal');
        $this->modalViewInquiry = false;
        
    }
}

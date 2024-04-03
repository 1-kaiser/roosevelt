<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\FAQ as ModelsFAQ;
use Illuminate\View\View;
use Livewire\Component;

class FAQ extends Component
{
    public $paginate = 5, $searchCustomer =  '';

    public function render(): View
    {
        return view('livewire.admin.dashboard.f-a-q', [
            'inquiries' => ModelsFAQ::whereAny(['name', 'age', 'email', 'contact', 'message'], 'like', '%' .$this->searchCustomer. '%')->paginate($this->paginate)
        ]);
    }

    public function answer() 
    {
        
    }
}

<?php

namespace App\Livewire\Admin\Waitlist;

use App\Livewire\Forms\CustomerForm;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class WaitlistIndex extends Component
{
    public CustomerForm $form;

    #[Title('Waitlist')]
    public function render(): View
    {
        return view('livewire.admin.waitlist.waitlist-index');
    }

    public function save() {
        $this->validate();
        $this->form->store();

        $this->dispatch('swal',
            title: 'Success',
            text: 'Your application for enrollment has been processing now, please wait for the email confirmation',
            icon: 'success',
        );
    }
}
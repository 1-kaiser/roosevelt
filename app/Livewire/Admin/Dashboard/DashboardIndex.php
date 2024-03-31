<?php

namespace App\Livewire\Admin\Dashboard;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardIndex extends Component
{
    #[Title('Dashboard')]
    public function render(): View
    {
        return view('livewire.admin.dashboard.dashboard-index');
    }
}

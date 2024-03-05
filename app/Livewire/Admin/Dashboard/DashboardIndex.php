<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardIndex extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard-index');
    }
}

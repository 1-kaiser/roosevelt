<?php

namespace App\Livewire\Admin\Dashboard;

use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class PieChart extends Component
{
    public function render(PieChartModel $pieChartModel)
    {
        $pieChartModel = 
        (new PieChartModel())
        ->setTitle('Expenses by Type')
        ->addSlice('Food', 900, '#f6ad55')
        ->addSlice('Shopping', 200, '#fc8181')
        ->addSlice('Travel', 300, '#90cdf4');

        return view('livewire.admin.dashboard.pie-chart', ['pieChartModel' => $pieChartModel]);
    }
}

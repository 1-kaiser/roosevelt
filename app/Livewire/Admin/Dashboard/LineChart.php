<?php

namespace App\Livewire\Admin\Dashboard;

use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Livewire\Component;

class LineChart extends Component
{
    public function render(AreaChartModel $lineChartModel)
    {
        $lineChartModel = 
        (new AreaChartModel())
        ->addPoint('TDC', 900, '#f6ad55')
        ->addPoint('PDC', 200, '#fc8181');

        return view('livewire.admin.dashboard.line-chart', ['lineChartModel' => $lineChartModel]);
    }
}

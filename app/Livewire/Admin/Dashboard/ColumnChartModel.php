<?php

namespace App\Livewire\Admin\Dashboard;

use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel as ModelsColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Livewire\Component;

class ColumnChartModel extends Component
{
    public function render(TreeMapChartModel $columnChartModel)
    {
        $columnChartModel = 
        (new TreeMapChartModel())
        ->setTitle('Expenses by Type')
        ->addBlock('Food', 900, '#f6ad55')
        ->addBlock('Shopping', 200, '#fc8181')
        ->addBlock('Travel', 300, '#90cdf4');

        return view('livewire.admin.dashboard.column-chart-model', ['columnChartModel' => $columnChartModel]);
    }
}

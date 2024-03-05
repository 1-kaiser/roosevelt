<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Customer;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Livewire\Component;

class ColumnChart extends Component
{
    public function render(ColumnChartModel $columnChartModel)
    {
        $tdcQuery = Customer::query();
        $tdcQuery->where('course', 'like', '%' . 'TDC' . '%');
        $tdcCount = $tdcQuery->count();
        $tdcTimesHundred = $tdcCount * 100;

        $pdcQuery = Customer::query();
        $pdcQuery->where('course', 'like', '%' . 'PDC' . '%');
        $pdcCount = $pdcQuery->count();
        $pdcTimesHundred = $pdcCount * 100;

        $columnChartModel = 
        (new ColumnChartModel())
        ->addColumn('TDC', $tdcTimesHundred, '#f6ad55')
        ->addColumn('PDC', $pdcTimesHundred, '#fc8181');

        return view('livewire.admin.dashboard.column-chart', ['columnChartModel' => $columnChartModel]);
    }
}

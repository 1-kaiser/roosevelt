<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\AcceptedList;
use App\Models\Customer;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Livewire\Component;

class ColumnChart extends Component
{
    public function render(ColumnChartModel $columnChartModel)
    {
        // WAITLIST
        $tdcQuery = Customer::query();
        $tdcQuery->where('course', 'like', '%' . 'TDC' . '%');
        $tdcCount = $tdcQuery->count();
        $tdcTimesHundred = $tdcCount * 100;

        $pdcQuery = Customer::query();
        $pdcQuery->where('course', 'like', '%' . 'PDC' . '%');
        $pdcCount = $pdcQuery->count();
        $pdcTimesHundred = $pdcCount * 100;

        // ACCEPTED LIST
        $tdcAcceptedQuery = AcceptedList::query();
        $tdcAcceptedQuery->where('course', 'like', '%' . 'TDC' . '%');
        $tdcAcceptedCount = $tdcAcceptedQuery->count();
        $tdcAcceptedTimesHundred = $tdcAcceptedCount * 100;

        $pdcAcceptedQuery = AcceptedList::query();
        $pdcAcceptedQuery->where('course', 'like', '%' . 'PDC' . '%');
        $pdcAcceptedCount = $pdcAcceptedQuery->count();
        $pdcAcceptedTimesHundred = $pdcAcceptedCount * 100;

        $columnChartModel = 
        (new ColumnChartModel())
        ->addColumn('TDC Request', $tdcTimesHundred, '#f6ad55')
        ->addColumn('PDC Request', $pdcTimesHundred, '#fc8181')
        ->addColumn('TDC Accepted', $tdcAcceptedTimesHundred, '#29bee3')
        ->addColumn('PDC Accepted', $pdcAcceptedTimesHundred, '#c628ed');

        return view('livewire.admin.dashboard.column-chart', ['columnChartModel' => $columnChartModel]);
    }
}

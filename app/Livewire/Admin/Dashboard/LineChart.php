<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\AcceptedList;
use App\Models\Customer;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Livewire\Component;

class LineChart extends Component
{
    public function render(AreaChartModel $lineChartModel)
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

        $lineChartModel = 
        (new AreaChartModel())
        ->addPoint('TDC Request', $tdcTimesHundred)
        ->addPoint('PDC Request', $pdcTimesHundred)
        ->addPoint('TDC Accepted', $tdcAcceptedTimesHundred)
        ->addPoint('PDC Accepted', $pdcAcceptedTimesHundred);

        return view('livewire.admin.dashboard.line-chart', ['lineChartModel' => $lineChartModel]);
    }
}

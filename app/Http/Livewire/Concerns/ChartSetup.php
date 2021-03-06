<?php

declare(strict_types=1);

namespace App\Http\Livewire\Concerns;

use Lean\LivewireAccess\WithImplicitAccess;
use Lean\LivewireAccess\BlockFrontendAccess;
use Asantibanez\LivewireCharts\Models\BaseChartModel;

trait ChartSetup
{
    use WithImplicitAccess;

    #[BlockFrontendAccess]
    public int $user_id;

    public bool $readyToLoad = false;

    protected ?BaseChartModel $chart_model = null;

    public function loadChart()
    {
        $this->setChartModel();
        $this->readyToLoad = true;
    }

    abstract protected function setChartModel();

    abstract protected function populateChart();
}

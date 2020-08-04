<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\Stats;

class SalesDashboard extends Component
{

    public $newOrders;

    public $salesAmount;

    public $satisfactions;

    protected $listeners = ['fetchStats'];

    public function mount()
    {
        return $this->assignStats();
    }

    public function fetchStats()
    {
        return $this->assignStats();
    }


    public function render()
    {
        return view('livewire.sales-dashboard');
    }

    private function assignStats()
    {
        $this->newOrders = Stats::newOrders();
        $this->salesAmount = Stats::salesAmount();
        $this->satisfactions = Stats::satisfactions();

    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\Stats;

class SalesDashboard extends Component
{

    public function render()
    {
        return view('livewire.sales-dashboard', [
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfactions' => Stats::satisfactions()
        ]);
    }
}

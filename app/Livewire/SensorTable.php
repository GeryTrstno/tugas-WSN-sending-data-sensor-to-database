<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sensor;

class SensorTable extends Component
{
    public $sensors = [];

    public function LoadData()
    {
        $this->sensors = Sensor::all()->sortBy('created_at');
    }

    public function render()
    {
        return view('livewire.sensor-table');
    }
}

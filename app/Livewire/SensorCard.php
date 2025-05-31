<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sensor;

class SensorCard extends Component
{
    public $latest;

    public function LoadSingleData() {
        $this->latest = Sensor::latest()->first();
    }

    public function render()
    {
        return view('livewire.sensor-card');
    }
}

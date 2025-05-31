<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sensor;

class SensorStatistic extends Component
{
    public $MinDistance;
    public $MaxDistance;
    public $AvgDistance;
    public $Total;

    public function LoadVariables() {

        $sensors = Sensor::all();

        if ($sensors->isEmpty()) {
            // Jika tidak ada data, atur Min dan Max ke 0
            $this->MinDistance = 0;
            $this->MaxDistance = 0;
            $this->AvgDistance = 0;
            $this->Total = 0;
        } else {
            // Jika ada data, lakukan perhitungan statistik
            $this->MinDistance = $sensors->min('distance');
            $this->MaxDistance = $sensors->where('distance', '<=', 400)->max('distance'); // Membatasi maksimum ke 400 cm
            $this->AvgDistance = round($sensors->avg('distance'), 2); // Pembulatan rata-rata dengan dua angka desimal
            $this->Total = $sensors->count();
        }
    }


    public function render()
    {
        return view('livewire.sensor-statistic');
    }
}


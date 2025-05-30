<?php

namespace App\Livewire;

use Livewire\Component;

class SensorDataComponent extends Component
{
    public $distance;
    public $status;

    // Menyatakan bahwa Livewire akan mendengarkan event 'sensorUpdated'
    protected $listeners = ['sensor-updated' => 'updateSensor'];

    public function mount()
    {
        // Inisialisasi nilai pertama kali
        $this->distance = 0;
        $this->status = 'Menunggu...';
    }

    // Mengupdate data dari event
    public function updateSensor($distance, $status)
    {
        $this->distance = $distance;
        $this->status = $status;
    }

    public function render()
    {
        // Mengembalikan view yang akan ditampilkan
        return view('livewire.sensor-data-component');
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SensorDataUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $distance;
    public $status;

    // Constructor untuk mengirim data
    public function __construct($distance, $status)
    {
        $this->distance = $distance;
        $this->status = $status;
    }

    // Channel yang digunakan untuk broadcasting
    public function broadcastOn()
    {
        return ['sensor-channel'];
    }

    // Nama event yang akan diterima oleh frontend
    public function broadcastAs()
    {
        return 'SensorDataUpdated';
    }
}

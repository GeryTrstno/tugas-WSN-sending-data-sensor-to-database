<div>
    <h2>Sensor Data</h2>
    <p>Distance: {{ $distance }} cm</p>
    <p>Status: {{ $status }}</p>
</div>

@push('scripts')
<script>
    // Mendengarkan event yang dipancarkan di Laravel Echo
    Echo.channel('sensor-channel')
        .listen('SensorDataUpdated', (event) => {
            @this.sensorUpdated(event.distance, event.status); // Memanggil metode di Livewire
        });
</script>
@endpush

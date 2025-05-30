window.Echo.channel('sensor-channel')
    .listen('SensorDataUpdated', (event) => {
        console.log(event); // Untuk melihat data yang diterima
        // Misalnya, tampilkan data sensor ke halaman
        document.getElementById('distance').innerText = `Distance: ${event.distance} cm`;
        document.getElementById('status').innerText = `Status: ${event.status}`;
    });

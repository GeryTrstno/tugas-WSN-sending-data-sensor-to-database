window.Echo.channel('sensor-channel')
    .listen('SensorDataUpdated', (event) => {
        console.log(event); // Cek data yang diterima di console
        // Perbarui elemen di frontend dengan data terbaru
        document.getElementById('distance').innerText = `Distance: ${event.distance} cm`;
        document.getElementById('status').innerText = `Status: ${event.status}`;
    });

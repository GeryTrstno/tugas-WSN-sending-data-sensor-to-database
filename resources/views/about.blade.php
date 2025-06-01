<x-layouts.app :title="__('About')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 text-black bg-white">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-center text-5xl font-extrabold">Tentang Tugas Proyek</h1>
            <p class="mt-4 text-lg text-gray-700">
                Proyek ini adalah implementasi dari sistem pengukuran jarak menggunakan sensor ultrasonik HC-SR04 yang terhubung dengan mikrokontroler ESP32. Data yang diukur akan dikirim ke server Laravel dan ditampilkan dalam bentuk dashboard yang responsif.
            </p>

            <h2 class="mt-4 text-2xl font-semibold mb-2">Teknologi Yang Digunakan</h2>
            <ul class="list-disc pl-5 mb-4">
                <li>Laravel 12</li>
                <li>Livewire</li>
                <li>Tailwind CSS</li>
                <li>ESP32 Microcontroller</li>
                <li>HC-SR04 Ultrasonic Sensor</li>
                <li>MySQL Database</li>
            </ul>

            <h2 class="text-2xl font-semibold mb-2">Fitur</h2>
            <ul class="list-disc pl-5 mb-4">
                <li>Monitoring data sensor secara real-time melalui dashboard.</li>
                <li>Penyimpanan otomatis data pengukuran ke database.</li>
                <li>Statistik pengukuran jarak seperti nilai minimum, maksimum, rata-rata, dan total data.</li>
                <li>Responsif dan dapat diakses dari berbagai perangkat.</li>
            </ul>

            <h2 class="text-2xl font-semibold mb-2">Cara Kerja</h2>
            <p class="mb-4">
                Sensor HC-SR04 mengukur jarak dengan mengirimkan gelombang ultrasonik dan mengukur waktu yang dibutuhkan untuk gelombang tersebut kembali. Data yang dihasilkan kemudian dikirim ke server Laravel melalui koneksi Wi-Fi yang dikelola oleh mikrokontroler ESP32. Server akan menyimpan data ini ke dalam database MySQL dan menampilkannya di dashboard menggunakan Livewire.
            </p>

            <h2 class="text-2xl font-semibold mb-2">Batas Maksimal Pengukuran</h2>
            <p class="text-lg text-gray-700">
                Sensor ini dapat mengukur jarak dengan batas maksimal 400 cm. Nilai yang lebih besar dari itu akan dianggap tidak valid. Selain itu, jarak yang diukur akan dikategorikan ke dalam tiga status berdasarkan rentang berikut:
            </p>
            <ul class="list-disc pl-5 mb-4">
                <li><strong>0 - 50 cm:</strong> Dekat</li>
                <li><strong>51 - 100 cm:</strong> Sedang</li>
                <li><strong>Lebih dari 100 cm:</strong> Jauh</li>
            </ul>

        </div>
    </div>
</x-layouts.app>

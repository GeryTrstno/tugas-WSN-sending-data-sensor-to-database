<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 text-black">
        <!-- Kartu Sensor & Statistik -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Kartu HC-SR04 Ultrasonic Sensor -->
            <div class="relative aspect-square overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
                <h1 class="sensor-icon text-5xl text-blue-500 mt-4">📏</h1>
                <div class="font-semibold flex justify-center text-2xl mt-2">HC-SR04 Ultrasonic Sensor</div>
                <div class="font-black text-9xl mt-4 flex justify-center" id="distanceValue">0</div>
                <div class="flex justify-center text-3xl text-gray-500">cm</div>
                <div class="flex justify-center mt-8 text-lg" id="statusIndicator">No Data</div>
            </div>

            <!-- Kartu Sensor Statistics -->
            <div class="relative aspect-square overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
                <div class="sensor-icon text-5xl text-blue-500">📊</div>
                <div class="font-semibold text-2xl text-center mt-2">Sensor Statistics</div>
                <div class="grid grid-cols-2 gap-6 mt-10">
                    <div class="flex flex-col items-center">
                        <div class="text-lg text-gray-600">Min Distance</div>
                        <div class="font-semibold text-3xl text-green-600" id="minDistance">10 cm</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-lg text-gray-600">Max Distance</div>
                        <div class="font-semibold text-3xl text-red-600" id="maxDistance">100 cm</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-lg text-gray-600">Average</div>
                        <div class="font-semibold text-3xl text-blue-600" id="avgDistance">55 cm</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-lg text-gray-600">Total Readings</div>
                        <div class="font-semibold text-3xl text-purple-600" id="totalReadings">2</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tabel Data Sensor -->
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-3xl font-semibold">Sensor Data Records</h2>
                <button class="bg-red-500 text-white py-2 px-4 rounded-md" onclick="clearData()">Clear All Data</button>
            </div>

            <!-- Tabel -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="min-w-full table-auto border-collapse">
                    <thead class="bg-gray-200 text-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold text-sm">No</th>
                            <th class="px-6 py-3 text-left font-semibold text-sm">Distance (cm)</th>
                            <th class="px-6 py-3 text-left font-semibold text-sm">Status</th>
                            <th class="px-6 py-3 text-left font-semibold text-sm">Timestamp</th>
                        </tr>
                    </thead>
                    <tbody id="dataTableBody">
                        <!-- Data Table Entries -->
                        @for ($i = 0; $i < 2; $i++)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm">{{ ($i) + 1 }}</td>
                                <td class="px-6 py-4 text-sm"><strong>3 cm</strong></td>
                                <td class="px-6 py-4 text-sm"><span class="text-green-600">normal</span></td>
                                <td class="px-6 py-4 text-sm">25-04-2004</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-layouts.app>

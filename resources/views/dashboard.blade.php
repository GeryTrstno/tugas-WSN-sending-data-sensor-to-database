<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 text-black" wire:poll.5s>
        <!-- Kartu Sensor & Statistik -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Kartu HC-SR04 Ultrasonic Sensor -->
            @livewire('sensor-card')

            <!-- Kartu Sensor Statistics -->
            @livewire('sensor-statistic')

        </div>

        <!-- Tabel Data Sensor -->
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-3xl font-semibold">Sensor Data Records</h2>
                <button class="bg-red-500 text-white py-2 px-4 rounded-md">Clear All Data</button>
            </div>

            <!-- Tabel -->
            @livewire('sensor-table')

        </div>
    </div>

</x-layouts.app>

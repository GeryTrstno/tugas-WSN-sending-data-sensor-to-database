<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 text-black">
        <!-- Kartu Sensor & Statistik -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Kartu HC-SR04 Ultrasonic Sensor -->
            @livewire('sensor-card')

            <!-- Kartu Sensor Statistics -->
            @livewire('sensor-statistic')
        </div>

        <!-- Tabel Data Sensor -->
        <div class="relative flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-3 sm:p-6 shadow-lg">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 sm:gap-0 mb-4">
                <h2 class="text-center text-xl sm:text-2xl lg:text-3xl font-semibold">Sensor Data Records</h2>
                <form method="POST" action="{{ route('dashboard.clear-data') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 transition-colors text-white py-2 px-4 rounded-md text-sm sm:text-base whitespace-nowrap">
                        Clear All Data
                    </button>
                </form>
            </div>

            <!-- Tabel -->
            @livewire('sensor-table')

            @if (session()->has('message'))
                <div class="bg-green-500 text-white p-3 rounded-lg mt-4 text-center">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</x-layouts.app>

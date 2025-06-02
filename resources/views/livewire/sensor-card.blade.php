<div wire:init='LoadSingleData' wire:poll.1s='LoadSingleData'
     class="relative aspect-square overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
    <div class="text-center">
        <h1 class="sensor-icon text-3xl sm:text-4xl lg:text-5xl text-blue-500">📏</h1>
        <div class="font-semibold text-lg sm:text-xl lg:text-2xl mt-2">HC-SR04 Ultrasonic Sensor</div>
    </div>

    @if ($latest)
        <!-- Distance Display -->
        <div class="text-center mt-4 sm:mt-6">
            <div class="font-black text-4xl sm:text-6xl lg:text-7xl xl:text-9xl">
                {{ number_format($latest->distance, 2) }}
            </div>
            <div class="text-xl sm:text-2xl lg:text-3xl text-gray-500 mt-1">cm</div>
        </div>

        <!-- Status Badge -->
        <div class="flex justify-center mt-4 sm:mt-6 lg:mt-8">
            @if ($latest->status === 'Dekat')
                <span class="bg-green-500 text-white font-semibold px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg text-sm sm:text-base lg:text-lg">
                    {{ $latest->status }}
                </span>
            @elseif ($latest->status === 'Sedang')
                <span class="bg-yellow-500 text-white font-semibold px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg text-sm sm:text-base lg:text-lg">
                    {{ $latest->status }}
                </span>
            @else
                <span class="bg-red-500 text-white font-semibold px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg text-sm sm:text-base lg:text-lg">
                    {{ $latest->status }}
                </span>
            @endif
        </div>

        <!-- Timestamp -->
        <div class="flex justify-center text-xs sm:text-sm text-gray-500 mt-2">
            {{ $latest->created_at->setTimezone('Asia/Jakarta')->format('H:i:s') }}
        </div>
    @else
        <div class="text-center mt-4 text-gray-400 text-sm sm:text-base">Belum ada data sensor</div>
    @endif
</div>

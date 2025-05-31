<div wire:init='LoadSingleData' wire:poll.5s='LoadSingleData'
     class="relative aspect-square overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">

    <h1 class="sensor-icon text-5xl text-blue-500 mt-4">📏</h1>
    <div class="font-semibold flex justify-center text-2xl mt-2">HC-SR04 Ultrasonic Sensor</div>

    @if ($latest)
        <div class="font-black text-9xl mt-4 flex justify-center">
            {{ number_format($latest->distance, 2) }}
        </div>
        <div class="flex justify-center text-3xl text-gray-500">cm</div>
        <div class="flex justify-center mt-8 text-lg">
            @if ($latest->status === 'Dekat')
                <span class="bg-green-500 text-white font-semibold px-4 py-2 rounded-lg">{{ $latest->status }}</span>
            @elseif ($latest->status === 'Sedang')
                <span class="bg-yellow-500 text-white font-semibold px-4 py-2 rounded-lg">{{ $latest->status }}</span>
            @else
                <span class="bg-red-500 text-white font-semibold px-4 py-2 rounded-lg">{{ $latest->status }}</span>
            @endif
        </div>
        <div class="flex justify-center text-sm text-gray-500 mt-2">
            {{ $latest->created_at->setTimezone('Asia/Jakarta')->format('H:i:s') }}
        </div>
    @else
        <div class="text-center mt-4 text-gray-400">Belum ada data sensor</div>
    @endif
</div>

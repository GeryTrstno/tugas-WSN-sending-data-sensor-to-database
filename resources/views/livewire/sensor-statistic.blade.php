<div wire:init='LoadVariables' wire:poll.5s='LoadVariables' class="relative aspect-square overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
    <div class="sensor-icon text-5xl text-blue-500">📊</div>
    <div class="font-semibold text-2xl text-center mt-2">Statistik Sensor</div>
    <div class="grid grid-cols-2 gap-6 mt-13">
        <div class="flex flex-col items-center">
            <div class="text-2xl text-gray-600">Min Jarak</div>
            <div class="font-semibold text-5xl text-green-600 mt-2" id="minDistance">{{ $MinDistance }}</div> <!-- Perbaikan nama -->
        </div>
        <div class="flex flex-col items-center">
            <div class="text-2xl text-gray-600">Max Jarak</div>
            <div class="font-semibold text-5xl text-red-600 mt-2" id="maxDistance">{{ $MaxDistance }}</div> <!-- Pastikan variabel ini ada -->
        </div>
        <div class="flex flex-col items-center">
            <div class="text-2xl text-gray-600">Rata - Rata</div>
            <div class="font-semibold text-5xl text-blue-600 mt-2" id="avgDistance">{{ $AvgDistance }}</div> <!-- Pastikan variabel ini ada -->
        </div>
        <div class="flex flex-col items-center">
            <div class="text-2xl text-gray-600">Total Data</div>
            <div class="font-semibold text-5xl text-purple-600 mt-2" id="totalReadings">{{ $Total }}</div> <!-- Pastikan variabel ini ada -->
        </div>
    </div>
</div>

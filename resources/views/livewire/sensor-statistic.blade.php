<div wire:init='LoadVariables' wire:poll.5s='LoadVariables' class="relative aspect-square overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white p-6 shadow-lg">
    <div class="text-center mb-4 sm:mb-6">
        <div class="sensor-icon text-3xl sm:text-4xl lg:text-5xl text-blue-500">📊</div>
        <div class="font-semibold text-lg sm:text-xl lg:text-2xl mt-2">Statistik Sensor</div>
    </div>

    <!-- Statistics Grid -->
    <div class="grid grid-cols-2 gap-3 sm:gap-4 lg:gap-6">
        <!-- Min Distance -->
        <div class="flex flex-col items-center bg-gray-50 rounded-lg p-3 sm:p-4">
            <div class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-600 text-center">Min Jarak</div>
            <div class="font-semibold text-2xl sm:text-3xl lg:text-4xl xl:text-5xl text-green-600 mt-1 sm:mt-2" id="minDistance">
                {{ $MinDistance }}
            </div>
            <div class="text-xs sm:text-sm text-gray-500">cm</div>
        </div>

        <!-- Max Distance -->
        <div class="flex flex-col items-center bg-gray-50 rounded-lg p-3 sm:p-4">
            <div class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-600 text-center">Max Jarak</div>
            <div class="font-semibold text-2xl sm:text-3xl lg:text-4xl xl:text-5xl text-red-600 mt-1 sm:mt-2" id="maxDistance">
                {{ $MaxDistance }}
            </div>
            <div class="text-xs sm:text-sm text-gray-500">cm</div>
        </div>

        <!-- Average Distance -->
        <div class="flex flex-col items-center bg-gray-50 rounded-lg p-3 sm:p-4">
            <div class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-600 text-center">Rata-Rata</div>
            <div class="font-semibold text-2xl sm:text-3xl lg:text-4xl xl:text-5xl text-blue-600 mt-1 sm:mt-2" id="avgDistance">
                {{ $AvgDistance }}
            </div>
            <div class="text-xs sm:text-sm text-gray-500">cm</div>
        </div>

        <!-- Total Data -->
        <div class="flex flex-col items-center bg-gray-50 rounded-lg p-3 sm:p-4">
            <div class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-600 text-center">Total Data</div>
            <div class="font-semibold text-2xl sm:text-3xl lg:text-4xl xl:text-5xl text-purple-600 mt-1 sm:mt-2" id="totalReadings">
                {{ $Total }}
            </div>
            <div class="text-xs sm:text-sm text-gray-500">records</div>
        </div>
    </div>
</div>

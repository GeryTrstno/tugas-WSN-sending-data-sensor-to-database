<div class="w-full" wire:init="LoadData" wire:poll.5s='LoadData'>
    <!-- Mobile Card View (Hidden on larger screens) -->
    <div class="block sm:hidden space-y-3">
        @foreach ($sensors as $sensor)
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-4">
                <div class="flex justify-between items-start mb-2">
                    <span class="text-sm font-medium text-gray-600">{{ $sensor->id }}</span>
                    <span class="text-xs text-gray-500">{{ $sensor->created_at->format('H:i:s') }}</span>
                </div>

                <div class="flex justify-between items-center mb-2">
                    <span class="text-lg font-bold">{{ $sensor->distance }} cm</span>
                    @if ($sensor->status === 'Dekat')
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">{{ $sensor->status }}</span>
                    @elseif ($sensor->status === 'Sedang')
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-medium">{{ $sensor->status }}</span>
                    @else
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs font-medium">{{ $sensor->status }}</span>
                    @endif
                </div>

                <div class="text-xs text-gray-500">
                    {{ $sensor->created_at->format('Y-m-d') }}
                </div>
            </div>
        @endforeach
    </div>

    <!-- Desktop Table View (Hidden on mobile) -->
    <div class="hidden sm:block overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-200 text-gray-800">
                <tr>
                    <th class="px-3 sm:px-6 py-3 text-center font-semibold text-xs sm:text-sm">No</th>
                    <th class="px-3 sm:px-6 py-3 text-center font-semibold text-xs sm:text-sm">Jarak (cm)</th>
                    <th class="px-3 sm:px-6 py-3 text-center font-semibold text-xs sm:text-sm">Status</th>
                    <th class="px-3 sm:px-6 py-3 text-center font-semibold text-xs sm:text-sm">Waktu</th>
                    <th class="px-3 sm:px-6 py-3 text-center font-semibold text-xs sm:text-sm lg:table-cell hidden">Tanggal</th>
                </tr>
            </thead>
            <tbody id="dataTableBody">
                @foreach ($sensors as $sensor)
                    <tr class="border-b hover:bg-gray-50 transition-colors">
                        <td class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-center">{{ $sensor->id }}</td>
                        <td class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-center">
                            <strong>{{ $sensor->distance }}</strong>
                        </td>
                        <td class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-center">
                            @if ($sensor->status === 'Dekat')
                                <span class="text-green-600 font-medium">{{ $sensor->status }}</span>
                            @elseif ($sensor->status === 'Sedang')
                                <span class="text-yellow-500 font-medium">{{ $sensor->status }}</span>
                            @else
                                <span class="text-red-500 font-medium">{{ $sensor->status }}</span>
                            @endif
                        </td>
                        <td class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-center">
                            {{ $sensor->created_at->format('H:i:s') }}
                        </td>
                        <td class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-center lg:table-cell hidden">
                            {{ $sensor->created_at->format('Y-m-d') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow-md" wire:init="LoadData" wire:poll.5s='LoadData'>
    <table class="min-w-full table-auto border-collapse">
        <thead class="bg-gray-200 text-gray-800">
            <tr>
                <th class="px-6 py-3 text-center font-semibold text-sm">No</th>
                <th class="px-6 py-3 text-center font-semibold text-sm">Jarak (cm)</th>
                <th class="px-6 py-3 text-center font-semibold text-sm">Status</th>
                <th class="px-6 py-3 text-center font-semibold text-sm">Waktu</th>
                <th class="px-6 py-3 text-center font-semibold text-sm">Tanggal</th>
            </tr>
        </thead>
        <tbody id="dataTableBody">
            <!-- Data Table Entries -->
            @foreach ($sensors as $sensor)
                 <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-center">{{ $sensor->id }}</td>
                    <td class="px-6 py-4 text-sm text-center"><strong>{{ $sensor->distance }}</strong></td>
                    @if ($sensor->status === 'Dekat')
                        <td class="px-6 py-4 text-sm text-center"><span class="text-green-600">{{ $sensor->status }}</span></td>
                    @elseif ($sensor->status === 'Sedang')
                        <td class="px-6 py-4 text-sm text-center"><span class="text-yellow-500">{{ $sensor->status }}</span></td>
                    @else
                        <td class="px-6 py-4 text-sm text-center"><span class="text-red-500">{{ $sensor->status }}</span></td>
                    @endif
                    <td class="px-6 py-4 text-sm text-center">{{ $sensor->created_at->format('H:i:s') }}</td>
                    <td class="px-6 py-4 text-sm text-center">{{ $sensor->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<x-layouts.app>
    <h1>Data Sensor (Terbaru)</h1>
        <table border="1">
            <tr>
                <th>Waktu</th>
                <th>Status</th>
                <th>Jarak</th>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->distance }}</td>
            </tr>
            @endforeach
        </table>

</x-layouts.app>

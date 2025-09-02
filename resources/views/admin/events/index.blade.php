@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Daftar Event</h2>

    <a href="{{ route('events.create') }}" 
       class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 shadow inline-flex items-center">
       <i class="bi bi-plus-lg mr-2"></i> Tambah Event
    </a>

    @if(session('success'))
        <div id="success-message" class="bg-green-100 text-green-700 p-2 mt-4 rounded shadow">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => {
                let alertBox = document.getElementById('success-message');
                if (alertBox) {
                    alertBox.style.transition = "opacity 0.5s ease";
                    alertBox.style.opacity = "0";
                    setTimeout(() => alertBox.remove(), 500);
                }
            }, 5000); 
        </script>
    @endif

    <!-- Card putih -->
    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-auto">
            <thead class="bg-gray-200 text-left">
                <tr>
                    <th class="p-3 w-16">No</th>
                    <th class="p-3 w-40">Highlight</th>

                    <th class="p-3">Judul</th>
                    <th class="p-3">Deskripsi Singkat</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Writer</th>
                    <th class="p-3">Editor</th>
                    <th class="p-3 w-40">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">
                        <form action="{{ route('events.setHighlight', $event) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="highlight" onchange="this.form.submit()"
                                    class="border rounded px-2 py-1">
                                <option value="0"  {{ $event->highlight==0 ? 'selected' : '' }}>Event</option>
                                <option value="1"  {{ $event->highlight==1 ? 'selected' : '' }}>Highlight 1</option>
                                <option value="2"  {{ $event->highlight==2 ? 'selected' : '' }}>Highlight 2</option>
                                <option value="3"  {{ $event->highlight==3 ? 'selected' : '' }}>Highlight 3</option>
                            </select>
                        </form>
                    </td>

                        <td class="p-3 font-semibold">{{ $event->judul }}</td>
                        <td class="p-3">{{ Str::limit($event->deskripsi_singkat, 80) }}</td>
                        <td class="p-3">{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</td>
                        <td class="p-3">{{ $event->writer ?? '-' }}</td>
                        <td class="p-3">{{ $event->editor ?? '-' }}</td>
                        <td class="p-3 flex items-center space-x-4">
                            <a href="{{ route('events.show', $event) }}" 
                            class="text-red-600 hover:text-green-800" title="Lihat">
                            <i class="bi bi-eye-fill text-lg"></i>
                            </a>
                            <a href="{{ route('events.edit', $event) }}" 
                               class="text-red-500 hover:text-blue-700" title="Edit">
                                <i class="bi bi-pencil-square text-lg"></i>
                            </a>
                            <form action="{{ route('events.destroy', $event) }}" 
                                  method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" 
                                        class="text-red-500 hover:text-red-700"
                                        title="Hapus"
                                        onclick="return confirm('Yakin hapus event ini?')">
                                    <i class="bi bi-trash text-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-3 text-center text-gray-500 italic">Belum ada event</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

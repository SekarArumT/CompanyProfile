@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Daftar Careers</h2>

    <a href="{{ route('admin.careers.create') }}" 
       class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 shadow inline-flex items-center">
       <i class="bi bi-plus-lg mr-2"></i> Tambah Career
    </a>

    {{-- Flash Message --}}
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

    <!-- Card Putih -->
    <div class="mt-6 bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-auto">
            <thead class="bg-gray-200 text-left">
                <tr>
                    <th class="p-3 w-12">No</th>
                    <th class="p-3">Posisi</th>
                    <th class="p-3">Departemen</th>
                    <th class="p-3">Lokasi</th>
                    <th class="p-3">Jenis Pekerjaan</th>
                    <th class="p-3">Range Gaji</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Link</th>
                    <th class="p-3 w-32">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($careers as $career)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3 font-semibold">{{ $career->position }}</td>
                        <td class="p-3">{{ $career->department }}</td>
                        <td class="p-3">{{ $career->location }}</td>
                        <td class="p-3">{{ $career->job_type }}</td>
                        <td class="p-3">{{ $career->salary_range ?? '-' }}</td>
                        <td class="p-3">
                            <span class="px-2 py-1 text-xs rounded 
                                {{ $career->status == 'open' ? 'bg-green-100 text-green-700' : 
                                   ($career->status == 'closed' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
                                {{ ucfirst($career->status) }}
                            </span>
                        </td>
                        <td class="p-3">
                            @if($career->link)
                                <a href="{{ $career->link }}" target="_blank" 
                                   class="text-blue-600 hover:underline">Glints</a>
                            @else
                                <span class="text-gray-400 italic">-</span>
                            @endif
                        </td>
                        <td class="p-3 flex items-center space-x-4">
                            <a href="{{ route('admin.careers.edit', $career->id) }}" 
                               class="text-blue-500 hover:text-blue-700" title="Edit">
                                <i class="bi bi-pencil-square text-lg"></i>
                            </a>
                            <form action="{{ route('admin.careers.destroy', $career->id) }}" 
                                  method="POST" class="inline"
                                  onsubmit="return confirm('Yakin hapus career ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" 
                                        class="text-red-500 hover:text-red-700"
                                        title="Hapus">
                                    <i class="bi bi-trash text-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="p-4 text-center text-gray-500 italic">
                            Belum ada data careers.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $careers->links() }}
    </div>
</div>
@endsection

@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Daftar About Count</h2>

    <a href="{{ route('aboutcount.create') }}" 
       class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 shadow inline-flex items-center">
       <i class="bi bi-plus-lg mr-2"></i> Tambah Data
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
                    <th class="p-3">Insan Satylaksana</th>
                    <th class="p-3">Distribution Center</th>
                    <th class="p-3">CSR Partner</th>
                    <th class="p-3">SKU Products</th>
                    <th class="p-3 w-40">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($aboutcounts as $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $loop->iteration }}</td>
                    <td class="p-3 font-semibold">{{ $item->insan_satylaksana }}</td>
                    <td class="p-3">{{ $item->distribution_center }}</td>
                    <td class="p-3">{{ $item->csr_partner }}</td>
                    <td class="p-3">{{ $item->sku_products }}</td>
                    <td class="p-3 flex items-center space-x-4">
                        <a href="{{ route('aboutcount.edit', $item) }}" 
                           class="text-blue-500 hover:text-blue-700" title="Edit">
                            <i class="bi bi-pencil-square text-lg"></i>
                        </a>
                        <form action="{{ route('aboutcount.destroy', $item) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" 
                                    class="text-red-500 hover:text-red-700"
                                    title="Hapus"
                                    onclick="return confirm('Yakin hapus?')">
                                <i class="bi bi-trash text-lg"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

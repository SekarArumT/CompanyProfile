@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

    <a href="{{ route('products.create') }}" 
       class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 shadow inline-flex items-center">
       <i class="bi bi-plus-lg mr-2"></i> Tambah Produk
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
                    <th class="p-3 w-48">Gambar</th>
                    <th class="p-3">Nama Produk</th>
                    <th class="p-3">Deskripsi</th>
                    <th class="p-3 w-40">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">
                            @if($product->gambar_landing)
                                <img src="{{ asset('storage/'.$product->gambar_landing) }}" 
                                     class="h-16 w-16 object-cover rounded border">
                            @else
                                <span class="text-gray-400 italic">No Image</span>
                            @endif
                        </td>
                        <td class="p-3 font-semibold">{{ $product->nama_produk }}</td>
                        <td class="p-3">{{ Str::limit($product->deskripsi, 80) }}</td>
                        <td class="p-3 flex items-center space-x-4">
                            <a href="{{ route('products.edit', $product) }}" 
                               class="text-red-500 hover:text-blue-700" title="Edit">
                                <i class="bi bi-pencil-square text-lg"></i>
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" 
                                  method="POST" class="inline">
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

@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama Produk -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Nama Produk</label>
                <input type="text" name="nama_produk" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500" 
                       value="{{ old('nama_produk') }}" required>
                @error('nama_produk') 
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="4" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">{{ old('deskripsi') }}</textarea>
                @error('deskripsi') 
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Gambar Landing (jpg,jpeg,png|max:2048)</label>
                <input type="file" name="gambar_landing" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                @error('gambar_landing') 
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3">
                <a href="{{ route('products.index') }}" 
                   class="px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">Batal</a>
                <button type="submit" 
                        class="px-4 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Tambah Brand</h2>
    
    <!-- Card putih -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Nama Brand -->
            <div>
                <label for="namabrand" class="block font-semibold mb-1">Nama Brand</label>
                <input type="text" name="namabrand" id="namabrand" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400"
                       value="{{ old('namabrand') }}" required>
                @error('namabrand')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Logo -->
            <div>
                <label for="logo" class="block font-semibold mb-1">Logo</label>
                <input type="file" name="logo" id="logo" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400" required>
                @error('logo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gambar -->
            <div>
                <label for="gambar" class="block font-semibold mb-1">Gambar</label>
                <input type="file" name="gambar" id="gambar" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400" required>
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi Singkat -->
            <div>
                <label for="deskripsi_singkat" class="block font-semibold mb-1">Deskripsi Singkat</label>
                <textarea name="deskripsi_singkat" id="deskripsi_singkat" rows="3"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400"
                          required>{{ old('deskripsi_singkat') }}</textarea>
                @error('deskripsi_singkat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi Lengkap -->
            <div>
                <label for="deskripsi_lengkap" class="block font-semibold mb-1">Deskripsi Lengkap</label>
                <textarea name="deskripsi_lengkap" id="deskripsi_lengkap" rows="5"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400">{{ old('deskripsi_lengkap') }}</textarea>
                @error('deskripsi_lengkap')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Link -->
            <div>
                <label for="link" class="block font-semibold mb-1">Link (Opsional)</label>
                <input type="url" name="link" id="link" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400"
                       value="{{ old('link') }}">
                @error('link')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="pt-4">
                <button type="submit" 
                        class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 shadow">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

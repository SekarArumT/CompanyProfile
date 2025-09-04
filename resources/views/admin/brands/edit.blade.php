@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Edit Brand</h2>

    <!-- Card putih -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.brands.update', $brand) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Nama Brand -->
            <div>
                <label for="namabrand" class="block font-semibold mb-1">Nama Brand</label>
                <input type="text" name="namabrand" id="namabrand" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400"
                       value="{{ old('namabrand', $brand->namabrand) }}" required>
                @error('namabrand')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Logo -->
            <div>
                <label for="logo" class="block font-semibold mb-1">Logo</label>
                @if($brand->logo)
                    <img src="{{ asset('storage/'.$brand->logo) }}" class="h-16 mb-2 border rounded" alt="Logo">
                @endif
                <input type="file" name="logo" id="logo" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400">
                @error('logo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gambar -->
            <div>
                <label for="gambar" class="block font-semibold mb-1">Gambar</label>
                @if($brand->gambar)
                    <img src="{{ asset('storage/'.$brand->gambar) }}" class="h-24 mb-2 border rounded" alt="Gambar">
                @endif
                <input type="file" name="gambar" id="gambar" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400">
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi Singkat -->
            <div>
                <label for="deskripsi_singkat" class="block font-semibold mb-1">Deskripsi Singkat</label>
                <textarea name="deskripsi_singkat" id="deskripsi_singkat" rows="3"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400"
                          required>{{ old('deskripsi_singkat', $brand->deskripsi_singkat) }}</textarea>
                @error('deskripsi_singkat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi Lengkap -->
            <div>
                <label for="deskripsi_lengkap" class="block font-semibold mb-1">Deskripsi Lengkap (Opsional)</label>
                <textarea name="deskripsi_lengkap" id="deskripsi_lengkap" rows="5"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400">{{ old('deskripsi_lengkap', $brand->deskripsi_lengkap) }}</textarea>
                @error('deskripsi_lengkap')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Link -->
            <div>
                <label for="link" class="block font-semibold mb-1">Link (Opsional)</label>
                <input type="url" name="link" id="link" 
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-red-400"
                       value="{{ old('link', $brand->link) }}">
                @error('link')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="pt-4">
                <button type="submit" 
                        class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 shadow">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

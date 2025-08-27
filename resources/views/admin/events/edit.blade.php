@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Edit Event</h2>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Judul</label>
                <input type="text" name="judul" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                       value="{{ old('judul', $event->judul) }}" required>
                @error('judul') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Deskripsi singkat -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Deskripsi Singkat</label>
                <input type="text" name="deskripsi_singkat" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                       value="{{ old('deskripsi_singkat', $event->deskripsi_singkat) }}" required>
                @error('deskripsi_singkat') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Tanggal -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Tanggal</label>
                <input type="date" name="tanggal" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                       value="{{ old('tanggal', $event->tanggal) }}" required>
                @error('tanggal') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Isi berita -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Isi Berita</label>
                <textarea name="isi_berita" rows="5" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                          required>{{ old('isi_berita', $event->isi_berita) }}</textarea>
                @error('isi_berita') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Writer -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Writer</label>
                <input type="text" name="writer" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                       value="{{ old('writer', $event->writer) }}">
            </div>

            <!-- Editor -->
            <div class="mb-4">
                <label class="block font-semibold mb-2">Editor</label>
                <input type="text" name="editor" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                       value="{{ old('editor', $event->editor) }}">
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3">
                <a href="{{ route('events.index') }}" 
                   class="px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">Batal</a>
                <button type="submit" 
                        class="px-4 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700">Update</button>
            </div>

            
        <div>
            <label class="block font-semibold mb-1">Gambar Event (jpg,jpeg,png|max:2048)</label>
            <input type="file" name="gambar" class="w-full border p-2 rounded">

            @if($event->gambar)
                <div class="mt-3">
                    <p class="text-sm text-gray-600">Gambar saat ini:</p>
                    <img src="{{ asset('storage/'.$event->gambar) }}" 
                         class="h-32 rounded border object-cover mt-1">
                </div>
            @endif
        </div>
        </form>
    </div>
</div>
@endsection

@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">{{ $event->judul }}</h2>

        @if($event->gambar)
    <img src="{{ asset('storage/'.$event->gambar) }}" 
         class="w-full h-64 object-cover rounded-lg mb-4 shadow">
@endif


        <p class="text-gray-600 mb-2"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</p>
        <p class="text-gray-600 mb-2"><strong>Writer:</strong> {{ $event->writer ?? '-' }}</p>
        <p class="text-gray-600 mb-4"><strong>Editor:</strong> {{ $event->editor ?? '-' }}</p>

        <div class="mb-4">
            <h3 class="font-semibold mb-2">Deskripsi Singkat</h3>
            <p class="text-gray-700">{{ $event->deskripsi_singkat }}</p>
        </div>

        <div class="mb-6">
            <h3 class="font-semibold mb-2">Isi Berita</h3>
            <p class="text-gray-700 whitespace-pre-line leading-relaxed">
                {{ $event->isi_berita }}
            </p>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('events.index') }}" 
               class="px-4 py-2 bg-gray-300 rounded-lg shadow hover:bg-gray-400">Kembali</a>
            <a href="{{ route('events.edit', $event) }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">Edit</a>
        </div>
    </div>
</div>
@endsection

@extends('admin.navbar')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="border p-2 w-full" value="{{ $product->nama_produk }}" required>
        </div>
        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="border p-2 w-full">{{ $product->deskripsi }}</textarea>
        </div>
        <div>
            <label>Gambar Landing</label>
            <input type="file" name="gambar_landing" class="border p-2 w-full">
            @if($product->gambar_landing)
                <img src="{{ asset('storage/'.$product->gambar_landing) }}" class="h-16 mt-2">
            @endif
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection

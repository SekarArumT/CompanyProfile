@extends('admin.navbar')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <h2 class="text-2xl font-bold mb-4">Edit About Count</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('aboutcount.update', $aboutcount->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block mb-1 font-semibold">Insan Satylaksana</label>
                <input type="number" name="insan_satylaksana" class="w-full border px-3 py-2 rounded" value="{{ old('insan_satylaksana', $aboutcount->insan_satylaksana) }}" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold">Distribution Center</label>
                <input type="number" name="distribution_center" class="w-full border px-3 py-2 rounded" value="{{ old('distribution_center', $aboutcount->distribution_center) }}" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold">CSR Partner</label>
                <input type="number" name="csr_partner" class="w-full border px-3 py-2 rounded" value="{{ old('csr_partner', $aboutcount->csr_partner) }}" required>
            </div>
            <div>
                <label class="block mb-1 font-semibold">SKU Products</label>
                <input type="number" name="sku_products" class="w-full border px-3 py-2 rounded" value="{{ old('sku_products', $aboutcount->sku_products) }}" required>
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Update</button>
            
            </div>
        </form>
    </div>
</div>
@endsection

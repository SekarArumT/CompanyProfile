@extends('admin.navbar')

@section('content')
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Selamat datang, {{ Auth::user()->name }} </h2>
        <p class="text-gray-600">Anda login sebagai <span class="font-semibold">{{ Auth::user()->email }}</span>.</p>
    </div>
@endsection
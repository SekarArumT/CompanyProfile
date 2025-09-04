@extends('navbar')

@section('content')

<!-- Hero / Landing Section -->
<section class="hero-section text-white">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 60vh;">
            <div class="col-lg-6 text-center">
                <h1 class="fw-bold mb-3">Event Satyalaksana</h1>
                <h3 class="fw-bold mb-3" style="font-style: italic;">
                    “If you want to go fast, go alone. If you want to go far, go together.”
                </h3>  
                <p class="mb-4">
                    Kalau ingin berjalan cepat, berjalanlah sendiri. Kalau ingin berjalan jauh, berjalanlah bersama-sama.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Event Section -->
<section class="news-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">All Events</h2>
            <p class="text-muted">Discover all our programs and events.</p>
        </div>

        <div class="row justify-content-center">
            @foreach($events as $event)
                <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
    <a href="{{ route('event.detail', $event->id) }}" class="text-decoration-none text-dark w-100">
        <div class="news-card shadow-sm rounded-4 overflow-hidden h-100">
            <!-- Gambar -->
            <img src="{{ asset('storage/' . $event->gambar) }}" 
                 class="w-100" 
                 alt="{{ $event->judul }}">

            <div class="p-4 text-center">
                <small class="text-muted">
                    {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}
                </small>
                <h5 class="fw-bold mt-2">{{ $event->judul }}</h5>
                <p class="text-muted">{{ Str::limit($event->deskripsi, 100, '...') }}</p>
            </div>
        </div>
    </a>
</div>

            @endforeach
        </div>
    </div>
</section>


@include('footer')

<style>
.hero-section { 
    width: 100%; 
    background-color: #8C1C1C; 
    padding: 150px 0 0 0; 
    position: relative; 
    border-bottom-left-radius: 80px; 
    border-bottom-right-radius: 80px; 
}

.hero-section .row { position: relative; z-index: 2; }

.news-card img { object-fit: cover; height: 220px; }
.news-card .p-4 { padding: 1.5rem; }
</style>

@endsection

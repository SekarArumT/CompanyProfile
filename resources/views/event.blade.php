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
            <h2 class="fw-bold mb-3">Events</h2>
            <p class="text-muted">Discover all our programs and events.</p>
        </div>
<div class="text-center mb-4">
    <ul class="list-inline pt-filter text-uppercase fw-bold">
        <li class="list-inline-item pt-filter-btn" data-filter=".previously">previously</li>
        <li class="list-inline-item pt-filter-btn" data-filter=".now">Now</li>
        <li class="list-inline-item pt-filter-btn active" data-filter=".upcoming">Upcoming</li>
    </ul>
</div>

<div class="row justify-content-center">
   {{-- UPCOMING CAROUSEL --}}
@if($events->where('status', 'upcoming')->count() > 0)
    <div class="col-12 mix upcoming mb-5">
        <div id="upcomingCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 100%;">
            <div class="carousel-inner">
                @php $first = true; @endphp
                @foreach($events->where('status', 'upcoming') as $event)
                    <div class="carousel-item {{ $first ? 'active' : '' }}">
                        <a href="{{ route('event.detail', $event->id) }}" class="text-decoration-none text-dark">
                            <div class="news-card shadow-sm rounded-4 overflow-hidden">
                                <img src="{{ asset('storage/' . $event->gambar) }}" 
                                     class="d-block w-100"
                                     style="height:400px; object-fit:contain; margin:0 auto;"
                                     alt="{{ $event->judul }}">
                            </div>
                        </a>
                    </div>
                    @php $first = false; @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev custom-control" type="button" data-bs-target="#upcomingCarousel" data-bs-slide="prev">
              <i class="bi bi-arrow-left-circle-fill fs-1"></i>
            </button>
            <button class="carousel-control-next custom-control" type="button" data-bs-target="#upcomingCarousel" data-bs-slide="next">
              <i class="bi bi-arrow-right-circle-fill fs-1"></i>
            </button>
        </div>
    </div>
@else
    <div class="col-12 mix upcoming mb-5">
        <div class="text-center text-muted fw-bold py-5">
            No events found.
        </div>
    </div>
@endif

   {{-- NOW CAROUSEL --}}
@if($events->where('status', 'now')->count() > 0)
    <div class="col-12 mix now mb-5">
        <div id="nowCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 100%;">
            <div class="carousel-inner">
                @php $first = true; @endphp
                @foreach($events->where('status', 'now') as $event)
                    <div class="carousel-item {{ $first ? 'active' : '' }}">
                        <a href="{{ route('event.detail', $event->id) }}" class="text-decoration-none text-dark">
                            <div class="news-card shadow-sm rounded-4 overflow-hidden">
                                <img src="{{ asset('storage/' . $event->gambar) }}" 
                                     class="d-block w-100"
                                     style="height:400px; object-fit:contain; margin:0 auto;"
                                     alt="{{ $event->judul }}">
                            </div>
                        </a>
                    </div>
                    @php $first = false; @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev custom-control" type="button" data-bs-target="#nowCarousel" data-bs-slide="prev">
              <i class="bi bi-arrow-left-circle-fill fs-1"></i>
            </button>
            <button class="carousel-control-next custom-control" type="button" data-bs-target="#nowCarousel" data-bs-slide="next">
              <i class="bi bi-arrow-right-circle-fill fs-1"></i>
            </button>
        </div>
    </div>
@else
    <div class="col-12 mix now mb-5">
        <div class="text-center text-muted fw-bold py-5">
            No events found.
        </div>
    </div>
@endif


    {{-- PREVIOUSLY GRID --}}
    @foreach($events->where('status', 'previously') as $event)
        <div class="col-lg-4 col-md-6 mb-4 mix previously">
            <a href="{{ route('event.detail', $event->id) }}" class="text-decoration-none text-dark w-100">
                <div class="news-card shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="{{ asset('storage/' . $event->gambar) }}" 
                         class="w-100" 
                         style="height:220px; object-fit:contain;"
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

    <div id="empty-msg" class="text-center text-muted fw-bold mt-4" style="display:none;">
        No events found.
    </div>
</div>
        </div>
    </div>
</section>


@include('footer')

<style>
/* Custom navigasi carousel */
.carousel-control-prev.custom-control,
.carousel-control-next.custom-control {
  width: auto;
  background: none;
  border: none;
}

.carousel-control-prev.custom-control i,
.carousel-control-next.custom-control i {
  color: #8C1C1C;      
  transition: 0.3s ease;
  text-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.carousel-control-prev.custom-control i:hover,
.carousel-control-next.custom-control i:hover {
  color: #F9C300;    
  transform: scale(1.2);
}

.carousel-control-prev {
  left: 5%;
}

.carousel-control-next {
  right: 5%;
}

.mix.upcoming img,
.mix.now img {
    height: 400px;
    object-fit: contain;
    margin: 0 auto; 
    display: block;
}


    .pt-filter-btn {
    cursor: pointer;
    padding: 6px 14px;
    border-radius: 20px;
    transition: 0.3s;
}

.pt-filter-btn.active,
.pt-filter-btn:hover {
    background-color: #8C1C1C;
    color: #fff;
}

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

.mix.upcoming .news-card {
    transform: scale(1.05);

    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.mix.upcoming img {
    height: 400px;
    object-fit: contain;
}

/* Mobile Responsive Styles */
@media (max-width: 768px) {
  .mix.upcoming img,
  .mix.now img {
      width: 100% !important;
      height: 280px !important;
      max-width: 100%;
  }
  
  .carousel-control-prev {
    left: 2%;
  }
  
  .carousel-control-next {
    right: 2%;
  }
  
  .carousel-control-prev.custom-control i,
  .carousel-control-next.custom-control i {
    font-size: 2rem !important;
  }
  
  .mix.upcoming .news-card {
    transform: none;
  
  }
}

@media (max-width: 576px) {
  .mix.upcoming img,
  .mix.now img {
      height: 220px !important;
  }
  
  .carousel-control-prev.custom-control i,
  .carousel-control-next.custom-control i {
    font-size: 1.5rem !important;
  }
  
  .pt-filter {
    flex-direction: column;
    gap: 10px;
  }
  
  .pt-filter-btn {
    display: block;
    text-align: center;
    margin: 5px 0;
  }
}


</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".pt-filter-btn");
    const items = document.querySelectorAll(".mix");
    const emptyMsg = document.getElementById("empty-msg");

    showCategory("upcoming");

    buttons.forEach(btn => {
        btn.addEventListener("click", function() {
            buttons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            const filter = this.getAttribute("data-filter").replace('.', '');
            showCategory(filter);
        });
    });

    function showCategory(category) {
        let visibleCount = 0;

        items.forEach(item => {
            if (item.classList.contains(category)) {
                item.style.display = "block";
                visibleCount++;
            } else {
                item.style.display = "none";
            }
        });

        if (visibleCount === 0) {
            emptyMsg.style.display = "block";
        } else {
            emptyMsg.style.display = "none";
        }
    }
});

</script>


@endsection

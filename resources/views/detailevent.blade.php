<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $event->judul }} | Event Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      padding-top: 90px; /* konten turun biar ga ketutupan navbar */
    }

    /* Navbar langsung solid */
    .navbar {
      padding: 1rem 0;
      background-color: #8C1C1C !important;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.25rem;
      letter-spacing: 0.5px;
      color: #fff !important;
    }
    .navbar-nav .nav-link {
      font-weight: 500;
      color: #fff !important;
      margin-left: 1rem;
      transition: color 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
      color: #F9C300 !important; 
    }

    .navbar-toggler {
      border: none;
    }
    .navbar-toggler:focus {
      box-shadow: none;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255,255,255,1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .logo {
      height: 60px;
      width: auto;
      margin-right: 5px;
      margin-left: -50px;
    }

    .offcanvas {
      background-color: #8C1C1C !important;
    }
    .offcanvas .nav-link {
      font-size: 1.1rem;
      font-weight: 600;
      color: #fff !important;
      margin: 0.75rem 0;
      border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .offcanvas .nav-link:hover {
      color: #F9C300 !important;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Desktop Menu -->
      <div class="collapse navbar-collapse justify-content-lg-center d-none d-lg-flex">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item mx-3"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
          <li class="nav-item mx-3"><a class="nav-link" href="{{ url('/brand') }}">Brands</a></li>
          <li class="nav-item mx-3"><a class="nav-link" href="{{ url('/careers')}}">Careers</a></li>
          <li class="nav-item mx-3"><a class="nav-link" href="{{ url('/event')}}">Event</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- (Mobile) -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="140">
      </a>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/brands') }}">Brands</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/careers')}}">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/event')}}">Event</a></li>
      </ul>
    </div>
  </div>

<!-- Content -->
<section class="event-detail-section py-5">
  <div class="container">
    
    <!-- Judul & Tanggal -->
    <div class="text-center mb-4">
      <h2 class="fw-bold mb-2" style="color:#8C1C1C;">{{ $event->judul }}</h2>
      <p class="text-muted">
        {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}
      </p>
    </div>

    <!-- Gambar -->
    <div class="text-center mb-4">
      <img src="{{ asset('storage/' . $event->gambar) }}" 
           alt="{{ $event->judul }}" 
           class="img-fluid rounded-4 shadow-sm"
           style="max-width:600px; height:auto;">
    </div>

    <!-- Isi Deskripsi -->
<div class="mb-4">
  <p class="fs-6" style="line-height:1.8; color:#444; text-align:justify;">
    {!! nl2br(e($event->isi_berita)) !!}
  </p>
</div>


    <!-- Writer & Editor -->
    <p><strong>Writer:</strong> {{ $event->writer ?? '-' }}</p>
    <p><strong>Editor:</strong> {{ $event->editor ?? '-' }}</p>

    <!-- Tombol Kembali -->
    <div class="mt-5">
      <a href="{{ url('/event') }}" class="btn btn-outline-danger rounded-pill px-4">
        <i class="bi bi-arrow-left me-2"></i> Back to All Events
      </a>
    </div>

  </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@extends('navbar')

@section('content')

<!-- Hero / Landing Section -->
<section class="hero-section text-white position-relative" style="overflow:hidden;">
  <div class="container position-relative" style="z-index:2;">
    <div class="row align-items-center justify-content-center mb-2" style="min-height:170px;">
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold mb-3">Satyalaksana BRAND</h1>
      </div>
    </div>
  </div>

  <!-- Single Background Image -->
  <img src="{{ asset('images/semuabrand.png') }}" class="semua-brand" alt="Semua Brand">
</section>

<!-- Brands Logo Section -->
<section class="brand-logo-section py-5 bg-white text-center mb-5">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap">
      @foreach ($brands as $brand)
        <a href="#{{ Str::slug($brand->namabrand) }}">
          <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->namabrand }}" class="brand-logo">
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- Brand Detail Sections -->
@foreach ($brands as $brand)
<section id="{{ Str::slug($brand->namabrand) }}" class="brand-detail-section position-relative text-center">
  <img src="{{ asset('storage/' . $brand->gambar) }}" 
       alt="{{ $brand->namabrand }} Brand" 
       class="w-100 bg-img brand-img">

  <div class="overlay-content position-absolute top-50 start-50 translate-middle text-dark p-4 rounded shadow">
    <img src="{{ asset('storage/' . $brand->logo) }}" alt="{{ $brand->namabrand }}" class="mb-3 brand-detail-logo">

    <p class="text-brand-red"><strong>{{ $brand->namabrand }}</strong></p>
    <p class="text-brand-red">{{ $brand->deskripsi_lengkap }}</p>

   <a href="{{ $brand->link }}" target="_blank" rel="noopener noreferrer" class="btn btn-brand mt-2">
     Visit & Shop
   </a>

  </div>
</section>
@endforeach

@include('footer')

<style>
.hero-section {
  width: 100%;
  background-color: #8C1C1C;
  padding: 150px 0 0 0;
  position: relative;
  border-bottom-left-radius: 80px;
  border-bottom-right-radius: 80px;
  overflow: hidden;
}

/* Single big background image */
.semua-brand {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  max-width: 1200px;
  height: auto;
  z-index: 1;
  opacity: 0.9;
}

.brand-logo {
  max-height: 100px;
  width: auto;
  filter: grayscale(100%);
  opacity: 0.7;
  transition: all 0.4s ease;
  cursor: pointer;
}

.brand-logo:hover {
  filter: grayscale(0%);
  opacity: 1;
  transform: scale(1.05);
}

.brand-detail-section {
    margin-bottom: 60px; 
}

@media (max-width: 768px) {
    .brand-detail-section {
        margin-bottom: 150px;
    }
}

.brand-img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.overlay-content {
    background: rgba(255, 255, 255, 0.922);
    max-width: 600px;
    width: 90%;  
    padding: 20px;
}

.brand-detail-logo {
    max-height: 80px;
    width: auto;
}

@media (max-width: 768px) {
    .overlay-content {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px;
    }

    .brand-detail-logo {
        max-height: 50px;
    }

    .btn-brand {
        padding: 8px 20px;
        font-size: 14px;
    }

    .brand-detail-section {
        min-height: auto;
    }

    .semua-brand {
        width: 95%;
        max-width: 1000px;
        opacity: 1;
    }
}

.btn-brand {
  background-color: #8C1C1C;
  color: #fff;
  padding: 10px 28px;
  border-radius: 6px;
  font-weight: 500;
  transition: all 0.3s ease;
  text-decoration: none;
}
.btn-brand:hover {
  background-color: #F9C300;
  color: #000;
}

.bg-img {
  width: 100%;
  height: auto;
  display: block;
}

.text-brand-red {
  color: #8C1C1C;
}

.brand-img {
    width: 100%;       
    height: 400px;     
    object-fit: cover; 
}
</style>

@endsection

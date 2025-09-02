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

  <!-- Floating Images -->
  <img src="{{ asset('images/madudiz2.png') }}" class="floating-img" style="top:20px; right:250px; transform: rotate(10deg);">
  <img src="{{ asset('images/richsweet1.png') }}" class="floating-img" style="top:130px; right:460px; transform: rotate(-15deg);">
  <img src="{{ asset('images/yayle1.png') }}" class="floating-img" style="top:120px; right:120px; transform: rotate(5deg);">
  <img src="{{ asset('images/madudiz1.png')}}" class="floating-img" style="top:100px; left:370px; transform: rotate(12deg);">
  <img src="{{ asset('images/yayle2.png')  }}" class="floating-img" style="top:150px; left:180px; transform: rotate(-8deg);">
  <img src="{{ asset('images/richsweet2.png') }}" class="floating-img" style="top:50px; left:50px; transform: rotate(15deg);">
</section>

<!-- brands logo section -->
<section class="brand-logo-section py-5 bg-white text-center mb-5">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap">
      <a href="#yayle-section">
        <img src="{{ asset('images/YayleLogo.png') }}" alt="Yayle" class="brand-logo">
      </a>
      <a href="#richsweet-section">
        <img src="{{ asset('images/RichsweetLogo.png') }}" alt="Richsweet" class="brand-logo">
      </a>
      <a href="#madudiz-section">
        <img src="{{ asset('images/MadudizLogo.png') }}" alt="Madudiz" class="brand-logo">
      </a>
    </div>
  </div>
</section>



<!-- Yayle Section -->
<section id="yayle-section" class="yayle-section position-relative text-center">
  <!-- Background -->
  <img src="{{ asset('images/yaylebrand.png') }}" alt="Yayle Brand" class="w-100 bg-img">

  <!-- Overlay content -->
  <div class="overlay-content position-absolute top-50 start-50 translate-middle text-dark p-4 rounded shadow">
    <img src="{{ asset('images/YayleLogo.png') }}" alt="Yayle" class="mb-3" style="max-height:70px;">
    
<p class="text-brand-red"><strong>Yayle</strong> merupakan rangkaian produk herbal berbasis madu yang dirancang khusus
  untuk mendukung tumbuh kembang dan kebutuhan anak-anak.</p>
<p class="text-brand-red">
  Produk ini telah hadir sejak 2021 dan diformulasikan dengan berbagai varian sesuai kebutuhan spesifik si kecil,
  seperti peningkatan nafsu makan, pertahanan tubuh, kemampuan belajar, hingga kesehatan pencernaan.
</p>



    <a href="#" class="btn btn-brand mt-2">Visit & Shop</a>
  </div>
</section>





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

.floating-img {
  position: absolute;
  width: 140px;
  height: auto;
  z-index: 1;
  opacity: 0.65;
  transition: transform 0.5s ease;
}
.floating-img:hover {
  transform: scale(1.1) rotate(0deg);
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
  position: relative;
  overflow: hidden;
  min-height: 500px;
}

.brand-bg img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.brand-detail-logo {
  max-height: 80px;
  width: auto;
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

.yayle-section {
  position: relative;
  overflow: hidden;
}

.bg-img {
  width: 100%;
  height: auto;
  display: block;
}

.overlay-content {
  background: rgba(255, 255, 255, 0.85); 
  max-width: 600px;
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

.text-brand-red {
  color: #8C1C1C;
}


</style>

@endsection

@extends('navbar')

@section('content')

<!-- Hero / Landing Section -->
  <section class="hero-section text-white position-relative" style="overflow:hidden;">
    <!-- Full Background Image -->
    <div class="hero-bg-img position-absolute top-0 start-0 w-100 h-100" style="z-index:1;">
      <img src="{{ asset('images/careers.png') }}" 
           alt="About Us" 
           class="w-100 h-100 object-fit-cover" 
           style="border-bottom-left-radius:80px; border-bottom-right-radius:80px; filter:brightness(0.6);">
    </div>
    <div class="container position-relative" style="z-index:2;">
      <div class="row align-items-center justify-content-center mb-2" style="min-height:520px;">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center" style="transform: translateY(-50px);"> 
        <p class="mb-3 fs-4" style="max-width: 1200px; line-height: 1.4;">
        "<strong>Satyalaksana </strong>membuka ruang 
        bagi setiap anak muda yang siap bertumbuh, menjaga agama,
        jiwa, akal, kehormatan, dan harta.”
        </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Growth Section -->
<section class="growth-section py-5">
  <div class="container text-center">
      <h2 class="fw-bold mb-3" style="color:#8C1C1C; margin-top:48px;">Growth at Satyalaksana</h2>
      <div class="mx-auto" style="max-width: 800px; margin-top:48px;">
<p class="product-text">
  Bertumbuh di Satyalaksana bukan hanya tentang bekerja, tetapi tentang membuka peluang seluas-luasnya 
  bagi setiap karyawan untuk berkembang.
</p>

<p class="product-text">
  Melalui pelatihan, pengembangan diri, dan budaya kerja yang berbasis growth mindset, 
  Satyalaksana hadir untuk menciptakan lingkungan yang menumbuhkan potensi.
  Harapannya, setiap individu tidak hanya bertumbuh untuk dirinya sendiri, 
  tetapi juga mampu menumbuhkan orang lain.
</p>

<p class="product-text">
  Bersama, kita bergerak menyokong keberlangsungan masjid-masjid Satyalaksana yang tersebar di seluruh bumi—sebagai wujud nyata dari pertumbuhan yang memberi manfaat.
</p>

      </div>
  </div>
</section>

<!-- Join Us Section -->
<section class="join-us-section text-white position-relative" style="overflow:hidden; margin-top:64px; background-color:#8C1C1C;">
  
  <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index:1; opacity:0.25;">
    <img src="{{ asset('images/joinus.png') }}" 
         alt="Join Us" 
         class="w-100 h-100 object-fit-cover">
  </div>

  <div class="container position-relative text-center" style="z-index:2; min-height:400px; display:flex; flex-direction:column; justify-content:center; align-items:center;">
    <h2 class="fw-bold mb-3" style="font-size:48px;">Yuk!</h2>
    <p class="fs-4 mb-4">Menjadi Bagian dari <strong><em>Satyalaksana</em></strong></p>
    <a href="#" class="btn btn-outline-light px-4 py-2" style="border-radius:12px;">VIEW ALL JOB</a>
  </div>
</section>

<!-- teams section -->




@include('footer')

  <style>
    
.hero-section {
  width: 100%;
  background-color: #8C1C1C;
  padding: 150px 0 0 0;
  position: relative;
  border-bottom-left-radius: 80px;
  border-bottom-right-radius: 80px;
  min-height: 700px; 
  overflow: hidden;
}
.hero-bg-img {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  pointer-events: none;
  z-index: 1;
}
.hero-bg-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-bottom-left-radius: 80px;
  border-bottom-right-radius: 80px;
  filter: brightness(0.6);
}
.hero-section .container {
  position: relative;
  z-index: 2;
}

  </style>


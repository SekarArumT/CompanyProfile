@extends('navbar')

@section('content')
  <!-- Hero / Landing Section -->
  <section class="hero-section text-white">
    <div class="container">
      <div class="row align-items-center mb-2">
        
        <!-- Left Content -->
        <div class="col-lg-6">
          <h1 class="fw-bold mb-3">Hi Leaders!</h1>
          <p class="mb-4">
              Mari Bertumbuh atas harapan, ilmu, kerja, dan cinta 
          </p>
          <h3 class="fw-bold mb-3" style="font-style: italic;">#Xaxenarakaxa</h3>
          
          <!-- Pagination / Indicators -->
          <div class="d-flex align-items-center mb-4">
            <span class="indicator active">1</span>
            <span class="indicator">2</span>
            <span class="indicator">3</span>
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-end mt-4">
          <a href="#" class="btn-play me-3" data-bs-toggle="modal" data-bs-target="#videoModal">
            <i class="bi bi-play-fill"></i>
          </a>
          <span>Watch Our Company Profile</span>
        </div>
      </div>

      <div class="hero-image-wrapper">
        <img src="{{ asset('images/landingPage.png') }}" 
            alt="About Us" 
            class="hero-image img-fluid">
      </div>
    </div>
  </section>


  <!-- About Us Section -->
  <section class="about-section py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-3">About Us</h2>
      <p class="about-text">
        PT. Satyalaksana Sangkala Adikarim Perkasa merupakan perusahaan 
        yang bergerak dalam bisnis retail Brand untuk produk Mom and Baby Care. 
        Brand kami adalah Yayle Vitamin Anak, Madudz, dan Richsweet.
      </p>

      <div class="row g-4">
        <div class="col-md-3">
          <div class="about-card p-4 rounded-4 text-white h-100">
            <div class="icon-wrapper mb-3">
              <i class="bi bi-people fs-2"></i>
            </div>
            <h5>Insan Satyalaksana</h5>
            <p class="mb-0">&gt;200</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="about-card p-4 rounded-4 text-white h-100">
            <div class="icon-wrapper mb-3">
              <i class="bi bi-building fs-2"></i>
            </div>
            <h5>Distribution Center</h5>
            <p class="mb-0">15</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="about-card p-4 rounded-4 text-white h-100">
            <div class="icon-wrapper mb-3">
              <i class="bi bi-briefcase fs-2"></i>
            </div>
            <h5>CSR Partners</h5>
            <p class="mb-0">2</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="about-card p-4 rounded-4 text-white h-100">
            <div class="icon-wrapper mb-3">
              <i class="bi bi-box-seam fs-2"></i>
            </div>
            <h5>SKU Products</h5>
            <p class="mb-0">6</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content bg-dark">
        <div class="modal-body p-0">
          <div class="ratio ratio-16x9">
            <iframe id="videoFrame" src="" title="YouTube video" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
        </div>
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <!-- Our Product Section -->
<section class="product-section text-center py-5">
  <div class="container">
    <h2 class="fw-bold mb-3">Our Product</h2>
    <p class="product-text">
      "Satyalaksana hadir dengan komitmen penuh menghadirkan produk alami terbaik, 
      yang aman, berkualitas, dan terpercaya untuk mendampingi setiap langkah 
      Bunda dalam merawat keluarga tercinta."
    </p>
  </div>
</section>

<!-- Product Carousel -->
<section class="product-carousel-section pt-3 pb-5">

  <div class="container text-center">
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Item 1 -->
<div class="carousel-item active">
  <div class="row justify-content-center align-items-center">
    
    <!-- Gambar -->
    <div class="col-md-4">
      <img src="{{ asset('images/yayle.png') }}" class="d-block w-100 rounded-4" alt="Yayle">
    </div>

    <!-- Teks -->
    <div class="col-md-6">
      <h5 class="mt-3">Yayle</h5>
      <p>
        Yayle merupakan rangkaian produk herbal berbasis madu yang dirancang khusus untuk mendukung 
        tumbuh kembang dan kebutuhan anak-anak. Produk ini telah hadir sejak 2021 dan diformulasikan 
        dengan berbagai varian sesuai kebutuhan spesifik si kecil, seperti peningkatan nafsu makan, 
        pertahanan tubuh, kemampuan belajar, hingga kesehatan pencernaan.
      </p>
    </div>

  </div>
</div>


        <!-- Item 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <img src="{{ asset('images/richsweet.png') }}" class="d-block w-100 rounded-4" alt="Richsweet">
              <h5 class="mt-3">Richsweet</h5>
              <p>Minyak Telon Richsweet adalah varian minyak telon dengan formula hangat yang aman untuk
                 bayi, anak, dan dewasa. Produk ini tersedia dalam beberapa aroma yang lembut dan
                tidak membuat mual, sehingga nyaman digunakan oleh sekeluarga.</p>
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <img src="{{ asset('images/madudiz.png') }}" class="d-block w-100 rounded-4" alt="Madudz">
              <h5 class="mt-3">Madudz</h5>
              <p>Madudiz adalah madu 100% alami yang diformulasikan untuk membantu menjaga
                 daya tahan tubuh. Diproses dengan metode higienis dan dikemas menggunakan botol 
                 PET food grade yang stabil dan tutup yang dirancang anti-tumpah. Produk ini juga 
                mengandung ekstrak royal jelly, sehingga menawarkan nilai lebih dibanding madu biasa </p>
            </div>
          </div>
        </div>

      </div>

 <!-- Custom Control -->
<button class="carousel-control-prev custom-control" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
 <i class="bi bi-arrow-left-circle-fill fs-1"></i>
</button>
<button class="carousel-control-next custom-control" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
  <i class="bi bi-arrow-right-circle-fill fs-1"></i>
</button>

    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section py-5">
  <div class="container">
    <div class="row">
      
      <!-- Left Content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <span class="text-uppercase small text-muted">Testimonial</span>
       <h2 class="fw-bold mb-3" style="color:#8B1C1C;">What They Say?</h2>
        <p class="mb-2">Our Products has got more than 1000+ positive ratings from our users</p>
        <p>Some of the Moms were greatly helped by our products</p>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 d-flex align-items-start">
        <div class="testimonial-card shadow-sm p-4 rounded-4 bg-white mt-lg-5 ms-lg-auto">
          <p class="mb-3">“Rasanya enak dan manis. Kualitasnya bagus, anak-anak suka meminumnya.”</p>
          <h6 class="mb-1">Gloria Rose</h6>
          <div class="d-flex align-items-center justify-content-between">
            <div class="text-warning me-2">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <small class="text-muted">12 reviews at Yelp</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- News & Event Section -->
<section class="news-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold mb-3">News & Events</h2>
      <p class="text-muted">Discover the newest updates, programs, and events.</p>
    </div>
    
    <div class="row">
      
      <!-- News Item -->
     <div class="col-lg-4 col-md-6 mb-4 d-flex">
        <div class="news-card shadow-sm rounded-4 overflow-hidden h-100">
          <img src="{{ asset('images/product.jpg') }}"class="w-100" alt="News Image">
          <div class="p-4">
            <small class="text-muted">12 Agustus 2025</small>
            <h5 class="fw-bold mt-2">Peluncuran Produk Baru</h5>
            <p class="text-muted">Kami resmi meluncurkan produk terbaru yang dirancang untuk mendukung gaya hidup sehat masyarakat modern.</p>
          </div>
        </div>
      </div>

      <!-- News Item -->
     <div class="col-lg-4 col-md-6 mb-4 d-flex">
        <div class="news-card shadow-sm rounded-4 overflow-hidden h-100">
          <img src="{{ asset('images/kolaborasi.jpeg') }}" class="w-100" alt="News Image">
          <div class="p-4">
            <small class="text-muted">3 Juli 2025</small>
            <h5 class="fw-bold mt-2">Cabang Baru di Surabaya</h5>
            <p class="text-muted">Kami membuka cabang baru di Surabaya dengan fasilitas modern untuk melayani pelanggan lebih baik.</p>
          </div>
        </div>
      </div>

      <!-- News Item -->
      <div class="col-lg-4 col-md-6 mb-4 d-flex">
        <div class="news-card shadow-sm rounded-4 overflow-hidden h-100">
          <img src="{{ asset('images/penghargaan.jpg') }}" class="w-100" alt="News Image">
          <div class="p-4">
            <small class="text-muted">20 Juni 2025</small>
            <h5 class="fw-bold mt-2">Penghargaan Perusahaan</h5>
            <p class="text-muted">Perusahaan kami dianugerahi penghargaan “Best Growing Company 2025” dari Asosiasi Bisnis Nasional.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<footer class="footer pt-4 pb-3">
  <div class="container">
    <div class="row">
      
<!-- Kiri: Logo + Description -->
<div class="col-lg-6 col-md-6 mb-3 d-flex align-items-start pt-5">
  <div class="pe-3 me-3 border-end border-white">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="180">
  </div>
  <p class="mb-0 text-white fw-bold">
    A retail brand for Mom and Baby Care products
  </p>
</div>


      <!-- Kanan: Company, Contact, More -->
      <div class="col-lg-6 col-md-6 ms-auto pt-2">
       <div class="row" style="padding-left: 7rem;">
          <!-- Company -->
          <div class="col-lg-4 col-md-4 mb-3">
            <h6 class="fw-bold text-white">Company</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="footer-link">About</a></li>
              <li><a href="#" class="footer-link">Careers</a></li>
              <li><a href="#" class="footer-link">Mobile</a></li>
            </ul>
          </div>

          <!-- Contact -->
          <div class="col-lg-4 col-md-4 mb-3">
            <h6 class="fw-bold text-white">Contact</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="footer-link">Help/FAQ</a></li>
              <li><a href="#" class="footer-link">Press</a></li>
              <li><a href="#" class="footer-link">Affiliates</a></li>
            </ul>
          </div>

          <!-- More -->
          <div class="col-lg-4 col-md-4 mb-3">
            <h6 class="fw-bold text-white">More</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="footer-link">Airlinefees</a></li>
              <li><a href="#" class="footer-link">Airline</a></li>
              <li><a href="#" class="footer-link">Low fare tips</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- Social Icons -->
    <div class="text-center my-2">
      <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
      <a href="#" class="footer-icon"><i class="bi bi-tiktok"></i></a>
      <a href="#" class="footer-icon"><i class="bi bi-youtube"></i></a>
      <a href="#" class="footer-icon"><i class="bi bi-linkedin"></i></a>
    </div>

    <!-- Copyright -->
    <div class="text-center text-white small">
      © Copyright 2025 PT. Satyalaksana Sangkala Adikarim Perkasa
    </div>
  </div>
</footer>



  
  <style>
  
    .hero-section .row { position: relative; z-index: 2; }
    .btn-play { position: relative; z-index: 3; }
    .hero-image { pointer-events: none; }

    .hero-image-wrapper { position: relative; text-align: center; margin-top: -360px; z-index: 1; }
    .hero-image { max-width: 800px; width: 100%; }
    .hero-section { width: 100%; background-color: #8C1C1C; padding: 70px 0 0 0; position: relative; border-bottom-left-radius: 80px; border-bottom-right-radius: 80px; }
    .indicator { display: inline-flex; justify-content: center; align-items: center; width: 40px; height: 40px; margin-right: 10px; border-radius: 50%; background-color: transparent; color: #F9C300; font-weight: 600; cursor: pointer; }
    .indicator.active { background-color: #F9C300; color: #fff; border: none; }

    .btn-play { display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; border-radius: 50%; background: #fff; color: #8C1C1C; font-size: 1.5rem; text-decoration: none; transition: all 0.3s ease; cursor: pointer; }
    .btn-play i { color: inherit; }
    .btn-play:hover { background: #F9C300 !important; color: #000 !important; transform: scale(1.1); }
    .btn-play:active { background: #d4a600 !important; color: #fff !important; transform: scale(0.95); }

.about-section {
  background: #fff; 
  padding-bottom: 100px; 
  color: #8C1C1C;
}


.about-section h2 {
  font-family: 'Poppins', sans-serif;
  margin-top: 30px;
}

.about-text {
  margin: 0 auto;
  max-width: 570px;
  line-height: 1.6;
  font-size: 15px;
}

.about-section .row {
  margin-top: 30px; 
}

.about-card {
  background: #8C1C1C;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  position: relative; 
  padding-top: 50px;
  margin-top: 40px;   
  min-height: 120px;   
  padding: 20px;       
}

.about-card h5 {
  margin-top: 40px;    
  font-size: 16px;     
  letter-spacing: 0.5px;
  font-family: 'Poppins', sans-serif;
}

.about-card p {
  margin-top: 5px;    
  font-size: 23;     
}

.icon-wrapper {
  background: #F9C300;
  width: 60px;         
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: -30px;          
  left: 50%;
  transform: translateX(-50%);
}

.about-text {
  margin: 0 auto;     
  max-width: 570px;     
  line-height: 1.6;    
  font-size: 15px;
}

.product-section {
  background: #fff;
  padding: 60px 0;
  color: #8C1C1C;
}

.product-section h2 {
  font-family: 'Poppins', sans-serif;
}

.product-text {
  margin: 0 auto;
  max-width: 600px;
  line-height: 1.7;
  font-size: 15px;
  color: #333;
}

.product-carousel-section h2 {
  color: #8C1C1C;
}

.carousel-item img {
  max-height: 300px;
  object-fit: contain;
}

/* Custom Carousel Control */
.custom-control {
  width: auto;
  background: none;
  border: none;
}

.custom-control i {
  color: #8C1C1C;      
  transition: 0.3s ease;
  text-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.custom-control i:hover {
  color: #F9C300;    
  transform: scale(1.2);
}

.testimonial-section {
  background: #ffffff;
  color: #333;
}

.testimonial-card {
  position: relative;
  border-left: 6px solid #f25454; 
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.testimonial-card p {
  font-style: italic;
  color: #555;
}

@media (min-width: 992px) {
  .testimonial-section .col-lg-6:last-child {
    margin-top: 180px; 
  }
}

.news-card {
  min-height: 400px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-section h2 {
  font-family: 'Poppins', sans-serif;
  color: #8C1C1C;
}

.news-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 24px rgba(0,0,0,0.1);
}

.news-card img {
  height: 220px;
  object-fit: cover;
}

.footer {
  background-color: #8B1C1C;
  color: #fff;
  padding-top: 100px;   
  padding-bottom: 100px; 
}

.footer .mb-4 {
  margin-bottom: 0.5rem !important; 
}

.footer .my-3 {
  margin: 0.5rem 0 !important; 
}

.footer p {
  margin-bottom: 0 !important; 
}

.footer-link {
  color: #fff;
  text-decoration: none;
  font-size: 11px;
}

.footer ul li {
  margin-bottom: 10px;
}

.footer-link:hover {
  text-decoration: underline;
}

.footer-icon {
  color: #fff;
  font-size: 20px;
  margin: 0 8px;
}


  </style>

    <script>
    const videoModal = document.getElementById('videoModal');
    const videoFrame = document.getElementById('videoFrame');
    const videoUrl = "https://www.youtube.com/embed/QdXlDpa_hvc?autoplay=1";

    videoModal.addEventListener('show.bs.modal', () => {
      videoFrame.src = videoUrl;
    });

    videoModal.addEventListener('hidden.bs.modal', () => {
      videoFrame.src = "";
    });
  </script>
@endsection

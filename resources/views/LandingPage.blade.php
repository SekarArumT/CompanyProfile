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
  font-size: 24px;     
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

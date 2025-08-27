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


  

@include('footer')

  <style>
  
    .hero-section .row { position: relative; z-index: 2; }
    .btn-play { position: relative; z-index: 3; }
    .hero-image { pointer-events: none; }

    .hero-image-wrapper { position: relative; text-align: center; margin-top: -360px; z-index: 1; }
    .hero-image { max-width: 800px; width: 100%; }
    .hero-section { width: 100%; background-color: #8C1C1C; padding: 70px 0 0 0; position: relative; border-bottom-left-radius: 80px; border-bottom-right-radius: 80px; }

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

.carousel-control-prev {
  left: 5%;
}

.carousel-control-next {
  right: 5%;
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

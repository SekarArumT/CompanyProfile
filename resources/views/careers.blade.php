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
   <a href="#" class="btn btn-outline-light px-4 py-2" data-bs-toggle="modal" data-bs-target="#careersModal">View All Job</a>
</section>

<!-- Modal -->
<div class="modal fade" id="careersModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Daftar Lowongan</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          @forelse($careers as $career)
            <div class="col-md-6 mb-4">
              <div class="job-card p-3 h-100">
                <div class="d-flex justify-content-between mb-2">
                  <span class="badge bg-light text-dark">{{ $career->job_type }}</span>
                  <span class="badge bg-light text-dark">{{ $career->location }}</span>
                </div>
                <h5 class="fw-bold">{{ $career->position }}</h5>
                <p class="mb-1 text-muted">{{ $career->department }}</p>
                <p class="mb-2">
                  <strong>Gaji:</strong> {{ $career->salary_range ?? 'N/A' }}
                </p>
                @if($career->link)
                  <a href="{{ $career->link }}" target="_blank" class="btn btn-dark w-100">Apply Now</a>
                @endif
              </div>
            </div>
          @empty
            <p class="text-center">Tidak ada lowongan saat ini.</p>
          @endforelse
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Meet Our Teams Section -->
<section class="teams-section py-4" style="background-color:#fff;">
  <div class="container text-center">
    <h2 class="fw-bold" style="color:#8C1C1C; margin-bottom:16px; margin-top: 45px;">MEET OUR TEAMS</h2>

    <div class="row justify-content-center g-4 mb-4">
      <!-- Business Development -->
      <div class="col-md-4 col-lg-3">
        <div class="team-card p-3 text-center">
          <div class="team-icon mb-3">
            <img src="{{ asset('images/business.png') }}" alt="Business Development" class="img-fluid" style="width:70px;">
          </div>
          <h6 class="fw-bold">Business <br> Development</h6>
        </div>
      </div>

      <!-- Human Capital General Affair -->
      <div class="col-md-4 col-lg-3">
        <div class="team-card p-3 text-center">
          <div class="team-icon mb-3">
            <img src="{{ asset('images/human.png') }}" alt="Human Capital General Affair" class="img-fluid" style="width:70px;">
          </div>
          <h6 class="fw-bold">Human Capital General Affair</h6>
        </div>
      </div>

      <!-- Data & Information Technology -->
      <div class="col-md-4 col-lg-3">
        <div class="team-card p-3 text-center">
          <div class="team-icon mb-3">
            <img src="{{ asset('images/data.png') }}" alt="Data & IT" class="img-fluid" style="width:70px;">
          </div>
          <h6 class="fw-bold">Data & Information Technology</h6>
        </div>
      </div>
    </div>


    <div class="row justify-content-center g-4">
      <!-- Finance, Accounting, and Tax -->
      <div class="col-md-4 col-lg-3">
        <div class="team-card p-3 text-center">
          <div class="team-icon mb-3">
            <img src="{{ asset('images/finance.png') }}" alt="Finance" class="img-fluid" style="width:70px;">
          </div>
          <h6 class="fw-bold">Finance, Accounting, and Tax</h6>
        </div>
      </div>

      <!-- Operation & Supply Chain (OPS) -->
      <div class="col-md-4 col-lg-3">
        <div class="team-card p-3 text-center">
          <div class="team-icon mb-3">
            <img src="{{ asset('images/ops.png') }}" alt="Operation & Supply Chain" class="img-fluid" style="width:70px;">
          </div>
          <h6 class="fw-bold">Operation & Supply Chain (OPS)</h6>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Photo Management Trainee -->
<section class="trainee-section py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-2" style="color:#8C1C1C;">MANAGEMENT TRAINEE</h2>
    <p class="mb-2">Program <strong>Satyalaksana Academy</strong></p>

    <div class="trainee-frame mx-auto p-4" 
         style="max-width:700px; border-radius:12px; background:#8C1C1C;">

      <!-- Carousel -->
      <div id="traineeCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner mb-3">
          <div class="carousel-item active">
            <img src="{{ asset('images/team.png') }}" 
                 class="d-block w-100 rounded" 
                 style="height:300px; object-fit:cover;" alt="Management Trainee 1">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/team.png') }}" 
                 class="d-block w-100 rounded" 
                 style="height:300px; object-fit:cover;" alt="Management Trainee 2">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/team.png') }}" 
                 class="d-block w-100 rounded" 
                 style="height:300px; object-fit:cover;" alt="Management Trainee 3">
          </div>
        </div>

<!-- Custom Indicator -->
<div class="custom-carousel-indicators d-flex justify-content-center mt-3">
  <span data-bs-target="#traineeCarousel" data-bs-slide-to="0" class="indicator active">1</span>
  <span data-bs-target="#traineeCarousel" data-bs-slide-to="1" class="indicator">2</span>
  <span data-bs-target="#traineeCarousel" data-bs-slide-to="2" class="indicator">3</span>
</div>

      </div>
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

.card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 12px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.product-text {
  letter-spacing: 1.6px;
}


.modal-header {
    border-bottom: none;
}

.modal-footer {
    border-top: none;
}

.team-card {
  background-color: #8C1C1C;
  color: white;
  border-radius: 16px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.team-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.2);
}
.team-icon {
  background-color: #FFC107; 
  border-radius: 50%;
  width: 100px;
  height: 100px;
  display:flex;
  align-items:center;
  justify-content:center;
  margin: 0 auto 20px auto;
}

.job-card {
  border: 1px solid #d1d1d1;
  border-radius: 12px;
  transition: all 0.3s ease;
  background: #fff;
}
.job-card:hover {
  border-color: #8C1C1C;
  box-shadow: 0 6px 16px rgba(0,0,0,0.1);
  transform: translateY(-3px);
}
.job-card h5 {
  font-size: 18px;
  margin-bottom: 4px;
}
.job-card p {
  font-size: 14px;
  margin-bottom: 0;
}

.indicator {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  margin: 0 6px;
  border-radius: 50%;
  background-color: transparent;
  border: 2px solid #F9C300;
  color: #F9C300;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.indicator.active {
  background-color: #F9C300;
  color: #fff;
}

  </style>

  <script>
  const traineeCarousel = document.querySelector('#traineeCarousel');
  const indicators = document.querySelectorAll('.custom-carousel-indicators .indicator');

  traineeCarousel.addEventListener('slid.bs.carousel', function (e) {
 
    indicators.forEach(ind => ind.classList.remove('active'));
  
    indicators[e.to].classList.add('active');
  });


  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      const carousel = bootstrap.Carousel.getInstance(traineeCarousel);
      carousel.to(index);
    });
  });
</script>



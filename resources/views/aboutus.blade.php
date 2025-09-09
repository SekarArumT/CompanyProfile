@extends('navbar')

@section('content')
  <!-- Hero / Landing Section -->
  <section class="hero-section text-white position-relative" style="overflow:hidden;">
    <!-- Full Background Image -->
    <div class="hero-bg-img position-absolute top-0 start-0 w-100 h-100" style="z-index:1;">
      <img src="{{ asset('images/about.png') }}" 
           alt="About Us" 
           class="w-100 h-100 object-fit-cover" 
           style="border-bottom-left-radius:80px; border-bottom-right-radius:80px; filter:brightness(0.6);">
    </div>
    <div class="container position-relative" style="z-index:2;">
      <div class="row align-items-center justify-content-center mb-2" style="min-height:520px;">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center" style="transform: translateY(-50px);">
          <h1 class="fw-bold mb-3">About Satyalaksana</h1>
          <p class="mb-4">
              PT. Satyalaksana Sangkala Adikarim Perkasa merupakan 
              perusahaan yang bergerak dalam bisnis retail Brand untuk 
              produk Mom and Baby Care. Brand kami adalah Yayle Vitamin Anak,
               Madudiz dan Richsweet. 
          </p>
          <div class="d-flex align-items-center justify-content-center mt-4">
            <a href="#" class="btn-play me-3" data-bs-toggle="modal" data-bs-target="#videoModal">
              <i class="bi bi-play-fill"></i>
            </a>
            <span>Watch Our Company Profile</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0">
        <h5 class="modal-title text-white" id="videoModalLabel">Company Profile Video</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="videoFrame" src="" frameborder="0" allowfullscreen allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Visi Section -->
<section class="visi-section py-5">
  <div class="container text-center">
      <h2 class="fw-bold mb-3" style="color:#8C1C1C; margin-top:48px;">Visi</h2>
      <div class="mx-auto" style="max-width: 450px; margin-top:48px;">
        <p class="product-text">
          Menjadi perusahaan kelas dunia yang mendapatkan barokah dari Tuhan
          YME atas agama, nyawa, akal, kehormatan dan harta
        </p>
      </div>
  </div>
</section>

<!-- Misi Section -->
<section class="misi-section py-5 position-relative">
  <div class="container text-center position-relative" style="background-color:#8C1C1C; border-radius:10px; z-index:2; overflow:hidden;  min-height:450px; ">
      <h2 class="fw-bold mb-4" style="color:#fff; margin-top:36px;">Misi</h2>
      <div class="mx-auto text-start" style="max-width: 650px; color:#fff; position:relative;  margin-top:36px; ">
        <ol>
          <li>Mendapatkan keuntungan dan cash flow yang baik dan bertumbuh minimal 20% per tahun.</li>
          <li>Melaksanakan standarisasi enam eksekusi:
            <ul>
              <li>Standarisasi manusia</li>
              <li>Standarisasi harga</li>
              <li>Standarisasi marketing</li>
              <li>Standarisasi produk baru</li>
              <li>Penambahan channel baru</li>
              <li>Digitalisasi dan sistem IT yang terintegrasi</li>
            </ul>
          </li>
          <li>
          Menyokong Masjid dengan semua perusahaan yang sudah untung memberikan sodakoh infaq ke masjid Satyalaksana dan semua masjid yg diurus Satyalaksana.
        </li>
        </ol>
        
      </div>
     
      <img src="{{ asset('images/compass.png') }}" 
           alt="Compass" 
           class="misi-bg-img"
           style="position: absolute; right: 0px; bottom: 0px; width: 450px; height: auto; object-fit: contain; z-index:1;">
  </div>
</section>

<!-- Value (GROWTH) Section -->
<section class="value-section py-5">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" style="color:#8C1C1C;">Value (GROWTH)</h2>
    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-stretch" style="height:100%;">
        <div class="d-flex mb-4">
          <div class="value-icon">G</div>
          <div>
            <h5 class="fw-bold mb-1">Great Teamwork,</h5>
            <p>Kolaborasi, komunikasi dan tanggung jawab secara aktif antar sesama Insan Satyalaksana</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <div class="value-icon">R</div>
          <div>
            <h5 class="fw-bold mb-1">Respect To Others</h5>
            <p>We respect people by valuing trust, empathy, and collaboration, and respect time.</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <div class="value-icon">O</div>
          <div>
            <h5 class="fw-bold mb-1">Over The Limits</h5>
            <p>Seluruh Insan Satyalaksana mampu melakukan inovasi dan kreativitas terus menerus dan memberikan yang terbaik</p>
          </div>
        </div>
      </div>
      <!-- Right Column -->
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-stretch" style="height:100%;">
        <div class="d-flex mb-4">
          <div class="value-icon">W</div>
          <div>
            <h5 class="fw-bold mb-1">Winning Team</h5>
            <p>Setiap Insan Satyalaksana mampu berdedikasi untuk bertumbuh bersama dan merayakan keberhasilan bersama</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <div class="value-icon">T</div>
          <div>
            <h5 class="fw-bold mb-1">Trust in God</h5>
            <p>Seluruh Insan Satyalaksana selalu mengaitkan setiap aktivitasnya pada kepercayaan atas Tuhan Yang Maha Esa</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <div class="value-icon">H</div>
          <div>
            <h5 class="fw-bold mb-1">Highest Benefit</h5>
            <p>Setiap Insan Satyalaksana mampu memberikan nilai tambah untuk dirinya, tim, pelanggan, perusahaan dan masyarakat secara luas</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Dharma Section -->
<section class="dharma-section py-5 position-relative">
  <div class="container text-center position-relative" style="background-color:#8C1C1C; border-radius:10px; z-index:2; overflow:hidden; min-height:350px;">
      <h2 class="fw-bold mb-4" style="color:#fff; margin-top:36px;">Dharma</h2>
      <div class="mx-auto text-start" style="max-width: 650px; color:#fff; position:relative; margin-top:36px;">
        <ul>
          <li>Perusahaan Satyalaksana adalah sumber kehidupan dan arah kehidupan kita bersama</li>
          <li>Kita wajib ikut merasa memiliki dan menjaga perusahaan ini</li>
          <li>Kita wajib menjaga persatuan dan kerjasama di perusahaan ini.</li>
          <li>Kita wajib memperbaiki terus menerus perusahaan ini.</li>
          <li>Hari ini harus lebih baik dari hari kemarin dan hari esok harus lebih baik dari hari ini</li>
        </ul>
      </div>

      <img src="{{ asset('images/neraca.png') }}" 
           alt="Compass" 
           class="misi-bg-img"
           style="position: absolute; left: 0px; bottom: 0px; width: 450px; height: auto; object-fit: contain; z-index:1;">
  </div>
</section>

<!-- Filosofi Perusahaan Section -->
<section class="filosofi-section py-5">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" style="color:#8C1C1C;">Filosofi Perusahaan</h2>
    <div class="row g-4">
      <!-- Left Column -->
      <div class="col-md-6">
        <div class="d-flex mb-4">
          <img src="{{ asset('images/icon-agama.png') }}" alt="Agama" class="filosofi-icon">
          <div>
            <h5 class="fw-bold mb-1">Agama</h5>
            <p>Insan Satyalaksana memahami agama secara komprehensif dan menjadikannya tuntunan utama dalam berkehidupan.</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <img src="{{ asset('images/icon-nyawa.png') }}" alt="Nyawa" class="filosofi-icon">
          <div>
            <h5 class="fw-bold mb-1">Nyawa</h5>
            <p>Insan Satyalaksana wajib menjaga atas nyawa dirinya dan nyawa perusahaan.</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <img src="{{ asset('images/icon-akal.png') }}" alt="Akal" class="filosofi-icon" style="width:70px; height:70px;">
          <div>
            <h5 class="fw-bold mb-1">Akal</h5>
            <p>Insan Satyalaksana wajib menjaga akal dengan belajar terus-menerus.</p>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6">
        <div class="d-flex mb-4">
         <img src="{{ asset('images/icon-kehormatan.png') }}" alt="Kehormatan" class="filosofi-icon" style="width:70px; height:50px;">
          <div>
            <h5 class="fw-bold mb-1">Kehormatan</h5>
            <p>Insan Satyalaksana wajib menjaga kehormatan diri sendiri, keluarga, dan perusahaan.</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <img src="{{ asset('images/icon-harta.png') }}" alt="harta" class="filosofi-icon">
          <div>
            <h5 class="fw-bold mb-1">Harta</h5>
            <p>Insan Satyalaksana wajib moncari harta yang halal dan barokah dermi menjaga 
              agama, nyawa akal, dan kehormatan</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- History Section -->
<section class="history-section py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5" style="color:#8C1C1C;">History</h2>

    <div class="d-flex justify-content-center align-items-center gap-4">
      <!-- Prev Button -->
<button id="prevBtn" class="btn btn-light rounded-circle shadow nav-arrow">
  <i class="bi bi-chevron-left"></i>
</button>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


      <!-- Circles Timeline -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="circle small" data-year="2020">2020</div>
        <div class="circle small" data-year="2021">2021</div>
        <div class="circle small" data-year="2022">2022</div>
        <div class="circle active" data-year="2023">2023</div>
        <div class="circle small" data-year="2024">2024</div>
        <div class="circle small" data-year="2025">2025</div>
      </div>

      <!-- Next Button -->
<button id="nextBtn" class="btn btn-light rounded-circle shadow nav-arrow">
  <i class="bi bi-chevron-right"></i>
</button>
    </div>

    <!-- Description -->
<div style="min-height:100px; margin-top:80px;">
  <p id="historyDesc" class="mb-0">
     Satyalaksana melakukan scale-up dengan memperluas jangkauan brand. Tidak hanya hadir di ranah digital,
      Satyalaksana mulai aktif di event offline dan masuk ke jalur distribusi offline.
  </p>
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


.btn-play {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #fff;
  color: #8C1C1C;
  font-size: 1.5rem;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.btn-play i { color: inherit; }
.btn-play:hover { background: #F9C300 !important; color: #000 !important; transform: scale(1.1); }
.btn-play:active { background: #d4a600 !important; color: #fff !important; transform: scale(0.95); }

.value-icon {
  width: 40px;
  height: 40px;
  background-color: #F9C300;
  color: #fff;
  font-weight: bold;
  font-size: 18px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 15px;
  flex-shrink: 0;
}
.value-section p {
  margin-bottom: 0;
  color: #444;
}
.value-section h5 {
  color: #000;
}
.value-section .row {
  display: flex;
  align-items: stretch;
}
.value-section .col-md-6 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
}

.filosofi-icon {
  width: 60px;
  height: 60px;
  margin-right: 15px;
  flex-shrink: 0;
  filter: brightness(1) saturate(1.2); 
}
.filosofi-section p {
  margin-bottom: 0;
  color: #444;
}
.filosofi-section h5 {
  color: #000;
}

.circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: #8C1C1C;
  color: #fff;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.4s ease, opacity 0.4s ease, font-size 0.4s ease;
  cursor: pointer;
  transform: scale(0.75); 
  opacity: 0.6;
  font-size: 0.9rem;
}
.circle.small {
  width: 60px;
  height: 60px;
  opacity: 0.6;
  font-size: 0.9rem;
}
.circle.active {
  transform: scale(1.5); 
  opacity: 1;
  font-size: 1.5rem;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  filter: invert(1);
}

.fade-out {
  opacity: 0;
  transition: opacity 0.4s ease;
}
.fade-in {
  opacity: 1;
  transition: opacity 0.4s ease;
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

<script>
const descs = {
  2020: "Awal mula Satyalaksana dibentuk sebagai wadah kolaborasi anak muda untuk mengembangkan potensi bisnis bersama.",
  2021: "Lahir Small Team Satelit, yaitu pembagian Satyalaksana menjadi tim-tim kecil yang fokus mengelola dan memasarkan berbagai produk, seperti Habbie, Vitabumin, dan produk Madu.",
  2022: "Satyalaksana mulai membangun identitas lebih kuat melalui Team Brand. Pada fase ini lahirlah beberapa brand baru, di antaranya Lega, Richsweet, dan Yayle.",
  2023: "Satyalaksana melakukan scale-up dengan memperluas jangkauan brand. Tidak hanya hadir di ranah digital, Satyalaksana mulai aktif di event offline dan masuk ke jalur distribusi offline.",
  2024: "Dilakukan restrukturisasi besar dengan menyatukan tim-tim satelit dan tim brand menjadi satu kesatuan yang lebih solid. Transformasi ini mengantarkan Satyalaksana menjadi perusahaan resmi dengan nama:PT. Satyalaksana Sangkala Adikarim Perkasa.",
  2025: " Satyalaksana memasuki fase transformasi besar dengan semangat For Multiply Benefit — menghadirkan kebermanfaatan yang berlipat ganda bagi tim, brand, dan masyarakat luas. Melahirkan brand baru Madudiz serta melakukan Rebranding Richsweet yang sebelumnya merupakan brand turunan dari Lega",
};

const circles = document.querySelectorAll('.circle');
const desc = document.getElementById('historyDesc');
let currentIndex = 3; 

function updateActive(index) {
  circles.forEach((c, i) => {
    c.classList.toggle('active', i === index);
    c.classList.toggle('small', i !== index);
  });

  const year = circles[index].dataset.year;

  desc.classList.add('fade-out');

  setTimeout(() => {
    desc.textContent = descs[year];
    desc.classList.remove('fade-out');
    desc.classList.add('fade-in');

    setTimeout(() => {
      desc.classList.remove('fade-in');
    }, 400); 
  }, 400); 
  currentIndex = index;
}


document.getElementById('nextBtn').addEventListener('click', () => {
  let nextIndex = (currentIndex + 1) % circles.length;
  updateActive(nextIndex);
});

document.getElementById('prevBtn').addEventListener('click', () => {
  let prevIndex = (currentIndex - 1 + circles.length) % circles.length;
  updateActive(prevIndex);
});

circles.forEach((circle, i) => {
  circle.addEventListener('click', () => updateActive(i));
});
</script>

@endsection
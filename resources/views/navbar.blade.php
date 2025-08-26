<!-- resources/views/layouts/navbar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'My Website')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


  <style>
        body {
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      padding: 1rem 0;
      background-color: #8C1C1C !important;
        transition: box-shadow 0.3s ease;

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

    .btn-search {
      border: none;
      background: none;
      color: #fff;
      font-size: 1.2rem;
    }

    body {
      padding-top: 80px;
    }

    .logo {
      height: 70px;
      width: auto;
      margin-right: 5px;
      margin-left: -50px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0"> 
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Brands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Event</a>
          </li>
        </ul>
        
        <!-- Search Icon -->
        <button class="btn-search ms-lg-3">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- Content -->
    @yield('content')
    
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('shadow-sm');
    } else {
      navbar.classList.remove('shadow-sm');
    }
  });
</script>

</body>
</html>

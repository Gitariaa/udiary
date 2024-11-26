<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UprofileS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo-1.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    header {
      background: linear-gradient(135deg, #316e52, #3c964b);
      padding: 15px 0;
    }
    .logo h1 {
      color: white;
      font-size: 28px;
    }
    .navmenu a {
      color: rgb(45, 107, 66);
      font-weight: bold;
    }
    .page-title {
      background: #2b5830;
      color: rgb(59, 129, 69);
      padding: 20px 0;
      text-align: center;
    }
    .profile-info {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .profile-info:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }
    .btn-success, .btn-danger {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-success:hover, .btn-danger:hover {
      transform: scale(1.05);
    }
    .breadcrumbs ol {
      display: flex;
      gap: 10px;
      justify-content: center;
      list-style: none;
    }
    .breadcrumbs ol li a {
      color: rgb(50, 110, 70);
    }
    .btn i {
      margin-right: 8px;
    }
  </style>
</head>

<body class="blog-page">
  <header id="header" class="header fixed-top">
    <div class="branding">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <h1>UdiarY<span>.</span></h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/') }}">Back</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <div class="page-title">
      <h2>Welcome to Uprofiles</h2>
    </div>

    <section id="blog-posts" class="blog-posts section">
      <div class="container" style="margin-top: 50px;">
        @if (Auth::check())
        <div class="text-center">
          <h1 style="font-size: 40px; font-weight: bold; text-shadow: 2px 2px 4px rgba(30, 92, 50, 0.733);">
            Profile {{ Auth::user()->role === 'admin' ? 'Admin' : 'Author' }}
          </h1>
          <div class="profile-info bg-white p-4 mt-4" style="border-radius: 15px;">
            <div class="avatar mb-3">
              <img src="{{ asset('assets/img/logo-1.png') }}" alt="Avatar" class="rounded-circle" width="100">
            </div>
            <h2>Informasi Pribadi</h2>
            <p><i class="bi bi-person-fill"></i> <strong>Nama:</strong> {{ Auth::user()->name }}</p>
            <p><i class="bi bi-envelope-fill"></i> <strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><i class="bi bi-shield-lock-fill"></i> <strong>Role:</strong> {{ Auth::user()->role === 'admin' ? 'Administrator' : 'Author' }}</p>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary mt-3">
              <i class="bi bi-box-arrow-left"></i> Back
            </a>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger mt-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="bi bi-box-arrow-right"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
          </div>
        </div>
        @else
        <div class="text-center">
          <h1>Profil</h1>
          <p>Silakan login untuk melihat informasi profil Anda.</p>
          <a href="{{ route('login') }}" class="btn btn-success mt-3">
            <i class="bi bi-box-arrow-in-right"></i> Login
          </a>
        </div>
        @endif
      </div>
    </section>
  </main>

  <x-footer />

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  <script>
    window.addEventListener("load", () => {
      const preloader = document.getElementById("preloader");
      if (preloader) {
        preloader.style.display = "none";
      }
    });
  </script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

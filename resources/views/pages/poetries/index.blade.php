<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UpoetrY - UdiarY</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo-1.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
 
   <!-- Main CSS File -->
   <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="blog-page">

  <header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <h1 class="sitename">UdiarY</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            @auth
              <li><a href="{{ url('poetries/create') }}">
              <span class="bi bi-plus-circle"></span>
              Create New </a></li>
            @endauth

            <li class="dropdown"><a href="#"><span>All</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/poems') }}">UpoeM</a></li>
                <li><a href="{{ url('/pantuns') }}">UpantuN</a></li>
                <li><a href="{{ url('/quotes') }}">UquoteS</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/')}}">Back<br></a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>UpoetrY</h1>
              <p class="mb-0">"The beauty of poetry lies in its ability to capture complex human experiences in just a few carefully chosen words."</p>
              <p> Keindahan puisi terletak pada kemampuannya untuk menangkap pengalaman manusia yang kompleks hanya dengan beberapa kata yang dipilih dengan hati-hati.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url('/')}}">UdiarY</a></li>
            <li class="current">UpoetrY</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

    <div class="container">
      <h2 class="poetry-title">
        <i class="fas fa-pen-alt"> List of Poetry</i>
      </h2>

        <div class="row">
          @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
            @endif

            @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
            @endif
            
            @foreach($poetries as $poetry)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <small class="text-muted">{{ $poetry->theme }}</small>
                        <h5 class="card-title">
                            <a href="{{ route('poetries.show', $poetry->id) }}" class="text-dark-blue">
                                {{ $poetry->title }}
                            </a>
                        </h5>
                        <p class="card-text"><strong>{{ $poetry->user->name }}</strong></p>
                        <p class="card-text text-muted">{{ $poetry->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    
  </main>

  <x-footer />

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
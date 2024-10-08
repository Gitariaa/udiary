<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UpoetrY - UdiarY</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
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

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

  <header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">UdiarY</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href ="{{ url('poetries/create')}}">
                <span class="bi bi-plus-circle"></span>
                Create New
            </a></li>

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
        <div class="row">
            @foreach($poetries as $poetry)
                <div class="col-sm-6 col-md-4 col-lg-3"> <!-- Setiap kartu puisi -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-muted">{{ $poetry->theme }}</h6> <!-- Menampilkan tema -->
                            <h5 class="card-title">
                                <a href="{{ route('poetries.show', $poetry->id) }}" class="text-dark">
                                    {{ $poetry->title }}
                                </a>
                            </h5>
                            <p class="text-muted mb-2">{{ $poetry->user->name }}</p> <!-- Menampilkan nama penulis -->
                            <p class="text-muted">{{ $poetry->created_at->format('M d, Y') }}</p> <!-- Menampilkan tanggal -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article>
              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Lisa Neymar</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 30, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Denis Peterson</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 30, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Mika Lendon</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Feb 14, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

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
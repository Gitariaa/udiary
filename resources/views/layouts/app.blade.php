<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UdiarY</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/menulis-1.png') }}" rel="icon">
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

<body class="index-page">

  <div id="app">

    <x-header />

  </div>

  <main class="main">
    

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background" >

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 ><span style="color:rgb(14, 51, 10)">Welcome to </span><span class="accent">UdiarY</span></h2>
            <p data-aos="fade-up" style="font-size: 16px; color:rgb(219, 245, 233)">
              Each work is a spark of light that appears in the midst of darkness, giving a glimmer of hope in a place that is silent and untouched.
              It illuminates the hidden spaces, the deepest corners that are never touched by ordinary sight. 
              In every stroke, every color, and every detail, there is a glimmer of light that penetrates deep into the soul, evoking hidden emotions and forgotten feelings. 
              The work speaks in an invisible language, conveying profound messages that words cannot express, yet feel so real in their silence.
            </p>

          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="{{ asset('assets/img/menulis-1.png') }}" class="img-fluid" alt="" width="600" height="500">
        </div>
        
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

              <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-book"></i></div>
                  <h4 class="title"><a href="{{ url('/poems') }}" class="stretched-link">UpoeM</a></h4>
                </div>
              </div><!--End Icon Box -->

              <div class="col-xl-3 col-md-6 nav-link">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
                  <h4 class="title"><a href="{{ url('/poetries') }}" class="stretched-link">UpoetrY</a></h4>
                </div>
              </div><!--End Icon Box -->

              <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-lightbulb"></i></div>
                  <h4 class="title"><a href="{{ url('/pantuns') }}" class="stretched-link">UpantuN</a></h4>
                </div>
              </div><!--End Icon Box -->

              <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-quote"></i></div>
                  <h4 class="title"><a href="{{ url('/quotes') }}" class="stretched-link">UquoteS</a></h4>
                </div>
              </div><!--End Icon Box -->

            </div>
          </div>
        </div>

    </section><!-- /Hero Section -->

 <!-- Scroll Top -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up"></i></a>

   <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Udiary<br></h2>
        <p>"Ekspresikan dan tuangkan isi hati Anda; biarkan kata-kata menjembatani perasaan dan kenangan!"</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Tuangkan Setiap Perasaan dan Momen Berharga Menjadi Karya Indah Bersama Udiary!!</h3>
            <img src="{{ asset('assets/img/puisi1.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>Menumpahkan hari ke dalam syair, puisi, pantun, dan quotes adalah seni menjalin kata-kata yang mampu mengalirkan perasaan serta pengalaman menjadi harmoni yang memukau.</p>
            <p>Syair dan puisi menjadi wadah bagi jiwa yang ingin menyelami kedalaman emosi, membiarkan setiap kata melukis kenangan, kebahagiaan, atau kesedihan dalam ritme yang lembut, namun menggema di hati. </p>
            <p>Setiap bait adalah cermin dari momen hidup, membangkitkan rasa yang mungkin tersembunyi, menyentuh tidak hanya penulis, tetapi juga mereka yang terhanyut membacanya.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Melalui bentuk-bentuk ekspresi ini, hari yang berlalu tidak hanya sekadar kenangan, tetapi sebuah karya kecil yang abadi, terpatri dalam kata.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>UpoetrY (Puisi)</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>UpoeM (Syair)</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>UpantuN (Pantun)</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>UquoteS (Kutipan)</span></li>
              </ul>
              <p>
                Di sisi lain, pantun dan quotes menawarkan cara yang lebih sederhana namun tetap sarat makna, menyampaikan pesan dengan ringkas namun tajam. Pantun memikat lewat rima yang lincah, mengajak senyum di setiap akhir kalimat, sementara quotes mampu merangkum kebijaksanaan hidup dalam satu baris yang singkat, namun dalam.
              </p>

              <div class="position-relative mt-4">
                <img src="{{ asset('assets/img/puisi2.jpg') }}" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
      
    </section><!-- /About Section -->

    
  </main>
  <div class="text-center mt-3">
    <small class="text-muted">Pastikan Anda login terlebih dahulu! Agar Anda bisa membuat Udiary Anda.</small>
  </div>


  <x-footer />

 
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>UdiarY</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">

</head>

<body class="index-page">

    <div id="app">

        <x-header />

    </div>

    <main class="main">

        @if (session('showInfoAlert') && !auth()->check())
            <div id="infoAlert" class="alert alert-info alert-dismissible fade show shadow-lg rounded"
                style="padding: 10px; margin-top: 75px; position: relative; border-left: 5px solid #17a2b8; background-color: #e9f7fd; color: #0c5460;">
                <div style="display: flex; align-items: center;">
                    <i class="bi bi-info-circle-fill" style="font-size: 24px; margin-right: 10px; color: #17a2b8;"></i>
                    <div>
                        <strong style="font-size: 18px;">Perhatian!</strong>
                        <p style="margin: 0;">Jangan lupa cek Uinfo terlebih dahulu untuk pengalaman terbaik.</p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                    style="position: absolute; top: 10px; right: 10px; color: #0c5460;"></button>
            </div>
        @endif

        <!-- Hero Section -->
        <section id="hero" class="hero section accent-background">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2>
                            <span style="color: rgb(14, 51, 10)">Welcome to </span>
                            <span class="accent">UdiarY</span>
                            @auth
                                <small
                                    style="font-size: 0.8em; color: rgb(233, 243, 232);">{{ Auth::user()->name }}!</small>
                            @endauth
                        </h2>
                        <p data-aos="fade-up" style="font-size: 16px; color:rgb(219, 245, 233)">
                            Each artwork is a spark of light that illuminates the darkness, awakening hope in quiet
                            places.
                            Through its strokes of color and detail, the piece touches the soul, evoking hidden emotions
                            that words cannot express.
                            In its silence, the artwork speaks, conveying profound messages that feel real and full of
                            meaning.🫧🌌
                        </p>
                        <p data-aos="fade-up" style="font-size: 15px; color:rgb(196, 226, 212)">
                            "Setiap karya seni adalah percikan cahaya yang menerangi kegelapan, membangkitkan harapan di
                            tempat yang sunyi.
                            Melalui goresan warna dan detailnya, karya tersebut menyentuh jiwa, membangkitkan emosi
                            tersembunyi yang tak bisa diungkapkan dengan kata-kata.
                            Dalam diamnya, karya itu berbicara, menyampaikan pesan mendalam yang terasa nyata dan penuh
                            makna.🫧🌌"
                        </p>

                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('assets/img/logoo.png') }}" class="img-fluid" alt="" width="600"
                            height="500">
                    </div>

                </div>
                @auth
                    <div class="d-flex justify-content-start mt-5" data-aos="fade-up">
                        <p class="me-3">
                            <a href="{{ route('profile') }}" class="btn btn-get-started"
                                style="transition: background-color 0.3s, transform 0.3s; border-radius: 25px; display: flex; align-items: center;">
                                <i class="bi bi-people me-2"></i> UprofileS
                            </a>
                        </p>
                    </div>
                @endauth
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
                                <h4 class="title"><a href="{{ url('/poetries') }}" class="stretched-link">UpoetrY</a>
                                </h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-lightbulb"></i></div>
                                <h4 class="title"><a href="{{ url('/pantuns') }}" class="stretched-link">UpantuN</a>
                                </h4>
                            </div>
                        </div><!--End Icon Box -->

                        <div class="col-xl-3 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-quote"></i></div>
                                <h4 class="title"><a href="{{ url('/quotes') }}" class="stretched-link">UquoteS</a>
                                </h4>
                            </div>
                        </div><!--End Icon Box -->

                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up"></i></a>

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
                        <img src="{{ asset('assets/img/puisi1.jpg') }}" class="img-fluid rounded-4 mb-4"
                            alt="">
                        <p>Menumpahkan hari ke dalam syair, puisi, pantun, dan quotes adalah seni menjalin kata-kata
                            yang mampu mengalirkan perasaan serta pengalaman menjadi harmoni yang memukau.</p>
                        <p>Syair dan puisi menjadi wadah bagi jiwa yang ingin menyelami kedalaman emosi, membiarkan
                            setiap kata melukis kenangan, kebahagiaan, atau kesedihan dalam ritme yang lembut, namun
                            menggema di hati. </p>
                        <p>Setiap bait adalah cermin dari momen hidup, membangkitkan rasa yang mungkin tersembunyi,
                            menyentuh tidak hanya penulis, tetapi juga mereka yang terhanyut membacanya.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Melalui bentuk-bentuk ekspresi ini, hari yang berlalu tidak hanya sekadar kenangan,
                                tetapi sebuah karya kecil yang abadi, terpatri dalam kata.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>UpoetrY (Puisi)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>UpoeM (Syair)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>UpantuN (Pantun)</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>UquoteS (Kutipan)</span></li>
                            </ul>
                            <p>
                                Di sisi lain, pantun dan quotes menawarkan cara yang lebih sederhana namun tetap sarat
                                makna, menyampaikan pesan dengan ringkas namun tajam. Pantun memikat lewat rima yang
                                lincah, mengajak senyum di setiap akhir kalimat, sementara quotes mampu merangkum
                                kebijaksanaan hidup dalam satu baris yang singkat, namun dalam.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="{{ asset('assets/img/puisi2.jpg') }}" class="img-fluid rounded-4"
                                    alt="">
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var infoAlert = document.getElementById("infoAlert");
                if (infoAlert) {
                    infoAlert.classList.add("fade");
                    setTimeout(() => infoAlert.remove(), 500); // Hilang setelah animasi fade
                }
            }, 10000); // Hilang setelah 10 detik
        });
    </script>

</body>


</html>

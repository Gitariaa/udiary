<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Uinfo - UdiarY</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@400;600;700&display=swap"
        rel="stylesheet">

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
            font-family: 'Roboto', sans-serif;
            background-color: #f7f9fc;
            color: #333;
        }

        .card-header {
            background-color: #2f9c7cda;
            color: white;
            font-weight: bold;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .list-group-item {
            border: none;
            padding: 1rem;
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        .list-group-item:hover {
            background-color: #f0f0f0;
        }

        .section-title {
            font-size: 2rem;
            color: #55be8ac7;
            font-weight: 600;
            text-align: center;
            margin-bottom: 1rem;
        }

        .section-description {
            font-size: 1.2rem;
            color: #777;
            margin-bottom: 1.5rem;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: 500;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .card-body ul {
            list-style: disc;
            margin-left: 1.5rem;
        }
    </style>
</head>

<body>

    <header id="header" class="header fixed-top">

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <h1 class="sitename">UdiarY</h1>
                    <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li class="dropdown"><a href="#"><span>All</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ url('/poetries') }}">UpoetrY</a></li>
                                <li><a href="{{ url('/poems') }}">UpoeM</a></li>
                                <li><a href="{{ url('/pantuns') }}">UpantuN</a></li>
                                <li><a href="{{ url('/quotes') }}">UquoteS</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/') }}">Back<br></a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main" style="padding-top: 70px;">
        <div class="container my-5">
            <h1 class="section-title mb-4">
                <i class="bi bi-info-circle me-2"></i> Informasi Aplikasi <span class="text-success">UdiarY</span>
            </h1>

            <!-- Panduan Penggunaan -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="h4">Panduan Penggunaan</h2>
                </div>
                <div class="card-body">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            <strong>Registrasi Akun:</strong>
                            <ul>
                                <li>Klik "U" lalu pilih "Ulogin" di pojok kanan atas pada halaman utama.</li>
                                <li>Klik "Register Here" yang berada di bawah tombol login.</li>
                                <li>Masukkan nama, email, dan buat kata sandi.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <strong>Masuk ke Akun:</strong>
                            <ul>
                                <li>Klik "U" lalu pilih "Ulogin" di pojok kanan atas pada halaman utama.</li>
                                <li>Masukkan email dan kata sandi yang sudah didaftarkan.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <strong>Buat Catatan Baru:</strong>
                            <ul>
                                <li>Pilih jenis karya di halaman utama: <strong>Puisi, Syair, Pantun, atau Quotes</strong>.</li>
                                <li>Klik tombol "Create New" di pojok kanan atas.</li>
                                <li>Tulis karyamu di editor yang tersedia.</li>
                                <li>Klik "Send" untuk menyimpan dan mempublikasi karya anda.</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- Ketentuan Penggunaan -->
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="h4">Ketentuan Penggunaan</h2>
                </div>
                <div class="card-body">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            <strong>Konten yang Dilarang:</strong>
                            <ul>
                                <li>Dilarang memposting konten yang mengandung SARA, ujaran kebencian, atau pornografi.</li>
                                <li>Tidak diperbolehkan menyalin karya orang lain tanpa izin.</li>
                                <li>Siapa saja yang membuat konten mengandung SARA dan lainnya atau menyalin karya orang, ADMIN akan menghapus karya tersebut.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <strong>Privasi Pengguna:</strong>
                            <ul>
                                <li>Data pengguna seperti email dijaga kerahasiaannya(informasi pribadi pengguna hanya dapat dilihat oleh pengguna).</li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="text-center">
                <small class="section-description">Panduan dan ketentuan ini akan membantu pengguna baru memanfaatkan web <strong>UdiarY</strong> secara optimal dan sesuai aturan.</small>
            </div>
        </div>
    </main>

    <x-footer />

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

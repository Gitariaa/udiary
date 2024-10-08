<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UquoteS - Create</title>
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
<body>
    <div id="app">

        <x-header />
    
    </div>
    
    <div class="container">
        <section class="section">
            <div class="card shadow-sm border-0">
                <div class="card-body bg-light">
                    <div class="card-body card-title text-center mb-4 text-uppercase">
                        <h4 class="fw-bold" style="font-size: 30px; color:rgb(44, 101, 60)" >
                            <span class="bi bi-pen"></span>
                            Create New - Quotes
                        </h4>
                    </div>

                    <form action="{{ route('quotes.store') }}" method="POST" class="bg-light p-4 rounded shadow">
                        @csrf
    
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control shadow-sm" id="title" name="title" placeholder="Masukkan judul quote..." required>
                                </div>
                        
                                <div class="form-group mb-4">
                                    <label for="theme" class="form-label">Theme<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control shadow-sm" id="theme" name="theme" placeholder="Masukkan tema quote..." required>
                                </div>
                        
                                <div class="form-group mb-4">
                                    <label for="content" class="form-label">Your Quote<span class="text-danger">*</span></label>
                                    <textarea class="form-control shadow-sm" id="content" name="content" rows="5" placeholder="Tulis isi quote Anda di sini..." required></textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="name" class="form-label">Your Name<span class="text-danger">*</span></label>
                                    <textarea class="form-control shadow-sm" id="name" name="name" placeholder="Masukkan nama Anda..." required></textarea>
                                </div>

                                <script>
                                    document.addEventListener('DOMConcentLoaded', function () {
                                        const contentArea = document.getElementById('content');

                                        contentArea.addEventListener('input', function () {
                                            this.style.height = 'auto';
                                            this.style.height = this.scrollHeight + 'px';
                                        });
                                    });
                                </script>
                        
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}"> <!-- Ambil user_id dari auth -->
                        
                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-success rounded-pill shadow-lg"> Save </button>
                                    <a href="{{ route('quotes.index') }}" class="btn btn-primary rounded-pill shadow-lg"> Cancel </a>
                                    <a href="{{ route('quotes.index') }}" class="btn btn-secondary rounded-pill shadow-lg"> Back </a>
                                </div> 
                            </div>
                        </div>
                    </form>
                <div class="text-center mt-3">
                    <small class="text-muted"> Semua kolom wajib diisi!!</small>
                </div>
                </div>
            </div>
        </section>
    </div>    
    
    <x-footer />
</body>
</html>
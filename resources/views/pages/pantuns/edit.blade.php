<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UpantuN - Edit</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/menulis-1.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
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
                        <h4 class="fw-bold" style="font-size: 30px; color:rgb(44, 101, 60)">
                            <span class="bi bi-pen"></span>
                            Edit Pantun
                        </h4>
                    </div>

                    <form action="{{ route('pantuns.update', $pantun->id) }}" method="POST" class="bg-light p-4 rounded shadow">
                        @csrf
                        @method('PUT') <!-- Menggunakan metode PUT untuk update -->
    
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control shadow-sm" id="title" name="title" value="{{ old('title', $pantun->title) }}" placeholder="Masukkan judul pantun..." required>
                                </div>
                        
                                <div class="form-group mb-4">
                                    <label for="theme" class="form-label">Theme<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control shadow-sm" id="theme" name="theme" value="{{ old('theme', $pantun->theme) }}" placeholder="Masukkan tema pantun..." required>
                                </div>
                        
                                <div class="form-group mb-4">
                                    <label for="content" class="form-label">Your Pantun<span class="text-danger">*</span></label>
                                    <textarea class="form-control shadow-sm" id="content" name="content" rows="5" placeholder="Tulis isi pantun Anda di sini..." required>{{ old('content', $pantun->content) }}</textarea>
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const contentArea = document.getElementById('content');

                                        contentArea.addEventListener('input', function () {
                                            this.style.height = 'auto';
                                            this.style.height = this.scrollHeight + 'px';
                                        });
                                    });
                                </script>
                                
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('pantuns.index') }}" class="btn btn-outline-primary rounded-pill shadow-lg"><i class="bi bi-x-circle"></i> Cancel </a>
                                    <button type="submit" class="btn btn-outline-success rounded-pill shadow-lg"><i class="bi bi-save"></i> Update </button>
                                    <a href="{{ route('pantuns.index') }}" class="btn btn-outline-secondary rounded-pill shadow-lg"><i class="bi bi-arrow-right-circle"></i> Back </a>
                                </div> 
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <small class="text-muted"> Semua kolom wajib diisi!! | SELAMAT MENGEDIT!</small>
                    </div>
                </div>
            </div>
        </section>
    </div>    
    
    <x-footer />
</body>
</html>
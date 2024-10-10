<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>UpantuN - Show</title>
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
<body>
    <div id="app">

        <x-header />
    
    </div>

    <div class="container">
        <section class="section mt-5">
            <div class="card shadow-sm border-0">
                <div class="card-body bg-light">
                    <div class="card-title text-center mb-4 text-uppercase">
                        <h5 class="fw-bold" style="font-size: 30px; color:rgb(44, 101, 60)">
                            <span class="bi bi-eye"></span>
                            Pantun
                        </h5>
                    </div>
    
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- Pantun Details -->
                            <div class="card mb-4 shadow-sm border-0">
                                <div class="card-body bg-white rounded shadow-lg p-4">
                                    <!-- Title -->
                                    <div class="mb-4 text-center">
                                        <h5 class="text-uppercase fw-bold text-success">{{ $pantuns->title }}</h5>
                                        <small class="text-muted">Posted by: {{ $pantuns->user->name }} | Theme: {{ $pantuns->theme }}</small>
                                    </div>
    
                                    <!-- Content -->
                                    <div class="mb-4 border border-success rounded text-center bg-light shadow-sm" id="pantun-content" style="padding: 0.5rem;">
                                        <p class="mb-0 text-muted" style="font-style: italic; font-size: 20px; padding: 0; margin: 0;">
                                            {{ $pantuns->content }}
                                        </p>
                                    </div>
                                    
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const contentElement = document.getElementById('pantun-content');
                                            const contentText = contentElement.innerHTML;
                                            contentElement.innerHTML = contentText.replace(/\n/g, '<br>');
                                        });
                                    </script>
    
                                    <!-- Date and User -->
                                    <div class="text-end">
                                        <small class="text-muted">Created at: {{ $pantuns->created_at->format('d M, Y') }}</small><br>
                                        <small class="text-muted">Updated at: {{ $pantuns->updated_at->format('d M, Y') }}</small>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Navigation Buttons -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('pantuns.index') }}" class="btn btn-secondary rounded-pill shadow-lg">
                                    <i class="bi bi-arrow-left-circle"></i> Back
                                </a>
    
                                <div class="d-flex">
                                    <a href=" " class="btn btn-primary rounded-pill shadow-lg mx-2">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
    
                                    <form action=" " method="POST" onsubmit="return confirm('Are you sure to delete this pantun?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger rounded-pill shadow-lg">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Footer Message -->
                    <div class="text-center mt-5">
                        <small class="text-muted">Enjoy your time with inspiring words!</small>
                    </div>
                </div>
            </div>
        </section>
    </div>
   
    <x-footer />
</body>
</html>
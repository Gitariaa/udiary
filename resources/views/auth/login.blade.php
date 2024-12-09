<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udiary - Login</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Background Gradient Soft */
        body {
            background: linear-gradient(135deg, #e8f5e9, #fef9e7);
            font-family: 'Roboto', sans-serif;
        }

        /* Card Style */
        .card {
            background: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Button Hijau Tua yang Soft */
        .btn-soft-green {
            background-color: #2e7d32;
            color: white;
            border: none;
        }

        .btn-soft-green:hover {
            background-color: #256629;
            color: white;
        }

        /* Form Floating */
        .form-floating label {
            font-size: 0.9rem;
            color: #555;
        }

        .form-floating input {
            border-radius: 0.5rem;
            border: 1px solid #ccc;
        }

        /* Warna latar belakang tabel form login */
        .card {
            background-color: #b5eebd;
            /* Warna hijau tua soft */
            border-radius: 1rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Tambahkan efek bayangan */
        }
    </style>
</head>

<body>

    <div id="app">

        <x-header />

    </div>

    <section class="vh-100" style="background-color: #d8f3dc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-black" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h2 class="fw-bold mb-2 text-uppercase" style="color: #008080;">Login - Udiary</h2>
                            <p class="text-muted mb-5">Please enter your login credentials</p>

                            @if ($errors->any())
                                <div class="alert alert-danger text-start">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="name@example.com" value="{{ old('email') }}" required>
                                    <label for="email">Email Address</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-4 position-relative">
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                    <i class="bi bi-eye-slash position-absolute" id="togglePassword"
                                        style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button class="btn btn-outline-success btn-lg btn-block" type="submit">Login</button>
                            </form>

                            <div class="mt-3">
                                <p class="mb-0">Don't have an account?
                                    <a href="{{ route('register') }}" class="text-success fw-bold">Register Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center mt-3">
        <small class="text-muted">Pastikan Anda login terlebih dahulu! Agar Anda bisa membuat Udiary Anda.</small>
    </div>

    <x-footer />

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
        // Toggle password visibility for the main password field
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function(e) {
            // Toggle the password visibility
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Toggle eye icon
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    </script>
</body>

</html>

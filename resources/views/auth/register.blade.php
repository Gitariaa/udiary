<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udiary - Register</title>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

    <section class="min-vh-100 d-flex align-items-center" style="background-color: #d8f3dc;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4" style="font-weight: bold; color: #2d6a4f;">Register - Udiary
                            </h2>
                            <p class="text-center text-muted mb-4">Please enter your details to create an account.</p>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input type="text" id="name" class="form-control" name="name"
                                        placeholder="Enter your name" required />
                                    <label for="name" class="form-label">Your Name</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="name@example.com" value="{{ old('email') }}" required>
                                    <label for="email">Your Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-4 position-relative">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Enter your password" required />
                                    <label for="password" class="form-label">Password</label>
                                    <i class="bi bi-eye-slash position-absolute" id="togglePassword"
                                        style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                                </div>

                                <div class="form-floating mb-4 position-relative">
                                    <input type="password" id="password_confirmation" class="form-control"
                                        name="password_confirmation" placeholder="Confirm your password" required />
                                    <label for="password_confirmation" class="form-label">Repeat Your Password</label>
                                    <i class="bi bi-eye-slash position-absolute" id="togglePasswordConfirmation"
                                        style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-outline-success " type="submit">Register</button>
                                </div>
                            </form>

                            <div class="mt-3 text-center">
                                <p class="mb-0">Already have an account?
                                    <a href="{{ route('login') }}" class="text-success fw-bold">Login Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="text-center mt-3">
        <small class="text-muted">Pastikan Anda memiliki akun untuk dapat Login! UdiarY</small>
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

        // Toggle password visibility for the password confirmation field
        const togglePasswordConfirmation = document.getElementById('togglePasswordConfirmation');
        const passwordConfirmationField = document.getElementById('password_confirmation');

        togglePasswordConfirmation.addEventListener('click', function(e) {
            // Toggle the password visibility
            const type = passwordConfirmationField.type === 'password' ? 'text' : 'password';
            passwordConfirmationField.type = type;

            // Toggle eye icon
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    </script>

</body>

</html>

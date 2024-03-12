<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- TailwindCSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('frontend/icon.png') }}" rel="icon">

    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: white;
        }
    </style>

</head>

<body class="bg-p-100 w-screen overflow-x-hidden">
    <img
        class="object-cover w-full h-full fixed z-[-100] bottom-0"
        src="{{ asset('/frontend/bg.png') }}"
        alt="background-image"
    >
    <main class="flex gap-10 justify-center p-20 items-center">
        <img
            class="w-[450px]"
            src="{{ asset('/auth/logo-text.png') }}"
            alt="IO Fest Icon"
        >
        <div class="py-8 px-12 duration-500 hover:backdrop-blur bg-white bg-opacity-10 text-white">
            <h3 class="scroll-m-20 text-3xl font-semibold tracking-tight">
                Login
            </h3>

            <p>Glad you're back.</p>

            <form 
                class="flex flex-col gap-2"
                novalidate 
                action="{{ route('login') }}"
                method="POST">
                @csrf
                <div>
                    <input 
                        class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                        type="email" 
                        name="email"
                        placeholder="Email Address" 
                        required
                    >
                </div>

                <div>
                    <input 
                        class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                        type="password" 
                        name="password"
                        placeholder="Password" 
                        required
                    >
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember"
                            value="true" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <p class="small mb-0 text-center">~ or ~</p>

                        <a href="#" style="text-decoration: none; margin-right:10px">
                            <button class="btn btn-danger">
                                <i class="fab fa-google"></i> Google
                            </button>
                        </a>
                        <a href="#" style="text-decoration: none;">
                            <button class="btn btn-primary">
                                <i class="fab fa-github"></i> Github
                            </button>
                        </a>
                        <p class="small mt-3">Don't have account? <a href="/register">Create
                                an
                                account</a></p>
                    </div>
                </div>
            </form>

            <!--
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ route('login') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('backend/assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">I/O Fest</span>
                                </a>
                            </div>

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-1 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('login') }}"
                                        method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="email">@</span>
                                                <input type="text" name="email"
                                                    class="form-control form-control @error('email') is-invalid @enderror"
                                                    placeholder="Enter your email address..." id="email"
                                                    value="{{ old('email') }}"required>
                                                <div class="invalid-feedback">Please enter your email.</div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="form-control form-control
                                            @error('password') is-invalid @enderror"
                                                id="password" placeholder="Enter your password..." required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center">
                                                <p class="small mb-0 text-center">~ or ~</p>

                                                <a href="#" style="text-decoration: none; margin-right:10px">
                                                    <button class="btn btn-danger">
                                                        <i class="fab fa-google"></i> Google
                                                    </button>
                                                </a>
                                                <a href="#" style="text-decoration: none;">
                                                    <button class="btn btn-primary">
                                                        <i class="fab fa-github"></i> Github
                                                    </button>
                                                </a>
                                                <p class="small mt-3">Don't have account? <a href="/register">Create
                                                        an
                                                        account</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        -->

        </div>
    </main><!-- End #main -->

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>

</html>

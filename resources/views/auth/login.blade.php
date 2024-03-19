<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
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

<body class="bg-db-100 h-screen w-screen overflow-hidden">
    <img
        class="object-cover w-full h-full fixed z-[-100] bottom-0 shrink"
        src="{{ asset('/frontend/bg.png') }}"
        alt="background-image"
    >
    <main class="h-full flex gap-5 sm:gap-24 justify-center py-20 px-10 sm:px-44 items-center">
        <a href="/">
            <img
                class="w-[450px] flex-1 hidden lg:block"
                src="{{ asset('/auth/logo-text.png') }}"
                alt="IO Fest Icon"
            >
        </a>

        <div class="py-10 px-12 duration-500 hover:backdrop-blur bg-white bg-opacity-10 text-white grow max-w-[450px] shrink-0">
            <h3 class="scroll-m-20 text-3xl font-black tracking-tight">
                Login
            </h3>

            <p class="mb-3">Glad you're back.</p>

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
                        pattern="^\S+@\S+\.\S+$"
                        value=""
                    >
                </div>

                <div>
                    <input
                        class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                        type="password"
                        name="password"
                        placeholder="Password"
                        value=""
                    >
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        value="true"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label
                        class="form-check-label font-semibold"
                        for="remember"
                    >
                        Remember me
                    </label>
                </div>

                <button
                    class="login-btn rounded-lg bg-b-vibrant p-2 font-semibold hover:bg-opacity-70 active:bg-opacity-60 duration-300 disabled:bg-b-30"
                    type="submit"
                    disabled
                >
                    Login
                </button>

                <a class="font-semibold self-center" href='#'>
                    Forgot password?
                </a>

                <div class="flex flex-col gap-2 items-center">
                    <div class="flex items-center gap-4 self-stretch">
                        <div class="border-2 rounded-lg flex-1"></div>
                        <p class="text-xl font-semibold tracking-tight">
                            Or
                        </p>
                        <div class="border-2 rounded-lg flex-1"></div>
                    </div>

                    <div class="flex gap-4">
                        <a href="#">
                            <svg class="w-12 hover:scale-110 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                <path d="M1 1h22v22H1z" fill="none"/>
                            </svg>
                        </a>

                        <a href="#">
                            <svg class="w-12 hover:scale-110 duration-300"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
                                <path d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>

                    <p>
                        Don't have account?
                        <a class="font-semibold hover:text-b-10 duration-200" href="/register">
                            Create an account
                        </a>
                    </p>

                    <div class="flex gap-3">
                        <a class="text-xs duration-200 hover:translate-y-[-2px]" href="#">Terms & Conditions</a>
                        <a class="text-xs duration-200 hover:translate-y-[-2px]" href="#">Support</a>
                        <a class="text-xs duration-200 hover:translate-y-[-2px]" href="#">Customer Care</a>
                    </div>
                </div>

            </form>

        </div>
    </main>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Form Validation -->
    <script>
        const loginBtn = document.querySelector('.login-btn');
        const email = document.querySelector('input[name="email"]');
        const password= document.querySelector('input[name="password"]');
        loginBtn.disabled = true;

        function setButtonStatus() {
            console.log("running");
            const validEmail = email.checkValidity()
                && email.value !== ''
                && email !== null;

            const validPassword = password.checkValidity()
                && password.value !== ''
                && password.value !== null
                && password.value.length >= 8;

            if (validEmail && validPassword) {
                loginBtn.disabled = false;
            } else {
                loginBtn.disabled = true;
            }
        }

        email.addEventListener('input', setButtonStatus);
        password.addEventListener('input', setButtonStatus);
    </script>

</body>

</html>

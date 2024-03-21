<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
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
        class="object-cover w-full h-full fixed z-[-100] bottom-0"
        src="{{ asset('/frontend/bg.png') }}"
        alt="background-image"
    >
    <main class="flex gap-24 justify-center py-20 px-44 items-center">
        <a href="/">
            <img
                class="w-[450px] shrink grow-0 hidden lg:block"
                src="{{ asset('/auth/logo-text.png') }}"
                alt="IO Fest Icon"
            >
        </a>
        <div class="py-10 px-12 duration-500 hover:backdrop-blur bg-white bg-opacity-10 text-white shrink-0 min-w-[300px] max-w-[500px]">
            <h3 class="scroll-m-20 text-3xl font-black tracking-tight">
                Create an Account
            </h3>

            <p class="mb-3">Please, Welcome to I/O Festival!</p>

            <form
                class="flex flex-col gap-2"
                novalidate
                action="{{ route('register') }}"
                method="POST">
                @csrf
                <div class="flex flex-col gap-2 mb-0">
                    <div class="flex flex-col">
                        <input
                            class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                            type="text"
                            name="username"
                            placeholder="Username"
                            value=""
                        >
                        <span class="self-end text-red-600 font-extrabold text-sm h-6">
                        </span>
                    </div>

                    <div class="flex flex-col">
                        <input
                            class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                            type="email"
                            name="email"
                            placeholder="Email Address"
                            pattern="^\S+@\S+\.\S+$"
                            value=""
                        >
                        <span class="self-end text-red-600 font-extrabold text-sm h-6">
                        </span>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <input
                        class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                        type="password"
                        name="password"
                        placeholder="Password"
                        value=""
                    >

                    <input
                        class="bg-white bg-opacity-10 font-bold text-white py-1 px-2 w-full focus:outline-none "
                        type="password"
                        name="confirm-password"
                        placeholder="Confirm Password"
                        value=""
                    >

                    <span class="self-end text-red-600 font-extrabold text-sm h-6">
                    </span>
                </div>

                <div class="form-check">
                    <input 
                        class="form-check-input" 
                        type="checkbox" 
                        name="remember"
                        value="true" 
                        id="acceptTerms"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label 
                        class="font-semibold" 
                        for="acceptTerms"
                    >
                        I agree and accept the terms and conditions
                    </label>
                </div>

                <button 
                    id="create-account"
                    class="login-btn rounded-lg bg-b-vibrant p-2 font-semibold hover:bg-opacity-70 active:bg-opacity-60 duration-300 disabled:bg-b-30" 
                    type="submit"
                    disabled
                >
                    Create Account
                </button>

                <div class="flex flex-col gap-2 items-center">
                    <p>
                        Already have an account? 
                        <a class="font-semibold hover:text-b-10 duration-200" href="/login">
                            Login
                        </a>
                    </p>
                </div>

            </form>

        </div>

    </main>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <script>
        const usernameInput = document.querySelector('input[name="username"]');
        const emailInput = document.querySelector('input[name="email"]');
        const passInput = document.querySelector('input[name="password"]');
        const confirmPassInput = document.querySelector('input[name="confirm-password"]');
        const termsCondition = document.querySelector('#acceptTerms');
        const registerBtn = document.querySelector('#create-account');
        registerBtn.disabled = true;

        const usernameLabel = document.querySelector('input[name="username"] + span');
        const emailLabel = document.querySelector('input[name="email"] + span');
        const passLabel = document.querySelector('input[name="confirm-password"] + span');

        function setButtonStatus() {
            const user = validUsername();
            const email = validEmail();
            const pass = validPassword();
            const agree = termsCondition.checked;

            if (user && email && pass && agree)
                registerBtn.disabled = false;
            else 
                registerBtn.disabled = true;
        }

        function validUsername() {
            const empty = usernameInput.value === '';
            const validLength = usernameInput.value.length >= 8;

            const noSpace = usernameInput.value !== '' 
                && !/\s/g.test(usernameInput.value);

            if (empty) {
                usernameLabel.textContent = '';
            } else if (!validLength) {
                usernameLabel.textContent = 'At least 8 characters.';
            } else if (!noSpace) {
                usernameLabel.textContent = 'Must not have white space.';
            } else {
                usernameLabel.textContent = '';
                return true;
            }

            return false;
        }
        
        function validEmail() {
            const empty = emailInput.value === '';
            const valid = emailInput.checkValidity();

            if (empty) {
                emailLabel.textContent = '';
            } else if (valid) {
                emailLabel.textContent = '';
                return true;
            } else {
                emailLabel.textContent = 'Invalid Email.'
            }

            return false;
        }

        function validPassword() {
            const empty = passInput.value === ''
                || passInput.value === null;

            const validLength = passInput.value.length >= 8;

            const validConfirm = 
                passInput.value === confirmPassInput.value;

            if (empty) {
                passLabel.textContent = '';
            } else if (!validLength) {
                passLabel.textContent = 'At least 8 characters.';
            } else if (!validConfirm && confirmPassInput.value !== '') {
                passLabel.textContent = 'Password does not match.';
            } else {
                passLabel.textContent = '';
                return true;
            }

            return false;
        }

        const inputs = [usernameInput, emailInput, passInput, confirmPassInput, termsCondition];

        inputs.forEach(item => item.addEventListener('input', setButtonStatus));

    </script>

</body>

</html>

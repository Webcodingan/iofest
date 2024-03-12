<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IO Fest</title>


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
            /* Actual CSS */
            body {
                font-family: 'Inter', sans-serif;
                color: white;
            }

            .carousel-item {
                transition: all 200ms;
                width: calc(30vw - 100px);
            }

            .carousel-item button {
                color: transparent;
                transition: all 200ms;
            }

            .carousel-item:hover button {
                color: white;
                background-color: #240A2A;
            }

            .carousel-item:hover {
                background-color: #B432D4;
            }

            #carousel {
                display: flex;
                justify-content: flex-start;
            }

            #wrapper {
                transition: all 0.5s;
            }

        </style>

    </head>

    <body class="bg-p-100 w-screen overflow-x-hidden">
        <div class="flex gap-20 items-center h-16 bg-db-60 fixed px-8 w-full top-0 z-50">
            <a href="#hero" class="h-full">
                <img
                    class="h-full object-contain"
                    src="{{ asset('frontend/logo.png') }}"
                    alt="logo"
                >
            </a>
            <ul class="flex items-center flex-1 justify-around font-semibold text-lg">
                <li class="bg-current duration-200 hover:bg-db-40 py-1 px-3 rounded-full"><a href="#about">About</a></li>
                <li class="bg-current duration-200 hover:bg-db-40 py-1 px-3 rounded-full"><a href="#competition">Competition</a></li>
                <li class="bg-current duration-200 hover:bg-db-40 py-1 px-3 rounded-full"><a href="#sponsors">Sponsors</a></li>
                <li class="bg-current duration-200 hover:bg-db-40 py-1 px-3 rounded-full"><a href="#talks">Talk Show</a></li>
            </ul>

            <a href="{{ url('/home') }}">
                <button class="bg-p-base hover:bg-p-60 active:bg-p-70 py-2 px-4 text-white font-sans font-semibold text-md rounded-full duration-300">
                    Login
                </button>
            </a>
        </div>

        <div class="w-full h-auto">
            <img
                class="object-cover w-full h-full fixed z-[-100] bottom-0"
                src="{{ asset('/frontend/bg.png') }}"
                alt="background-image"
            >

            <!-- Hero Section -->
            <div id="hero" class="flex items-center justify-center gap-20 w-full h-screen">
                <img
                    class="w-[450px]"
                    src="{{ asset('/frontend/logo-big.png') }}"
                    alt="main-logo"
                >
                <div class="flex flex-col items-center">
                    <h2 class="scroll-m-20 text-4xl font-extrabold tracking-tight text-white mb-2">
                        TechSphere
                    </h2>
                    <h3 class="scroll-m-20 text-2xl font-semibold tracking-tight text-white mb-8">
                        Unleash Your Creativity, Expand Your Journey
                    </h3>

                    <a href="{{ url('/home') }}">
                        <button class="bg-p-base hover:bg-p-60 active:bg-p-70 py-2 px-4 text-white font-extrabold text-md rounded-full text-2xl duration-300">
                            Join Now
                        </button>
                    </a>
                </div>
            </div>

            <!-- About Section -->
            <div id="about" class="flex items-center justify-center gap-20 w-full py-10">
                <div class="flex flex-col border-1 p-4 rounded-xl backdrop-blur-lg hover:backdrop-blur-2xl duration-500">
                    <h2 class="scroll-m-20 text-4xl font-extrabold tracking-tight mb-10">
                        What is IO Fest?
                    </h2>
                    <p class="scroll-m-20 text-xl font-semibold tracking-tight max-w-[40ch] mb-3">
                        I/O Festival 2024 merupakan acara terbesar yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Tekologi Informasi (BEM FTI) Universitas Tarumanagara, dimana pelajar dari berbagai tingkatan, baik universitas maupun SMA/SMK, diundang untuk berkompetisi dalam berbagai bidang lomba, seperti:
                    </p>

                    <ul class="ml-6">
                        <li class="list-disc scroll-m-20 text-xl font-semibold tracking-tight">UI/UX Design</li>
                        <li class="list-disc scroll-m-20 text-xl font-semibold tracking-tight">Web Development</li>
                        <li class="list-disc scroll-m-20 text-xl font-semibold tracking-tight">Business Plan</li>
                        <li class="list-disc scroll-m-20 text-xl font-semibold tracking-tight">Game Development</li>
                    </ul>
                </div>

                <img
                    class="w-[450px]"
                    src="{{ asset('/frontend/what-is-io.png') }}"
                    alt="main-logo"
                >
            </div>


            <!-- Competition Section -->
            <div id="competition" class="flex flex-col items-center justify-center gap-0 w-full py-10">
                <h2 class="scroll-m-20 text-4xl font-extrabold tracking-tight mt-5 border-b pb-2">
                    Competition List
                </h2>

                <div id="carousel" class="overflow-x-hidden w-4/5 py-5 h-max relative">
                    <div class="absolute z-10 top-48 flex w-full justify-between">
                        <button class="prev bg-p-60 hover:bg-p-80 duration-200 p-2 rounded-full text-p-100">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                        </button>
                        <button class="next bg-p-60 hover:bg-p-80 duration-200 p-2 rounded-full text-p-100">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                        </button>
                    </div>

                    <div id='wrapper' class="flex flex-row gap-11 items-center px-10 m-0 w-max">

                        <div class="carousel-item bg-p-100 rounded-2xl flex flex-col justify-between items-center p-4 hover:scale-110 duration-200 h-96 m-0">
                            <img
                                class="h-44"
                                src="{{ asset('frontend/business-case.png') }}"
                                alt="Business Plan"
                            >
                            <h3 class="scroll-m-20 text-xl font-extrabold tracking-tight text-white group-hover:bg-green-500">
                                Business Plan
                            </h3>
                            <p class="scroll-m-20 text-md font-medium tracking-tight text-center">
                                Proposal dan presentasi yang berisi perencanaan bisnis
                            </p>

                            <a href="{{ url('/home') }}">
                                <button class="p-3 font-sans font-semibold text-xs rounded-full">
                                    Lebih Lanjut
                                </button>
                            </a>
                        </div>

                        <div class="carousel-item bg-p-100 rounded-2xl flex flex-col items-center justify-between p-4 hover:scale-110 duration-200 h-96 m-0">
                            <img
                                class="h-44"
                                src="{{ asset('frontend/web-dev.png') }}"
                                alt="Web Development"
                            >
                            <h3 class="scroll-m-20 text-xl font-extrabold tracking-tight text-white group-hover:bg-green-500">
                                Web Development
                            </h3>
                            <p class="scroll-m-20 text-md font-medium tracking-tight text-center">
                                Berkompetisi untuk mengembangkan suatu website yang berkaitan dengan tema dan subtema kegiatan I/O Festival 2024
                            </p>

                            <a href="{{ url('/home') }}">
                                <button class="p-3 font-sans font-semibold text-xs rounded-full">
                                    Lebih Lanjut
                                </button>
                            </a>
                        </div>

                        <div class="carousel-item bg-p-100 rounded-2xl flex flex-col items-center justify-between p-4 hover:scale-110 duration-200 h-96 m-0">
                            <img
                                class="h-44"
                                src="{{ asset('frontend/ui-ux.png') }}"
                                alt="UI/UX Design"
                            >
                            <h3 class="scroll-m-20 text-xl font-extrabold tracking-tight text-white group-hover:bg-green-500">
                                UI/UX Design
                            </h3>
                            <p class="scroll-m-20 text-md font-medium tracking-tight text-center">
                                Desain antarmuka sistem ataupun produk berbasis Android/IOS yang berorientasi pada kenyamanan dan kemudahan pengguna
                            </p>

                            <a href="{{ url('/home') }}">
                                <button class="p-3 font-sans font-semibold text-xs rounded-full">
                                    Lebih Lanjut
                                </button>
                            </a>
                        </div>

                        <div class="carousel-item bg-p-100 rounded-2xl flex flex-col items-center justify-between p-4 hover:scale-110 duration-200 h-96 m-0">
                            <img
                                class="h-44"
                                src="{{ asset('frontend/game-dev.png') }}"
                                alt="Game Development"
                            >
                            <h3 class="scroll-m-20 text-xl font-extrabold tracking-tight text-white group-hover:bg-green-500">
                                Game Development
                            </h3>
                            <p class="scroll-m-20 text-md font-medium tracking-tight text-center">
                                Berkompetisi dan pengembangan berinovasi industri game yang berkaitan dengan tema dan subtema kegiatan I/O Festival 2024
                            </p>

                            <a href="{{ url('/home') }}">
                                <button class="p-3 font-sans font-semibold text-xs rounded-full">
                                    Lebih Lanjut
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sponsors Section -->
            <div id="sponsors" class="flex flex-col items-center justify-center gap-20 w-full h-screen">
                <h2 class="scroll-m-20 text-4xl font-extrabold tracking-tight mb-10 border-b pb-2">
                    Sponsors & Media Partners
                </h2>

            </div>

            <!-- Talk Show Section -->
            <div id="talks" class="flex flex-col items-center justify-center gap-10 w-full h-screen px-52">
                <h2 class="scroll-m-20 text-4xl font-extrabold tracking-tight border-b pb-2">
                    Talk Show List
                </h2>

                <div class="flex gap-20 w-full justify-center px-12">
                    <div class="flex flex-col items-center p-4 backdrop-blur-xl hover:backdrop-blur-3xl duration-500 rounded-lg border-1 flex-1">
                        <img
                            class="w-auto"
                            src="{{ asset('/frontend/talkshow1.jpg') }}"
                            alt="main-logo"
                        >
                        <h3 class="mb-2 text-2xl font-semibold tracking-tight">
                            Business Talkshow
                        </h3>

                        <div>
                            <h4 class="scroll-m-20 text-lg font-semibold tracking-tight">
                                Date: 29 April 2024
                            </h4>
                            <h4 class="scroll-m-20 text-lg font-semibold tracking-tight">
                                Guest: Michelle Monrow & Daniel Johnson
                            </h4>
                        </div>
                    </div>


                    <div class="flex flex-col items-center p-4 backdrop-blur-xl hover:backdrop-blur-3xl duration-500 rounded-lg border-1 flex-1">
                        <img
                            class="w-auto"
                            src="{{ asset('/frontend/talkshow2.jpg') }}"
                            alt="main-logo"
                        >
                        <h3 class="mb-2 text-2xl font-semibold tracking-tight">
                            Indo Comptech
                        </h3>

                        <div>
                            <h4 class="scroll-m-20 text-lg font-semibold tracking-tight">
                                Date: 29 April 2024
                            </h4>
                            <h4 class="scroll-m-20 text-lg font-semibold tracking-tight">
                                Guest: Bill Gates
                            </h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="bg-db-60 w-full px-8 py-2">
            <div class="flex items-center justify-between">
                <div>
                    <a href="#hero">
                        <img
                            class="h-24"
                            src="{{ asset('frontend/logo.png') }}"
                            alt="logo"
                        >
                    </a>

                    <h2 class="scroll-m-20 text-3xl font-extrabold tracking-tight text-white mb-2">
                        TechSphere
                    </h2>
                    <h3 class="scroll-m-20 text-xl font-bold tracking-tight text-white mb-4">
                        Unleash Your Creativity, Expand Your Journey
                    </h3>

                    <div class="flex gap-12">
                        <a href='#' class="duration-300 text-db-40 hover:brightness-200">
                            Privacy & Policy
                        </a>

                        <ul>
                            <li><a href="#about" class="duration-200 text-db-40 hover:brightness-200">About</a></li>
                            <li><a href="#competition" class="duration-200 text-db-40 hover:brightness-200">Competition</a></li>
                            <li><a href="#sponsors" class="duration-200 text-db-40 hover:brightness-200">Sponsors</a></li>
                            <li><a href="#talks" class="duration-200 text-db-40 hover:brightness-200">Talk Show</a></li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col items-end gap-4">
                    <div class="bg-db-50 h-12 flex gap-4 w-auto p-2">
                        <!-- Facebook -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill='currentColor' d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>

                        <!-- Twitter -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg>

                        <!-- Youtube -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>

                        <!-- Instagram -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>

                        <!-- Linkedin -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg>

                        <!-- Line -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z"/></svg>

                        <!-- WhatsApp -->
                        <svg class="text-db-30 h-full hover:brightness-200 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    </div>

                    <div class="flex gap-10">
                        <img
                            class="h-12"
                            src="{{ asset('frontend/footer-fti.png') }}"
                            alt="logo"
                        >
                        <img
                            class="h-12"
                            src="{{ asset('frontend/footer-bem.png') }}"
                            alt="logo"
                        >
                    </div>

                </div>

            </div>
            <h3 class="scroll-m-20 text-xl font-semibold tracking-tight text-center mt-5">
                © IO Fest 2024. All Rights Reserved.
            </h3>

        </div>


        <script>
            const carousel = document.querySelector('#carousel');
            const slider = document.querySelector('#wrapper');
            const prev = document.querySelector('.prev');
            const next = document.querySelector('.next');

            let direction = -1;

            next.addEventListener('click', () => {
                if (direction === 1)
                    slider.appendChild(slider.firstElementChild);

                direction = -1;
                carousel.style['justify-content'] = 'flex-start';
                slider.style['transform'] = 'translate(calc(-30vw + 60px))';
                next.setAttribute('disabled', 'disabled');

                setTimeout(() => {
                    slider.appendChild(slider.firstElementChild);

                    slider.style['transition'] = 'none';
                    slider.style['transform'] = 'translate(0)';
                }, 500)

                setTimeout(() => {
                    slider.style['transition'] = 'all 500ms';
                    next.removeAttribute('disabled');
                }, 600)
            })

            prev.addEventListener('click', () => {
                if (direction === -1)
                    slider.prepend(slider.lastElementChild);

                direction = 1;
                carousel.style['justify-content'] = 'flex-end';
                slider.style['transform'] = 'translate(calc(30vw - 60px))';
                prev.setAttribute('disabled', 'disabled');

                setTimeout(() => {
                    slider.prepend(slider.lastElementChild);

                    slider.style['transition'] = 'none';
                    slider.style['transform'] = 'translate(0)';
                }, 500)

                setTimeout(() => {
                    slider.style['transition'] = 'all 500ms';
                    prev.removeAttribute('disabled');
                }, 600)
            })

        </script>
    </body>
</html>

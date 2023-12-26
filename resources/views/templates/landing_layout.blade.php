<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Pengaturan bahasa -->
    <link rel="alternate" hreflang="en" href="https://yourwebsite.com/en/page.html" />
    <link rel="alternate" hreflang="id" href="https://yourwebsite.com/id/page.html" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectHub</title>
    @vite(['resources/css/app.css'])
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <meta name="description"
        content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <meta name="title" content="Login ke Akun ProjectHub Anda">
    <!-- keywords diutamakan untuk yg berkaitan dengan isi konten -->
    <meta name="keywords" content="freelance, projecthub, project">
    <meta name="robots" content="index, archive">
    <meta property="og:title" content="Login to ProjectHub - Hasilkan Uang dari Internet">
    <meta property="og:description"
        content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <meta property="og:url" content="https://www.projecthub.id/login">
    <meta property="og:image" content="https://www.projecthub.id/images/projecthub.jpg">
    <meta property="og:site_name" content="ProjectHub">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

    <style>
    header {
        color: white;
    }

    .dropdown ul {
        color: black;
    }

    header.scrolled {
        background-color: white;
        color: #020179;
        border-color: #020179;
        position: fixed;
        top: 0;
        width: 100%;
        transition: background-color 0.5s;
    }

    #bahasa.scroll {
        border-color: #020179;
    }

    #btnLogin.scrollbtn {
        border-color: #020179;
    }

    .scrollbtn:hover {
        background-color: #020179;
        color: white;
    }

    #hover.overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
        transition: 0.1s;
    }

    .line-language {
        border-color: white
    }

    #bahasa.scroll .line-language {
        border-color: #020179;
    }

    .splide__pagination__page {
        background-color: #999;
    }

    .splide__pagination__page.is-active {
        background-color: #020179;
    }

    li .splide__pagination__page {
        pointer-events: none;
    }

    #flagID .line-language {
        border-color: #020179;
    }

    #controls button:hover svg path {
        fill: white;
    }

    .wrapper .outer {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper .card {
        opacity: 0;
        pointer-events: none;
        position: absolute;
        animation: animate 15s linear infinite;
        animation-delay: calc(3s * var(--delay));
    }

    .outer:hover .card {
        animation-play-state: paused;
    }

    .wrapper .card:last-child {
        animation-delay: calc(-3s * var(--delay));
    }

    @keyframes animate {
        0% {
            opacity: 0;
            transform: translateY(100%) scale(0.5);
            margin-left: 0px;
        }

        5%,
        20% {
            opacity: 0.4;
            transform: translateY(100%) scale(0.7);
            margin-left: -100px;
        }

        25%,
        40% {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0%) scale(1);
            margin-left: -400px;
        }

        45%,
        60% {
            opacity: 0.4;
            transform: translateY(-100%) scale(0.7);
            margin-left: -100px;
        }

        65%,
        100% {
            opacity: 0;
            transform: translateY(-100%) scale(0.5);
            margin-left: 0px;
        }
    }


    @media (max-width: 767px) {
        header.scrolled {
            color: white;
        }

        #articles {
            overflow-x: scroll;
            white-space: nowrap;
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        header.scrolled {
            color: white;
        }

        .scrollable-container {
            overflow-x: scroll;
            white-space: nowrap;
        }

        #articles {
            overflow-x: scroll;
            white-space: nowrap;
        }
    }

    @media (min-width: 1280px) and (max-width: 1439px) {
        .hero h1 {
            font-size: 50px;
        }

        .hero h2 {
            font-size: 16px;
        }

        .card-role {
            width: 275px;
        }

        .card-role .flex {
            margin-left: 20px;
        }

        #threeSolution .col-span-12 {
            margin-left: 80px;
            margin-top: 50px;
        }

        #Solution .col-span-12 {
            margin-left: 80px;
        }

        @keyframes animate {
            0% {
                opacity: 0;
                transform: translateY(100%) scale(0.5);
                margin-left: 0px;
            }

            5%,
            20% {
                opacity: 0.4;
                transform: translateY(100%) scale(0.7);
                margin-left: -100px;
            }

            25%,
            40% {
                opacity: 1;
                pointer-events: auto;
                transform: translateY(0%) scale(1);
                margin-left: -300px;
            }

            45%,
            60% {
                opacity: 0.4;
                transform: translateY(-100%) scale(0.7);
                margin-left: -100px;
            }

            65%,
            100% {
                opacity: 0;
                transform: translateY(-100%) scale(0.5);
                margin-left: 0px;
            }
        }

    }
    </style>
</head>

<body class="font-inter bg-white">
    <header class="absolute w-full drop-shadow-md z-10">
        <nav>
            <div class="w-full">
                <div class="md:bg-white sm:bg-white lg:bg-opacity-0 scrolled">
                    <div class="lg:mx-16 md:mx-14 mx-4 flex justify-between items-center py-6">
                        <div class="flex items-center gap-3">
                            <div class="drawer w-fit lg:hidden block">
                                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                                <div class="drawer-content">
                                    <label for="my-drawer" class=""><svg xmlns="http://www.w3.org/2000/svg"
                                            class="sm:w-10" width="53" height="38" viewBox="0 0 53 38" fill="none">
                                            <path d="M11.042 9.5H41.9587M11.042 19H41.9587M11.042 28.5H41.9587"
                                                stroke="black" stroke-width="2" stroke-linecap="round" />
                                        </svg></label>
                                </div>
                                <div class="drawer-side">
                                    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                                    <div class="menu p-4 md:w-80 w-72 min-h-full bg-white text-base-content">
                                        <div class="mx-3">
                                            <a href="/"><img
                                                    src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}"
                                                    alt="logoProjectHub" class="mt-5 sm:w-44"></a>
                                            <form action="/register" class="mt-10">
                                                <button
                                                    class="py-3 text-white rounded-md bg-primary-50 w-full font-medium text-[15px] hover:bg-primary-70">Daftar
                                                    ProjectHub</button>
                                            </form>
                                            <div class="mt-5"><a href="/login"
                                                    class="md:text-lg text-base text-light-90 hover:text-primary-50">Masuk</a>
                                            </div>
                                            <div class="mt-3"><a href=""
                                                    class="md:text-lg text-base text-light-90 hover:text-primary-50">Blog</a>
                                            </div>
                                            <div class="mt-3"><a href=""
                                                    class="md:text-lg text-base text-light-90 hover:text-primary-50">Leaderboard</a>
                                            </div>
                                            <p class="font-semibold mt-9">Umum</p>
                                            <div class="border-t-2 border-light-30 mt-2"></div>
                                            <div class="mt-3 md:text-lg text-base text-light-90 hover:text-primary-50 flex items-center justify-between"
                                                id="pLanguage">
                                                <p>Bahasa</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    class=" transition-all duration-300 ease-in-out" viewBox="0 0 24 24"
                                                    fill="none" id="svgLanguage">
                                                    <path d="M7 10L12 15L17 10" stroke="#999999" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="ml-5 hidden" id="language">
                                                <form action="">
                                                    <button
                                                        class="md:text-lg text-base hover:text-primary-50 mt-3 text-primary-50">Indonesia</button>
                                                </form>
                                                <form action="">
                                                    <button
                                                        class="md:text-lg text-base text-light-90 hover:text-primary-50 mt-3">English</button>
                                                </form>
                                            </div>
                                            <div class="mt-3"><a href=""
                                                    class="md:text-lg text-base text-light-90 hover:text-primary-50">Tentang
                                                    Kami</a>
                                            </div>
                                            <div class="mt-3"><a href=""
                                                    class="md:text-lg text-base text-light-90 hover:text-primary-50">Pusat
                                                    Bantuan</a></div>
                                            <div class="mt-3"><a href=""
                                                    class="md:text-lg text-base text-light-90 hover:text-primary-50">FAQ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/">
                                <img src="{{asset('assets/img_index/asset/loginandregister/logo.svg')}}"
                                    alt="logoProjectHub" class="lg:block hidden" id="logoWhite">
                                <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}"
                                    alt="logoProjectHub" class="lg:hidden block sm:w-40" id="logoBlue">
                            </a>
                        </div>
                        <div class="flex items-center gap-6 sm:gap-0">
                            <div class="group relative cursor-pointer lg:block hidden" id="jelajahi">
                                <div class="flex items-center">
                                    <p class="menu-hover py-2 font-medium mx-2 group-hover:rotate-0" onClick="">
                                        Jelajahi
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7"
                                        class="group-hover:rotate-180 transition-all duration-200 ease-in-out"
                                        fill="none" id="navlistWhite">
                                        <path d="M0.833353 1.16667L5.00002 5.75L9.16669 1.16667" stroke="white"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" hidden
                                        class="group-hover:rotate-180 transition-all duration-200 ease-in-out"
                                        viewBox="0 0 10 7" fill="none" id="navlistBlue">
                                        <path d="M0.833353 1.16667L5.00002 5.75L9.16669 1.16667" stroke="#020179"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="invisible absolute z-50 flex w-40 flex-col bg-white px-1 py-1 drop-shadow-lg rounded-lg group-hover:visible transition-all duration-100 ease-in-out"
                                    onClick="">
                                    <a href=""
                                        class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Blog</a>
                                    <a href=""
                                        class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Leaderboard</a>
                                    <a href=""
                                        class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Tentang
                                        Kami</a>
                                    <a href=""
                                        class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Pusat
                                        Bantuan</a>
                                    <a href=""
                                        class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">FAQ</a>
                                </div>
                            </div>
                            <a href="/register" class="font-medium lg:block hidden">Daftar</a>
                            <form action="/register" class="lg:hidden block">
                                <button
                                    class=" border-2 border-primary-50 bg-primary-50 rounded-full px-8 sm:px-6 py-2 font-semibold sm:font-normal hover:bg-primary-70">Daftar</button>
                            </form>
                            <form action="/login">
                                <button
                                    class=" border-2 rounded-full px-8 lg:py-3 md:py-2 font-semibold md:border-primary-50 md:text-primary-50 sm:hidden hover:bg-white hover:text-primary-50 transition-all duration-200 ease-in-out"
                                    id="btnLogin">Masuk</button>
                            </form>
                            <div class="lg:block hidden">
                                <div class="flex items-center border-2 px-5 py-[11px] rounded-full gap-3" id="bahasa">
                                    <button id="btnID"
                                        class="font-semibold flex items-center justify-center focus:outline-none outline-none transition-all duration-300 ease-in-out"
                                        onclick="switchLanguage('ID')">
                                        <img src="{{asset('assets/img_index/asset/landingPage/flagIND1.svg')}}"
                                            alt="Flag Indonesia" class="mr-2 select-none border-2 rounded-full"
                                            id="flagID">
                                        ID
                                    </button>
                                    <div class="border-[1px] h-6 line-language" id=""></div>
                                    <button id="btnENG"
                                        class="font-semibold focus:outline-none outline-none opacity-30 transition-all duration-300 ease-in-out"
                                        onclick="switchLanguage('ENG')">ENG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="mt-28">
        <div class="border-light-30 border-t-2 w-full"></div>
        <div class="sm:mx-3 sm:block hidden sm:mt-4">
            <div class="collapse collapse-arrow bg-white">
                <input type="checkbox" class="peer" />
                <div class="collapse-title font-semibold text-primary-50">
                    Kategori Bidang
                </div>
                <div class="collapse-content">
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs">
                            Web & Pemrograman
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Grafis dan Desain
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Penulisan dan Penerjemah
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Pemasaran Digital
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Video dan Animasi
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Tutor & Pengajar
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Bisnis & Akutansi
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Jasa Konsultasi
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Musik & Audio
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Data & Riset
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Editing Foto
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Pekerjaan Lainnya
                        </p>
                    </a>
                </div>
            </div>
            <div class="collapse collapse-arrow bg-white">
                <input type="checkbox" class="peer" />
                <div class="collapse-title font-semibold text-primary-50">
                    Layanan Pelanggan
                </div>
                <div class="collapse-content">
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs">
                            Bantuan
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Kebijakan ProjectHub
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Karir
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Kerja Sama
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Syarat dan Ketentuan
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Kritik dan Saran
                        </p>
                    </a>
                </div>
            </div>
            <div class="collapse collapse-arrow bg-white">
                <input type="checkbox" class="peer" />
                <div class="collapse-title font-semibold text-primary-50">
                    Jelajahi ProjectHub
                </div>
                <div class="collapse-content">
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs">
                            Tentang ProjectHub
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Blog
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Leaderboard
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Buat Project
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Daftar Project
                        </p>
                    </a>
                    <a href="">
                        <p
                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            ProjectHub Academy
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="sm:block hidden border-light-30 border-t-2 w-full mt-4"></div>
        <div class="mx-16 sm:mx-6">
            <div class="grid grid-cols-12 mt-16 sm:mt-12 pb-10">
                <div class="lg:col-span-4 md:col-span-6 col-span-12">
                    <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}"
                        alt="logoProjectHub" class="sm:w-40">
                    <p class="text-lg font-medium leading-5 mt-10 sm:text-[13px] sm:mt-5">Bersama ProjectHub, raih
                        peluang kerja
                        <br> <span class="italic font-semibold text-primary-50">#tanpabatas</span>
                    </p>
                    <p class="text-light-90 mt-4 leading-5 sm:text-xs">ProjectHub merupakan sebuah situs <br
                            class="md:block hidden"> freelance <br class="lg:block hidden"> yang <br
                            class="sm:block hidden">
                        menyediakan ribuan <br class="md:block hidden">
                        projek dan <br class="lg:block hidden"> pekerjaan
                        freelance <br class="lg:hidden block"> untuk para freelancer. <br class="lg:block hidden">
                        Selain itu, <br class="md:block hidden"> para projek owner<br class="sm:block hidden"> juga
                        dapat <br class="sm:hidden block"> membuat
                        projek dan
                        mencari <br class="md:block hidden"> freelancer<br class="sm:block hidden"> untuk <br
                            class="lg:block hidden"> membantu
                        mereka <br class="md:block hidden"> menyelesaikan projeknya.</p>
                    <div class="flex items-center gap-3 mt-7">
                        <a href="">
                            <img src="{{asset('assets/img_index/asset/landingPage/linkedln.svg')}}" alt="linkdln">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/img_index/asset/landingPage/x.svg')}}" alt="x">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/img_index/asset/landingPage/tiktok.svg')}}" alt="tiktok">
                        </a>
                        <a href="">
                            <img src="{{asset('assets/img_index/asset/landingPage/instagram.svg')}}" alt="instagram">
                        </a>
                    </div>
                    <p class="font-semibold text-light-70 mt-20 md:text-xs sm:text-[10px] sm:mt-7">&copy; ProjectHub
                        2023. Hak Cipta Dilindungi
                    </p>
                </div>
                <div class="col-span-3 sm:hidden block">
                    <h3 class="font-semibold text-base">Kategori Bidang</h3>
                    <div class="mt-5">
                        <ul>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                        Web & Pemrograman
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Grafis dan Desain
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Penulisan dan Penerjemah
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Pemasaran Digital
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Video dan Animasi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Tutor & Pengajar
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Bisnis & Akutansi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Jasa Konsultasi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Musik & Audio
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Data & Riset
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Editing Foto
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Pekerjaan Lainnya
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-3 md:ml-2 sm:hidden block">
                    <h3 class="font-semibold text-base">Layanan Pelanggan</h3>
                    <div class="mt-5">
                        <ul>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                        Bantuan
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Kebijakan ProjectHub
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Karir
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Kerja Sama
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Syarat dan Ketentuan
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Kritik dan Saran
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="md:block hidden">
                        <h3 class="font-semibold text-base mt-10">Jelajahi ProjectHub</h3>
                        <div class="mt-5">
                            <ul>
                                <li>
                                    <a href="" class="inline-block">
                                        <p
                                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                            Tentang ProjectHub
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p
                                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Blog
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p
                                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Leaderboard
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p
                                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Buat Project
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p
                                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Daftar Project
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p
                                            class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            ProjectHub Academy
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:block hidden">
                    <h3 class="font-semibold text-base">Jelajahi ProjectHub</h3>
                    <div class="mt-5">
                        <ul>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                        Tentang ProjectHub
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Blog
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Leaderboard
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Buat Project
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Daftar Project
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p
                                        class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        ProjectHub Academy
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="{{asset('js/navBar.js')}}"></script>
<script src="{{asset('js/switchLanguage.js')}}"></script>
<script src="{{asset('js/btnOwnerFreelance.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
<script src="{{asset('js/tnsslider.js')}}"></script>
<script src="{{asset('js/overlay.js')}}"></script>
<script src="{{asset('js/toggleBahasaMobile.js')}}"></script>
<script>
var splide = new Splide(".splide", {
    type: "loop",
    autoplay: "playing",
    pagination: true,
    speed: 1000,
    arrows: false,
    drag: false,
    keyboard: false
});

splide.mount();
</script>


</html>
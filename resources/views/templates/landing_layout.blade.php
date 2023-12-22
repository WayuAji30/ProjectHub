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
    <meta name="description" content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <meta name="title" content="Login ke Akun ProjectHub Anda">
    <!-- keywords diutamakan untuk yg berkaitan dengan isi konten -->
    <meta name="keywords" content="freelance, projecthub, project">
    <meta name="robots" content="index, archive">
    <meta property="og:title" content="Login to ProjectHub - Hasilkan Uang dari Internet">
    <meta property="og:description" content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <meta property="og:url" content="https://www.projecthub.id/login">
    <meta property="og:image" content="https://www.projecthub.id/images/projecthub.jpg">
    <meta property="og:site_name" content="ProjectHub">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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

        .line-language {
            border-color: white
        }

        .splide__pagination__page.is-active {
            background-color: #020179;
        }

        li .splide__pagination__page {
            pointer-events: none;
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
    </style>
</head>

<body class="font-inter">
    <header class="absolute w-full drop-shadow-md z-10">
        <nav>
            <div class="w-full">
                <div class="md:bg-white sm:bg-white lg:bg-opacity-0 scrolled">
                    <div class="lg:mx-16 md:mx-12 mx-4 flex justify-between items-center lg:py-5 py-6">
                        <div class="flex items-center gap-3">
                            <div class="drawer w-fit lg:hidden block">
                                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                                <div class="drawer-content">
                                    <!-- Page content here -->
                                    <label for="my-drawer" class=""><svg xmlns="http://www.w3.org/2000/svg" class="sm:w-10" width="53" height="38" viewBox="0 0 53 38" fill="none">
                                            <path d="M11.042 9.5H41.9587M11.042 19H41.9587M11.042 28.5H41.9587" stroke="black" stroke-width="2" stroke-linecap="round" />
                                        </svg></label>
                                </div>
                                <div class="drawer-side">
                                    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                                    <ul class="menu p-4 md:w-80 w-72 min-h-full bg-white text-base-content">
                                        <div class="md:mx-3 mx-1">
                                            <a href="/"><img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="mt-5 ml-2 sm:w-44"></a>
                                            <li><a href="/register" class="font-medium mt-8 md:text-lg text-primary-50">Daftar</a>
                                            </li>
                                            <li><a href="/login" class="md:text-lg text-light-90 mt-1">Masuk</a></li>
                                            <li><a href="" class="md:text-lg text-light-90 mt-1">Blog</a></li>
                                            <li><a href="" class="md:text-lg text-light-90 mt-1">Leaderboard</a>
                                            </li>
                                            <li><a href="" class="md:text-lg text-light-90 mt-1">Tentang Kami</a>
                                            </li>
                                            <li><a href="" class="md:text-lg text-light-90 mt-1">Bantuan</a></li>
                                            <li><a href="" class="md:text-lg text-light-90 mt-1">FAQ</a></li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <a href="/"><img src="{{asset('assets/img_index/asset/loginandregister/logo.svg')}}" alt="logoProjectHub" class="lg:block hidden">
                                <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="lg:hidden block sm:w-40">
                            </a>
                        </div>
                        <div class="flex items-center gap-5 sm:gap-0">
                            <div class="dropdown dropdown-hover lg:block hidden">
                                <div tabindex="0" role="button" class="font-medium flex items-center gap-2">Jelajahi
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                        <path d="M0.833353 1.16667L5.00002 5.75L9.16669 1.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-white drop-shadow-lg rounded-md w-40">
                                    <li><a href="" class="font-semibold">Blog</a></li>
                                    <li><a href="" class="font-semibold">Leaderboard</a></li>
                                    <li><a href="" class="font-semibold">Tentang Kami</a></li>
                                    <li><a href="" class="font-semibold">Bantuan</a></li>
                                    <li><a href="" class="font-semibold">FAQ</a></li>
                                </ul>
                            </div>
                            <a href="/register" class="font-medium lg:block hidden">Daftar</a>
                            <form action="/register">
                                <button class=" border-2 border-primary-50 bg-primary-50 rounded-full px-8 sm:px-6 py-2 font-semibold sm:font-normal lg:hidden block">Daftar</button>
                            </form>
                            <form action="/login">
                                <button class=" border-2 rounded-full px-8 lg:py-3 md:py-2 font-semibold md:border-primary-50 md:text-primary-50 sm:hidden" id="btnLogin">Masuk</button>
                            </form>
                            <div class="lg:block hidden">
                                <div class="flex items-center border-2 px-5 py-[11px] rounded-full gap-3" id="bahasa">
                                    <button id="btnID" class="font-semibold flex items-center justify-center focus:outline-none active:opacity-100 outline-none opacity-30 transition-all duration-300 ease-in-out" onclick="switchLanguage('ID')">
                                        <img src="{{asset('assets/img_index/asset/landingPage/flagIND.svg')}}" alt="Flag Indonesia" class="mr-2 select-none">
                                        ID
                                    </button>
                                    <div class="border-[1px] h-6 line-language" id="bahasa"></div>
                                    <button id="btnENG" class="font-semibold focus:outline-none active:opacity-100 outline-none opacity-30 transition-all duration-300 ease-in-out" onclick="switchLanguage('ENG')">ENG</button>
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
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs">
                            Web & Pemrograman
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Grafis dan Desain
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Penulisan dan Penerjemah
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Pemasaran Digital
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Video dan Animasi
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Tutor & Pengajar
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Bisnis & Akutansi
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Jasa Konsultasi
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Musik & Audio
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Data & Riset
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Editing Foto
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
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
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs">
                            Bantuan
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Kebijakan ProjectHub
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Karir
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Kerja Sama
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Syarat dan Ketentuan
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
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
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs">
                            Tentang ProjectHub
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Blog
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Leaderboard
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Buat Project
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            Daftar Project
                        </p>
                    </a>
                    <a href="">
                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 text-xs mt-3">
                            ProjectHub Academy
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="sm:block hidden border-light-30 border-t-2 w-full mt-4"></div>
        <div class="mx-16 sm:mx-6">
            <div class="grid grid-cols-12 mt-16 sm:mt-12 mb-10">
                <div class="lg:col-span-4 md:col-span-6 col-span-12">
                    <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="sm:w-40">
                    <p class="text-lg font-medium leading-5 mt-10 sm:text-[13px] sm:mt-5">Bersama ProjectHub, raih
                        peluang kerja
                        <br> <span class="italic font-semibold text-primary-50">#tanpabatas</span>
                    </p>
                    <p class="text-light-90 mt-4 leading-5 sm:text-xs">ProjectHub merupakan sebuah situs <br class="md:block hidden"> freelance <br class="lg:block hidden"> yang <br class="sm:block hidden">
                        menyediakan ribuan <br class="md:block hidden">
                        projek dan <br class="lg:block hidden"> pekerjaan
                        freelance <br class="lg:hidden block"> untuk para freelancer. <br class="lg:block hidden">
                        Selain itu, <br class="md:block hidden"> para projek owner<br class="sm:block hidden"> juga
                        dapat <br class="sm:hidden block"> membuat
                        projek dan
                        mencari <br class="md:block hidden"> freelancer<br class="sm:block hidden"> untuk <br class="lg:block hidden"> membantu
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
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                Web & Pemrograman
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Grafis dan Desain
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Penulisan dan Penerjemah
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Pemasaran Digital
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Video dan Animasi
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Tutor & Pengajar
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Bisnis & Akutansi
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Jasa Konsultasi
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Musik & Audio
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Data & Riset
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Editing Foto
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Pekerjaan Lainnya
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-span-3 md:ml-2 sm:hidden block">
                    <h3 class="font-semibold text-base">Layanan Pelanggan</h3>
                    <div class="mt-5">
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                Bantuan
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Kebijakan ProjectHub
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Karir
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Kerja Sama
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Syarat dan Ketentuan
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                Kritik dan Saran
                            </p>
                        </a>
                    </div>
                    <div class="md:block hidden">
                        <h3 class="font-semibold text-base mt-10">Jelajahi ProjectHub</h3>
                        <div class="mt-5">
                            <a href="">
                                <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                    Tentang ProjectHub
                                </p>
                            </a>
                            <a href="">
                                <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                    Blog
                                </p>
                            </a>
                            <a href="">
                                <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                    Leaderboard
                                </p>
                            </a>
                            <a href="">
                                <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                    Buat Project
                                </p>
                            </a>
                            <a href="">
                                <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                    Daftar Project
                                </p>
                            </a>
                            <a href="">
                                <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                    ProjectHub Academy
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:block hidden">
                    <h3 class="font-semibold text-base">Jelajahi ProjectHub</h3>
                    <div class="mt-5">
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                <a href="">
                                    Tentang ProjectHub
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2">
                                Blog
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2">
                                Leaderboard
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2">
                                Buat Project
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2">
                                Daftar Project
                            </p>
                        </a>
                        <a href="">
                            <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2">
                                ProjectHub Academy
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="{{asset('js/navBar.js')}}"></script>
<script src="{{asset('js/switchLanguage.js')}}"></script>
<script src="{{asset('js/btnOwnerFreelance.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
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
<script src="{{asset('js/tnsslider.js')}}"></script>
<script>
    // Set the initial state when the page loads
    document.addEventListener("DOMContentLoaded", function() {
        // Set btnID as active and btnENG with opacity-30
        document.getElementById("btnID").classList.add("opacity-100");
        document.getElementById("btnENG").classList.remove("opacity-100");
    });

    function switchLanguage(language) {
        if (language === "ID") {
            document.getElementById("btnID").classList.add("opacity-100");
            document.getElementById("btnENG").classList.remove("opacity-100");
        } else if (language === "ENG") {
            document.getElementById("btnID").classList.remove("opacity-100");
            document.getElementById("btnENG").classList.add("opacity-100");
        }
    }
</script>

</html>
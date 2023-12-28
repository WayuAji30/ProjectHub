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
    </style>
</head>

<body class="font-inter bg-white">
    <header>
        <nav>
            <div class="fixed top-0 z-10">
                <div class="bg-white py-6">
                    <div class="flex items-center">
                        <a href="/index">
                            <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}"
                                alt="logoProjectHub" class="">
                        </a>
                        <div class="relative">
                            <form action="">
                                <button class="absolute mt-4 pl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none">
                                        <g clip-path="url(#clip0_714_839)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.75003 1.66699C7.62052 1.66709 6.50741 1.9373 5.50358 2.45507C4.49974 2.97285 3.63427 3.72317 2.97939 4.64345C2.32451 5.56373 1.8992 6.62728 1.73895 7.74536C1.5787 8.86344 1.68815 10.0036 2.05818 11.0708C2.4282 12.138 3.04807 13.1012 3.86606 13.8801C4.68405 14.659 5.67645 15.231 6.76046 15.5483C7.84446 15.8657 8.98865 15.9192 10.0975 15.7044C11.2064 15.4896 12.2479 15.0128 13.135 14.3137L16.1784 17.357C16.3355 17.5088 16.546 17.5928 16.7645 17.5909C16.983 17.589 17.192 17.5013 17.3465 17.3468C17.501 17.1923 17.5887 16.9833 17.5906 16.7648C17.5925 16.5463 17.5085 16.3358 17.3567 16.1787L14.3134 13.1353C15.1367 12.0908 15.6493 10.8357 15.7926 9.51343C15.9359 8.1912 15.704 6.85534 15.1235 5.65874C14.5431 4.46213 13.6374 3.45312 12.5103 2.74718C11.3831 2.04125 10.08 1.6669 8.75003 1.66699ZM3.33336 8.75033C3.33336 7.31374 3.90404 5.93599 4.91987 4.92016C5.93569 3.90434 7.31344 3.33366 8.75003 3.33366C10.1866 3.33366 11.5644 3.90434 12.5802 4.92016C13.596 5.93599 14.1667 7.31374 14.1667 8.75033C14.1667 10.1869 13.596 11.5647 12.5802 12.5805C11.5644 13.5963 10.1866 14.167 8.75003 14.167C7.31344 14.167 5.93569 13.5963 4.91987 12.5805C3.90404 11.5647 3.33336 10.1869 3.33336 8.75033Z"
                                                fill="#CCCCCC" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_714_839">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <input type="text" placeholder="Cari Project Disini"
                                    class="border-2 border-light-70 py-3 pl-12 text-light-50 rounded-full w-[307px] focus:outline-primary-50 z-20"
                                    id="searchInput">
                            </form>
                            <div class="absolute mt-2 hidden z-20" id="searchHelp">
                                <div class="bg-white drop-shadow-lg w-[700px] border-[1px] border-light-70 rounded">
                                    <div class="mx-4 mt-5" id="hasilPencarian">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-[14px]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" stroke="#020179" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0-14 0m18 11l-6-6" />
                                                </svg>
                                                <p class="font-semibold text-[13px] text-primary-50">HASIL PENCARIAN
                                                </p>
                                            </div>
                                            <button
                                                class="text-primary-50 font-bold text-[13px] opacity-50 hover:opacity-100"
                                                id="clearButton">Clear</button>
                                        </div>
                                        <div class="mt-2 flex flex-col">
                                            <a href="" class="hover:bg-light-30 py-1 px-8 text-light-90">Website
                                                Development</a>
                                            <a href="" class="hover:bg-light-30 py-1 px-8 text-light-90">Website
                                                Development</a>
                                        </div>
                                    </div>
                                    <div class="mx-4 my-10">
                                        <div class="flex items-center gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20"
                                                viewBox="0 0 32 32">
                                                <path fill="#020179"
                                                    d="M20 8v2h6.586L18 18.586l-4.293-4.293a1 1 0 0 0-1.414 0L2 24.586L3.414 26L13 16.414l4.293 4.293a1 1 0 0 0 1.414 0L28 11.414V18h2V8Z" />
                                            </svg>
                                            <p class="font-semibold text-[13px] text-primary-50">POPULAR PROJECT</p>
                                        </div>
                                        <div class="ml-8 flex items-center mt-3 gap-3">
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Website Development
                                                </p>
                                            </a>
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Mobile App Development
                                                </p>
                                            </a>
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Landing Page
                                                </p>
                                            </a>
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Logo Desain
                                                </p>
                                            </a>
                                        </div>
                                        <div class="ml-8 flex items-center mt-3 gap-3">
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Website Development
                                                </p>
                                            </a>
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Mobile App Development
                                                </p>
                                            </a>
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Landing Page
                                                </p>
                                            </a>
                                            <a href="">
                                                <p
                                                    class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                    Logo Desain
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group relative cursor-pointer lg:block hidden" id="jelajahi">
                            <div class="flex items-center">
                                <p class="menu-hover py-2 font-medium mx-2 group-hover:rotate-0 text-light-70"
                                    onClick="">
                                    Jelajahi
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="group-hover:rotate-180 transition-all duration-200 ease-in-out" width="10"
                                    height="7" viewBox="0 0 10 7" fill="none">
                                    <path d="M0.833353 1.16667L5.00002 5.75L9.16669 1.16667" stroke="#B3B3B3"
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
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')

</body>
<script>
var clearButton = document.getElementById('clearButton');
var hasilPencarian = document.getElementById('hasilPencarian');
var searchInput = document.getElementById('searchInput');
var searchHelp = document.getElementById('searchHelp');
var overlay = document.getElementById('hover');

clearButton.addEventListener('click', function(event) {
    if (event.target === clearButton) {
        hasilPencarian.innerHTML = '';
        event.stopPropagation();
    }
});

searchInput.addEventListener('click', function() {
    searchHelp.classList.toggle('hidden');
    overlay.classList.add('overlay');
});

document.addEventListener('click', function(event) {
    if (!searchInput.contains(event.target) && !searchHelp.contains(event.target)) {
        searchHelp.classList.add('hidden');
        overlay.classList.remove('overlay');
    }
});
</script>


</html>
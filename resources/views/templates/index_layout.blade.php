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
            opacity: 40%;
        }

        #jelajahiOverlay.overlay {
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
            opacity: 40%;
        }

        #profileOverlay.overlay {
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
            opacity: 40%;
        }

        .splide__arrow {
            background-color: transparent;
        }

        .splide__arrow--prev {
            left: -1.5em;
        }

        .splide__arrow--next {
            right: -1.5em;
        }
    </style>
</head>

<body class="font-inter bg-white">
    <header>
        <nav>
            <div class="fixed top-0 z-10 w-full">
                <div class="bg-white pt-6">
                    <div class="px-14">
                        <div class="flex items-center justify-between">
                            <a href="/index">
                                <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="">
                            </a>
                            <div class="relative">
                                <form action="">
                                    <button class="absolute mt-4 pl-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_714_839)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75003 1.66699C7.62052 1.66709 6.50741 1.9373 5.50358 2.45507C4.49974 2.97285 3.63427 3.72317 2.97939 4.64345C2.32451 5.56373 1.8992 6.62728 1.73895 7.74536C1.5787 8.86344 1.68815 10.0036 2.05818 11.0708C2.4282 12.138 3.04807 13.1012 3.86606 13.8801C4.68405 14.659 5.67645 15.231 6.76046 15.5483C7.84446 15.8657 8.98865 15.9192 10.0975 15.7044C11.2064 15.4896 12.2479 15.0128 13.135 14.3137L16.1784 17.357C16.3355 17.5088 16.546 17.5928 16.7645 17.5909C16.983 17.589 17.192 17.5013 17.3465 17.3468C17.501 17.1923 17.5887 16.9833 17.5906 16.7648C17.5925 16.5463 17.5085 16.3358 17.3567 16.1787L14.3134 13.1353C15.1367 12.0908 15.6493 10.8357 15.7926 9.51343C15.9359 8.1912 15.704 6.85534 15.1235 5.65874C14.5431 4.46213 13.6374 3.45312 12.5103 2.74718C11.3831 2.04125 10.08 1.6669 8.75003 1.66699ZM3.33336 8.75033C3.33336 7.31374 3.90404 5.93599 4.91987 4.92016C5.93569 3.90434 7.31344 3.33366 8.75003 3.33366C10.1866 3.33366 11.5644 3.90434 12.5802 4.92016C13.596 5.93599 14.1667 7.31374 14.1667 8.75033C14.1667 10.1869 13.596 11.5647 12.5802 12.5805C11.5644 13.5963 10.1866 14.167 8.75003 14.167C7.31344 14.167 5.93569 13.5963 4.91987 12.5805C3.90404 11.5647 3.33336 10.1869 3.33336 8.75033Z" fill="#CCCCCC" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_714_839">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <input type="text" placeholder="Cari Project Disini" autocomplete="off" class="border-2 border-light-70 py-3 pl-12 text-light-50 rounded-full w-[307px] focus:outline-primary-50 z-20" id="searchInput">
                                </form>
                                <div class="absolute mt-2 hidden z-20" id="searchHelp">
                                    <div class="bg-white drop-shadow-lg w-[700px] border-[1px] border-light-70 rounded">
                                        <div class="mx-4 mt-5" id="hasilPencarian">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-[14px]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                        <path fill="none" stroke="#020179" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0-14 0m18 11l-6-6" />
                                                    </svg>
                                                    <p class="font-semibold text-[13px] text-primary-50">HASIL PENCARIAN
                                                    </p>
                                                </div>
                                                <button class="text-primary-50 font-bold text-[13px] opacity-50 hover:opacity-100" id="clearButton">Clear</button>
                                            </div>
                                            <div class="mt-2 flex flex-col">
                                                <a href="" class="hover:bg-light-30 py-1 px-8 text-light-90">Website
                                                    Development</a>
                                                <a href="" class="hover:bg-light-30 py-1 px-8 text-light-90">Website
                                                    Development</a>
                                            </div>
                                        </div>
                                        <div class="mx-4 mb-10 mt-7">
                                            <div class="flex items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 32 32">
                                                    <path fill="#020179" d="M20 8v2h6.586L18 18.586l-4.293-4.293a1 1 0 0 0-1.414 0L2 24.586L3.414 26L13 16.414l4.293 4.293a1 1 0 0 0 1.414 0L28 11.414V18h2V8Z" />
                                                </svg>
                                                <p class="font-semibold text-[13px] text-primary-50">POPULAR PROJECT</p>
                                            </div>
                                            <div class="ml-8 flex items-center mt-3 gap-3">
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Website Development
                                                    </p>
                                                </a>
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Mobile App Development
                                                    </p>
                                                </a>
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Landing Page
                                                    </p>
                                                </a>
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Logo Desain
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="ml-8 flex items-center mt-3 gap-3">
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Website Development
                                                    </p>
                                                </a>
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Mobile App Development
                                                    </p>
                                                </a>
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Landing Page
                                                    </p>
                                                </a>
                                                <a href="">
                                                    <p class="text-[13px] font-bold border-2 border-primary-50 py-1 px-3 rounded-full inline-block text-primary-50 hover:bg-primary-50 hover:text-white">
                                                        Logo Desain
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <div tabindex="0" role="button" class="font-medium mx-2 text-light-70 flex items-center gap-2" id="jelajahi">
                                    Jelajahi
                                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-200 ease-in-out" width="10" height="7" viewBox="0 0 10 7" fill="none">
                                        <path d="M0.833353 1.16667L5.00002 5.75L9.16669 1.16667" stroke="#B3B3B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <ul tabindex="0" class="dropdown-content z-[2] menu p-2 shadow bg-white drop-shadow-lg rounded-box w-44 mt-3">
                                    <a href="" class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Blog</a>
                                    <a href="" class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Leaderboard</a>
                                    <a href="" class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Tentang
                                        Kami</a>
                                    <a href="" class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">Pusat
                                        Bantuan</a>
                                    <a href="" class="font-medium hover:bg-light-30 text-dark-70 px-3 rounded-md py-2 text-[14px] transition-all duration-100 ease-in-out">FAQ</a>
                                </ul>
                            </div>
                            <a href="" class="text-light-70 font-medium text-base">Projek Saya</a>
                            <a href="" class="flex items-center gap-2 text-primary-50 font-medium text-base"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                    <path d="M11.5 1.91699C6.20713 1.91699 1.91667 6.20745 1.91667 11.5003C1.91667 16.7932 6.20713 21.0837 11.5 21.0837C16.7929 21.0837 21.0833 16.7932 21.0833 11.5003C21.0833 6.20745 16.7929 1.91699 11.5 1.91699ZM16.2917 12.4587H12.4583V16.292H10.5417V12.4587H6.70834V10.542H10.5417V6.70866H12.4583V10.542H16.2917V12.4587Z" fill="#020179" />
                                </svg>Buat Projek</a>
                            <div class="border-[1px] border-[#D9D9D9] h-8"></div>
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <button class="p-1"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                            <path d="M16.25 21.1248C16.25 21.9867 15.9076 22.8134 15.2981 23.4229C14.6886 24.0324 13.862 24.3748 13 24.3748C12.138 24.3748 11.3114 24.0324 10.7019 23.4229C10.0924 22.8134 9.75 21.9867 9.75 21.1248H16.25ZM21.125 19.4998H3.4125C3.15391 19.4998 2.90592 19.3971 2.72307 19.2142C2.54022 19.0314 2.4375 18.7834 2.4375 18.5248C2.4375 18.2662 2.54022 18.0182 2.72307 17.8354C2.90592 17.6525 3.15391 17.5498 3.4125 17.5498H4.875V11.3748C4.875 7.4423 7.67 4.1598 11.3831 3.4123C11.3604 3.18635 11.3854 2.95815 11.4563 2.74243C11.5272 2.5267 11.6426 2.32824 11.7949 2.15984C11.9473 1.99144 12.1332 1.85684 12.3408 1.76472C12.5484 1.6726 12.7729 1.625 13 1.625C13.2271 1.625 13.4517 1.6726 13.6592 1.76472C13.8668 1.85684 14.0527 1.99144 14.2051 2.15984C14.3574 2.32824 14.4728 2.5267 14.5437 2.74243C14.6146 2.95815 14.6396 3.18635 14.6169 3.4123C16.4533 3.78583 18.1043 4.78246 19.2902 6.23348C20.4762 7.6845 21.1244 9.50076 21.125 11.3748V17.5498H22.5875C22.8461 17.5498 23.0941 17.6525 23.2769 17.8354C23.4598 18.0182 23.5625 18.2662 23.5625 18.5248C23.5625 18.7834 23.4598 19.0314 23.2769 19.2142C23.0941 19.3971 22.8461 19.4998 22.5875 19.4998H21.125Z" fill="#B3B3B3" />
                                        </svg>
                                        <svg class="absolute top-0 right-0" xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                                            <circle cx="3.5" cy="3.5" r="3.5" fill="#FF3D00" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative">
                                    <button class="p-1"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                            <g clip-path="url(#clip0_714_850)">
                                                <path d="M11.7975 2.74924C12.127 2.52935 12.5105 2.404 12.9062 2.38681C13.302 2.36962 13.6948 2.46125 14.0422 2.65174L14.2014 2.74924L22.8681 8.52666C23.1396 8.70759 23.3667 8.94752 23.5326 9.22852C23.6984 9.50952 23.7986 9.82434 23.8257 10.1495L23.8333 10.3293V20.5831C23.8335 21.1297 23.6271 21.6562 23.2554 22.057C22.8837 22.4578 22.3742 22.7033 21.8292 22.7443L21.6667 22.7497H4.33333C3.78671 22.7499 3.26022 22.5435 2.8594 22.1718C2.45859 21.8001 2.21308 21.2907 2.17208 20.7456L2.16666 20.5831V10.3293C2.16667 10.0031 2.24032 9.68116 2.38214 9.38741C2.52395 9.09366 2.73025 8.83572 2.98566 8.63283L3.13191 8.52666L11.7975 2.74924ZM13 4.55191L5.20325 9.74974L13 14.9476L20.7967 9.74974L13 4.55191Z" fill="#B3B3B3" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_714_850">
                                                    <rect width="26" height="26" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg class="absolute top-0 right-0" xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                                            <circle cx="3.5" cy="3.5" r="3.5" fill="#FF3D00" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <form action="">
                                <button class="font-semibold text-base bg-primary-50 rounded-lg py-3 text-white px-7 hover:bg-primary-70 transition-all duration-200 ease-in-out">Beralih
                                    Ke
                                    Freelancer</button>
                            </form>
                            <div class="dropdown dropdown-bottom dropdown-end">
                                <div tabindex="0" role="button" class="border-[3px] border-primary-50 rounded-full" id="btnProfile">
                                    <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt="profile">
                                </div>
                                <div tabindex="0" class="dropdown-content z-10 menu p-2 shadow bg-white drop-shadow-lg rounded-box w-72" id="dropdownContent">
                                    <div class="flex items-center gap-3 ml-8 mt-5">
                                        <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt="profile" class="border-2 border-primary-50 rounded-full">
                                        <div>
                                            <p class="font-semibold text-lg text-dark-70">Pororo</p>
                                            <p class="text-[13px] text-primary-50">Project Owner</p>
                                        </div>
                                    </div>
                                    <div class="border-t-[1px] border-light-30 my-5 mx-5"></div>
                                    <div class="mx-5">
                                        <a href="" class="flex items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 2.29199C12.0781 2.29166 13.1279 2.63693 13.9953 3.27711C14.8628 3.91729 15.5022 4.81867 15.8196 5.84895C16.1371 6.87924 16.116 7.98416 15.7593 9.00155C15.4027 10.0189 14.7293 10.8952 13.838 11.5017C15.385 12.0692 16.7268 13.0866 17.6907 14.4231C18.6545 15.7596 19.1963 17.354 19.2463 19.001C19.251 19.0924 19.2374 19.1838 19.2062 19.2699C19.1751 19.356 19.1271 19.435 19.065 19.5023C19.0029 19.5696 18.9281 19.6238 18.8448 19.6617C18.7614 19.6997 18.6714 19.7206 18.5799 19.7233C18.4884 19.726 18.3973 19.7104 18.3119 19.6774C18.2265 19.6444 18.1486 19.5947 18.0827 19.5311C18.0167 19.4676 17.9642 19.3916 17.928 19.3075C17.8919 19.2233 17.8729 19.1329 17.8723 19.0413C17.8177 17.2552 17.0697 15.5604 15.787 14.3163C14.5042 13.0721 12.7875 12.3763 11.0005 12.3763C9.21346 12.3763 7.49668 13.0721 6.21392 14.3163C4.93117 15.5604 4.18325 17.2552 4.12867 19.0413C4.1232 19.2237 4.04552 19.3964 3.91272 19.5214C3.77992 19.6465 3.60288 19.7137 3.42054 19.7082C3.23821 19.7027 3.06551 19.625 2.94045 19.4923C2.81538 19.3595 2.7482 19.1824 2.75367 19.0001C2.80385 17.3532 3.34574 15.759 4.30958 14.4227C5.27342 13.0864 6.61512 12.0691 8.162 11.5017C7.27071 10.8952 6.59732 10.0189 6.24067 9.00155C5.88401 7.98416 5.86288 6.87924 6.18036 5.84895C6.49784 4.81867 7.13723 3.91729 8.00466 3.27711C8.8721 2.63693 9.92191 2.29166 11 2.29199ZM7.33333 7.33366C7.33333 8.30612 7.71964 9.23875 8.40728 9.92638C9.09491 10.614 10.0275 11.0003 11 11.0003C11.9725 11.0003 12.9051 10.614 13.5927 9.92638C14.2804 9.23875 14.6667 8.30612 14.6667 7.33366C14.6667 6.3612 14.2804 5.42857 13.5927 4.74093C12.9051 4.0533 11.9725 3.66699 11 3.66699C10.0275 3.66699 9.09491 4.0533 8.40728 4.74093C7.71964 5.42857 7.33333 6.3612 7.33333 7.33366Z" fill="black" />
                                            </svg>Profil Saya</a>
                                        <a href="" class="flex items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 20.625C5.6925 20.625 1.375 16.3075 1.375 11C1.375 5.6925 5.6925 1.375 11 1.375C16.3075 1.375 20.625 5.6925 20.625 11C20.625 16.3075 16.3075 20.625 11 20.625ZM11 2.75C6.44875 2.75 2.75 6.44875 2.75 11C2.75 15.5512 6.44875 19.25 11 19.25C15.5512 19.25 19.25 15.5512 19.25 11C19.25 6.44875 15.5512 2.75 11 2.75Z" fill="black" />
                                                <path d="M11 15.8125C10.615 15.8125 10.3125 15.51 10.3125 15.125V6.875C10.3125 6.49 10.615 6.1875 11 6.1875C11.385 6.1875 11.6875 6.49 11.6875 6.875V15.125C11.6875 15.51 11.385 15.8125 11 15.8125Z" fill="black" />
                                                <path d="M15.125 11.6875H6.875C6.49 11.6875 6.1875 11.385 6.1875 11C6.1875 10.615 6.49 10.3125 6.875 10.3125H15.125C15.51 10.3125 15.8125 10.615 15.8125 11C15.8125 11.385 15.51 11.6875 15.125 11.6875Z" fill="black" />
                                            </svg>Buat Projek</a>
                                        <a href="" class="flex items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M4.71434 19.9914H9.42862M7.07148 19.9914V16.8485M0.785767 8.99135V15.2771C0.785767 15.6938 0.951327 16.0935 1.24603 16.3882C1.54073 16.6829 1.94043 16.8485 2.3572 16.8485H11.7858C12.2025 16.8485 12.6022 16.6829 12.8969 16.3882C13.1916 16.0935 13.3572 15.6938 13.3572 15.2771V8.99135C13.3572 8.57458 13.1916 8.17488 12.8969 7.88018C12.6022 7.58548 12.2025 7.41992 11.7858 7.41992H2.3572C1.94043 7.41992 1.54073 7.58548 1.24603 7.88018C0.951327 8.17488 0.785767 8.57458 0.785767 8.99135Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.7858 4.27748V3.49177C11.7858 3.28338 11.8685 3.08354 12.0159 2.93619C12.1632 2.78884 12.3631 2.70605 12.5715 2.70605H20.4286C20.637 2.70605 20.8369 2.78884 20.9842 2.93619C21.1316 3.08354 21.2143 3.28338 21.2143 3.49177V19.2061C21.2143 19.4144 21.1316 19.6143 20.9842 19.7616C20.8369 19.909 20.637 19.9918 20.4286 19.9918H14.1429" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.5001 9.77706H21.2143M17.8751 6.43778C17.823 6.43778 17.773 6.41708 17.7362 6.38025C17.6993 6.34341 17.6786 6.29345 17.6786 6.24135C17.6786 6.18925 17.6993 6.13929 17.7362 6.10245C17.773 6.06562 17.823 6.04492 17.8751 6.04492C17.9272 6.04492 17.9771 6.06562 18.014 6.10245C18.0508 6.13929 18.0715 6.18925 18.0715 6.24135C18.0715 6.29345 18.0508 6.34341 18.014 6.38025C17.9771 6.41708 17.9272 6.43778 17.8751 6.43778Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>Projek Saya</a>
                                    </div>
                                    <div class="border-t-[1px] border-light-30 my-5 mx-5"></div>
                                    <div class="mx-5">
                                        <a href="" class="flex items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M12.9058 1.375C13.0513 1.375 13.1931 1.42121 13.3107 1.50695C13.4284 1.59269 13.5157 1.71355 13.5603 1.85212L14.3165 4.202C14.6342 4.35737 14.938 4.532 15.2282 4.72862L17.6427 4.20888C17.785 4.17848 17.9333 4.19406 18.0663 4.25336C18.1992 4.31267 18.3099 4.41264 18.3824 4.53888L20.2882 7.8375C20.3609 7.96366 20.3917 8.10968 20.3762 8.2545C20.3606 8.39931 20.2995 8.53544 20.2015 8.64325L18.5447 10.472C18.5688 10.8227 18.5688 11.1746 18.5447 11.5252L20.2015 13.3567C20.2995 13.4646 20.3606 13.6007 20.3762 13.7455C20.3917 13.8903 20.3609 14.0363 20.2882 14.1625L18.3824 17.4625C18.3097 17.5885 18.1989 17.6882 18.066 17.7472C17.9331 17.8063 17.7849 17.8216 17.6427 17.7911L15.2282 17.2714C14.9394 17.4666 14.6342 17.6426 14.3179 17.798L13.5603 20.1479C13.5157 20.2864 13.4284 20.4073 13.3107 20.4931C13.1931 20.5788 13.0513 20.625 12.9058 20.625H9.09428C8.94872 20.625 8.80692 20.5788 8.68931 20.4931C8.57169 20.4073 8.48432 20.2864 8.43978 20.1479L7.6849 17.7994C7.36813 17.6445 7.06259 17.4676 6.77053 17.27L4.3574 17.7911C4.21504 17.8215 4.06671 17.8059 3.93377 17.7466C3.80083 17.6873 3.69014 17.5874 3.61765 17.4611L1.7119 14.1625C1.63913 14.0363 1.60831 13.8903 1.62387 13.7455C1.63944 13.6007 1.7006 13.4646 1.79853 13.3567L3.4554 11.5252C3.4314 11.1755 3.4314 10.8245 3.4554 10.4748L1.79853 8.64325C1.7006 8.53544 1.63944 8.39931 1.62387 8.2545C1.60831 8.10968 1.63913 7.96366 1.7119 7.8375L3.61765 4.5375C3.69034 4.41151 3.80111 4.31183 3.93404 4.25278C4.06696 4.19373 4.21519 4.17836 4.3574 4.20888L6.77053 4.73C7.06203 4.53338 7.36728 4.356 7.6849 4.20063L8.44115 1.85212C8.48555 1.714 8.5725 1.59346 8.68957 1.50776C8.80664 1.42205 8.94782 1.37559 9.0929 1.375H12.9044H12.9058ZM12.4025 2.75H9.59753L8.81653 5.17963L8.2899 5.43675C8.03101 5.56344 7.7811 5.70769 7.5419 5.8685L7.05515 6.1985L4.55815 5.6595L3.15565 8.0905L4.86753 9.98525L4.82628 10.5682C4.80652 10.8557 4.80652 11.1443 4.82628 11.4318L4.86753 12.0147L3.1529 13.9095L4.55678 16.3405L7.05378 15.8029L7.54053 16.1315C7.77972 16.2923 8.02964 16.4366 8.28853 16.5632L8.81515 16.8204L9.59753 19.25H12.4053L13.189 16.819L13.7143 16.5632C13.9729 16.4369 14.2224 16.2926 14.4609 16.1315L14.9463 15.8029L17.4447 16.3405L18.8472 13.9095L17.1339 12.0147L17.1752 11.4318C17.195 11.1438 17.195 10.8548 17.1752 10.5669L17.1339 9.98388L18.8485 8.0905L17.4447 5.6595L14.9463 6.19575L14.4609 5.8685C14.2224 5.70737 13.9729 5.5631 13.7143 5.43675L13.189 5.181L12.4039 2.75H12.4025ZM11 6.875C12.094 6.875 13.1433 7.3096 13.9168 8.08318C14.6904 8.85677 15.125 9.90598 15.125 11C15.125 12.094 14.6904 13.1432 13.9168 13.9168C13.1433 14.6904 12.094 15.125 11 15.125C9.90601 15.125 8.8568 14.6904 8.08321 13.9168C7.30962 13.1432 6.87503 12.094 6.87503 11C6.87503 9.90598 7.30962 8.85677 8.08321 8.08318C8.8568 7.3096 9.90601 6.875 11 6.875ZM11 8.25C10.2707 8.25 9.57121 8.53973 9.05548 9.05546C8.53976 9.57118 8.25003 10.2707 8.25003 11C8.25003 11.7293 8.53976 12.4288 9.05548 12.9445C9.57121 13.4603 10.2707 13.75 11 13.75C11.7294 13.75 12.4288 13.4603 12.9446 12.9445C13.4603 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4603 9.57118 12.9446 9.05546C12.4288 8.53973 11.7294 8.25 11 8.25Z" fill="black" />
                                            </svg>Pengaturan</a>
                                        <div class="flex items-center justify-between hover:bg-light-30 rounded-lg pl-3 pr-2 py-2 cursor-pointer" id="btnOpenBahasa">
                                            <div class="flex items-center font-medium text-base gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                    <g clip-path="url(#clip0_744_596)">
                                                        <path d="M16.2189 10.9997C16.2163 10.1779 16.1283 9.3587 15.9561 8.55521H18.1561C18.0428 8.22005 17.906 7.89331 17.7467 7.57743H15.6995C15.3146 6.29169 14.7177 5.07926 13.9333 3.99021C13.4322 3.7795 12.9097 3.62377 12.375 3.52576C13.4495 4.6803 14.2606 6.05435 14.7522 7.55299H11.4583V3.42188H10.5417V7.5591H7.24778C7.74038 6.05775 8.55362 4.6815 9.63112 3.52576C9.0987 3.62214 8.57827 3.77581 8.07889 3.9841C7.29145 5.06859 6.69043 6.27684 6.30056 7.5591H4.24112C4.07891 7.88075 3.94003 8.21364 3.82556 8.55521H6.0439C5.87174 9.3587 5.78367 10.1779 5.78112 10.9997C5.78281 11.8985 5.8853 12.7942 6.08667 13.6702H3.92334C4.04977 14.0128 4.2009 14.3457 4.37556 14.6663H6.34945C6.72358 15.8371 7.27822 16.9422 7.99334 17.9419C8.50543 18.1615 9.0404 18.3234 9.58834 18.4247C8.59096 17.3367 7.82391 16.0583 7.33334 14.6663H10.5478V18.5408H11.4645V14.6663H14.6667C14.1744 16.0589 13.4053 17.3374 12.4056 18.4247C12.9561 18.3199 13.4931 18.1539 14.0067 17.9297C14.7207 16.9338 15.2753 15.8328 15.6506 14.6663H17.6061C17.78 14.3516 17.9311 14.0248 18.0583 13.6885H15.8889C16.0999 12.8075 16.2106 11.9055 16.2189 10.9997ZM10.5417 13.6702H7.03389C6.60365 11.9883 6.58479 10.2276 6.97889 8.53688H10.5417V13.6702ZM14.9661 13.6702H11.4583V8.55521H15.0211C15.1967 9.35805 15.2827 10.1779 15.2778 10.9997C15.2828 11.8992 15.1781 12.796 14.9661 13.6702Z" fill="black" />
                                                        <path d="M11 1.22266C9.06615 1.22266 7.17572 1.79611 5.56777 2.87051C3.95982 3.94491 2.70658 5.47199 1.96652 7.25864C1.22647 9.0453 1.03283 11.0113 1.41011 12.908C1.78739 14.8047 2.71863 16.5469 4.08608 17.9144C5.45353 19.2818 7.19576 20.2131 9.09246 20.5903C10.9892 20.9676 12.9552 20.774 14.7418 20.0339C16.5285 19.2939 18.0555 18.0406 19.1299 16.4327C20.2043 14.8247 20.7778 12.9343 20.7778 11.0004C20.7778 8.40721 19.7476 5.92019 17.9139 4.0865C16.0803 2.25281 13.5932 1.22266 11 1.22266ZM11 19.556C9.30788 19.556 7.65375 19.0542 6.2468 18.1141C4.83985 17.174 3.74326 15.8378 3.09571 14.2745C2.44816 12.7112 2.27873 10.9909 2.60885 9.33133C2.93897 7.67171 3.7538 6.14726 4.95032 4.95074C6.14684 3.75423 7.67129 2.93939 9.33091 2.60927C10.9905 2.27915 12.7108 2.44858 14.2741 3.09613C15.8374 3.74368 17.1736 4.84027 18.1137 6.24722C19.0538 7.65418 19.5556 9.30831 19.5556 11.0004C19.5556 13.2695 18.6542 15.4456 17.0497 17.0501C15.4452 18.6546 13.2691 19.556 11 19.556Z" fill="black" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_744_596">
                                                            <rect width="22" height="22" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>Bahasa
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none" id="svgOpenBahasa" class=" transition-all duration-300 ease-in-out">
                                                <path d="M0.833353 1.16667L5.00002 5.75L9.16669 1.16667" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="ml-[35px] hidden" id="openBahasa">
                                            <button class="text-base font-semibold py-2 px-2 hover:bg-light-30 w-full text-start rounded-lg text-primary-50">Bahasa
                                                Indonesia</button>
                                            <button class="text-base font-semibold py-2 px-2 hover:bg-light-30 w-full text-start rounded-lg text-light-70">English</button>
                                        </div>
                                        <a href="" class="flex items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M20.4236 13.2639L18.3611 11.2014C18.2321 11.0726 18.0573 11.0001 17.875 11.0001C17.6927 11.0001 17.5179 11.0726 17.3889 11.2014L11 17.5904V20.625H14.0346L20.4236 14.2361C20.5524 14.1071 20.6249 13.9323 20.6249 13.75C20.6249 13.5677 20.5524 13.3929 20.4236 13.2639ZM13.4654 19.25H12.375V18.1596L15.8125 14.7221L16.9029 15.8125L13.4654 19.25ZM17.875 14.8404L16.7846 13.75L17.875 12.6596L18.9654 13.75L17.875 14.8404ZM5.5 11H12.375V12.375H5.5V11ZM5.5 6.875H13.75V8.25H5.5V6.875Z" fill="black" />
                                                <path d="M17.875 2.75C17.8746 2.38544 17.7297 2.03591 17.4719 1.77813C17.2141 1.52035 16.8646 1.37536 16.5 1.375H2.75C2.38544 1.37536 2.03592 1.52035 1.77813 1.77813C1.52035 2.03591 1.37537 2.38544 1.375 2.75V11.6875C1.37347 13.0586 1.74537 14.4043 2.45079 15.58C3.1562 16.7557 4.1685 17.7171 5.379 18.3611L8.9375 20.2586V18.7L6.02663 17.1476C5.03618 16.6208 4.20789 15.8342 3.63063 14.8723C3.05337 13.9103 2.74894 12.8094 2.75 11.6875V2.75H16.5V8.9375H17.875V2.75Z" fill="black" />
                                            </svg>Kebijakan ProjectHub</a>
                                    </div>
                                    <div class="border-t-[1px] border-light-30 my-5 mx-5"></div>
                                    <div class="mx-5">
                                        <a href="" class="flex items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg text-[#D30000] mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M4.125 20.625H12.375C12.7396 20.6246 13.0891 20.4797 13.3469 20.2219C13.6047 19.9641 13.7496 19.6146 13.75 19.25V17.1875H12.375V19.25H4.125V2.75H12.375V4.8125H13.75V2.75C13.7496 2.38544 13.6047 2.03591 13.3469 1.77813C13.0891 1.52035 12.7396 1.37536 12.375 1.375H4.125C3.76044 1.37536 3.41091 1.52035 3.15313 1.77813C2.89535 2.03591 2.75036 2.38544 2.75 2.75V19.25C2.75036 19.6146 2.89535 19.9641 3.15313 20.2219C3.41091 20.4797 3.76044 20.6246 4.125 20.625Z" fill="#D30000" />
                                                <path d="M14.1529 14.1529L16.6183 11.6875H6.875V10.3125H16.6183L14.1529 7.84712L15.125 6.875L19.25 11L15.125 15.125L14.1529 14.1529Z" fill="#D30000" />
                                            </svg>Keluar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 border-t-2 border-b-2 border-light-30">
                        <div class="mx-14">
                            <section class="splide" aria-label="Basic Structure Example">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[200px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Web & Pemrograman</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Grafis dan Desain</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[220px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Penulisan & Penerjemah</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Pemasaran Digital</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Video dan Animasi</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Tutor & Pengajar</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Bisnis & Akutansi</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[150px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Jasa Konsultasi</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Musik & Audio</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[150px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Data & Riset</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[150px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Editing Foto</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide hover:bg-primary-50 hover:text-white transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Pekerjaan Lainnya</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')

</body>
<script src="{{asset('js/search.js')}}"></script>
<script src="{{asset('js/jelajahiOverlay.js')}}"></script>
<script src="{{asset('js/btnOpenBahasa.js')}}"></script>
<script src="{{asset('js/btnJelajahi.js')}}"></script>
<script src="{{asset('js/btnProfile.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 9,
        perMove: 1,
        pagination: false,
        autoWidth: true,
    });

    splide.mount();
</script>

</html>
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
    <style>
        @media (min-width: 1280px) and (max-width: 1439px) {}
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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

        .line-language {
            border-color: white;
        }


        @media (max-width: 767px) {
            header.scrolled {
                color: white;
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
        }
    </style>
</head>


<body class="font-inter">
    <header class="absolute w-full drop-shadow-md">
        <nav>
            <div class="w-full">
                <div class="md:bg-white sm:bg-white lg:bg-opacity-0 scrolled">
                    <div class="lg:mx-16 md:mx-12 mx-4 flex justify-between items-center lg:py-7 py-6">
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
                                <button class=" border-2  rounded-full px-8 lg:py-3 md:py-2 font-semibold md:border-primary-50 md:text-primary-50 sm:hidden">Masuk</button>
                            </form>
                            <div class="lg:block hidden">
                                <div class="flex items-center border-2  px-5 py-3 rounded-full gap-3">
                                    <button id="btnID" class="font-semibold flex items-center justify-center focus:outline-none active:opacity-100 outline-none opacity-30 transition-all duration-300 ease-in-out" onclick="switchLanguage('ID')">
                                        <img src="{{asset('assets/img_index/asset/landingPage/flagIND.svg')}}" alt="Flag Indonesia" class="mr-2 select-none">
                                        ID
                                    </button>
                                    <div class="border-[1px] h-6 line-language"></div>
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
</body>

<script src="{{asset('js/navBar.js')}}"></script>
<script src="{{asset('js/switchLanguage.js')}}"></script>
<script src="{{asset('js/btnOwnerFreelance.js')}}"></script>

</html>
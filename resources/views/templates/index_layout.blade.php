<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Pengaturan bahasa -->
    <link rel="alternate" hreflang="en" href="https://yourwebsite.com/en/page.html" />
    <link rel="alternate" hreflang="id" href="https://yourwebsite.com/id/page.html" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectHub - Freelance & Project Owner Service Marketplace</title>
    @vite(['resources/css/app.css'])
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/logo/iconlogo.svg')}}" type="image/x-icon" />
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
        .overlay {
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
        }

        .splide__arrow {
            background-color: transparent;
        }

        .splide__arrow--prev {
            left: -0.5em;
        }

        .splide__arrow--next {
            right: -1em;
        }

        #notifcontent::-webkit-scrollbar {
            width: 3px;
        }

        #notifcontent::-webkit-scrollbar-thumb {
            background: #020179;
        }

        .fade-out {
            opacity: 0;
        }

        .progress::-webkit-progress-value {
            background-color: #020179;
        }
    </style>
</head>

<body class="font-inter bg-white">
    <header>
        <nav>
            <div class="fixed sm:sticky top-0 z-10 w-full md:drop-shadow-md">
                <div class="bg-white pt-6 md:py-3 sm:py-5">
                    <div class="lg:px-14 md:px-12 px-6">
                        <div class="flex sm:flex-wrap items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="drawer w-fit lg:hidden block z-30">
                                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                                    <div class="drawer-content">
                                        <label for="my-drawer" class=""><svg xmlns="http://www.w3.org/2000/svg" class="sm:w-10" width="53" height="38" viewBox="0 0 53 38" fill="none">
                                                <path d="M11.042 9.5H41.9587M11.042 19H41.9587M11.042 28.5H41.9587" stroke="black" stroke-width="2" stroke-linecap="round" />
                                            </svg></label>
                                    </div>
                                    <div class="drawer-side">
                                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                                        <div class="menu p-4 md:w-80 w-72 min-h-full bg-white text-base-content">
                                            <div class="mx-3">
                                                <a href="/"><img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="mt-5 sm:w-44"></a>
                                                <div class="flex items-center gap-3 mt-6">
                                                    <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt="profile" class="border-2 border-primary-50 rounded-full w-12">
                                                    <div>
                                                        <p class="font-semibold text-lg text-dark-70">Pororo</p>
                                                        <p class="text-[13px] text-primary-50 font-medium">Project Owner
                                                        </p>
                                                    </div>
                                                </div>
                                                <form action="/register" class="mt-5">
                                                    <button class="py-3 text-white rounded-md bg-primary-50 w-full font-medium text-[15px] hover:bg-primary-70">
                                                        Beralih Ke Owner</button>
                                                    <button class="py-3 text-white rounded-md bg-primary-50 w-full font-medium text-[15px] hover:bg-primary-70 hidden">
                                                        Beralih Ke Freelance</button>
                                                </form>
                                                <form action="/register" class="mt-5 hidden">
                                                    <button class="py-3 rounded-md bg-white border-2 border-primary-50 text-primary-50 w-full font-medium text-[15px] hover:bg-primary-50 hover:text-white">
                                                        Masuk</button>
                                                    <button class="py-3 text-white rounded-md border-2 border-transparent bg-primary-50 w-full font-medium text-[15px] hover:bg-primary-70 mt-2">
                                                        Daftar</button>
                                                </form>
                                                <div class="border-t-2 border-light-30 mt-8"></div>
                                                <div class="mt-5"><a href="/profile" class="md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M9.00018 1.875C9.88226 1.87473 10.7412 2.15722 11.4509 2.681C12.1606 3.20479 12.6838 3.94228 12.9435 4.78524C13.2033 5.6282 13.186 6.53223 12.8942 7.36464C12.6024 8.19704 12.0514 8.91399 11.3222 9.41025C12.5879 9.8745 13.6858 10.7069 14.4744 11.8004C15.263 12.8939 15.7063 14.1984 15.7472 15.546C15.751 15.6208 15.7399 15.6956 15.7144 15.766C15.6889 15.8365 15.6496 15.9011 15.5988 15.9562C15.548 16.0112 15.4868 16.0556 15.4186 16.0866C15.3505 16.1177 15.2768 16.1348 15.2019 16.137C15.1271 16.1392 15.0525 16.1264 14.9826 16.0994C14.9128 16.0724 14.849 16.0317 14.7951 15.9797C14.7412 15.9278 14.6981 15.8656 14.6686 15.7967C14.639 15.7279 14.6235 15.6539 14.6229 15.579C14.5783 14.1176 13.9663 12.731 12.9168 11.7131C11.8673 10.6951 10.4626 10.1258 9.00056 10.1258C7.53847 10.1258 6.13383 10.6951 5.0843 11.7131C4.03478 12.731 3.42285 14.1176 3.37818 15.579C3.37371 15.7282 3.31015 15.8695 3.2015 15.9718C3.09284 16.0741 2.94799 16.1291 2.79881 16.1246C2.64962 16.1201 2.50833 16.0566 2.406 15.9479C2.30368 15.8393 2.24871 15.6944 2.25318 15.5452C2.29424 14.1978 2.7376 12.8935 3.5262 11.8001C4.3148 10.7068 5.41256 9.87445 6.67818 9.41025C5.94895 8.91399 5.39799 8.19704 5.10618 7.36464C4.81438 6.53223 4.79708 5.6282 5.05684 4.78524C5.3166 3.94228 5.83973 3.20479 6.54945 2.681C7.25918 2.15722 8.11811 1.87473 9.00018 1.875ZM6.00018 6C6.00018 6.79565 6.31625 7.55871 6.87886 8.12132C7.44147 8.68393 8.20453 9 9.00018 9C9.79583 9 10.5589 8.68393 11.1215 8.12132C11.6841 7.55871 12.0002 6.79565 12.0002 6C12.0002 5.20435 11.6841 4.44129 11.1215 3.87868C10.5589 3.31607 9.79583 3 9.00018 3C8.20453 3 7.44147 3.31607 6.87886 3.87868C6.31625 4.44129 6.00018 5.20435 6.00018 6Z" fill="#787878" />
                                                        </svg>Profil Saya</a>
                                                </div>
                                                <div class="mt-4"><a href="" class="md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M14.25 9C14.25 9.19891 14.171 9.38968 14.0303 9.53033C13.8897 9.67098 13.6989 9.75 13.5 9.75C13.3011 9.75 13.1103 9.67098 12.9697 9.53033C12.829 9.38968 12.75 9.19891 12.75 9C12.75 8.80109 12.829 8.61032 12.9697 8.46967C13.1103 8.32902 13.3011 8.25 13.5 8.25C13.6989 8.25 13.8897 8.32902 14.0303 8.46967C14.171 8.61032 14.25 8.80109 14.25 9Z" fill="#787878" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.458 2.4375H9.792C11.1705 2.4375 12.2625 2.4375 13.1168 2.55225C13.9958 2.67075 14.7075 2.91975 15.2692 3.48075C15.9622 4.1745 16.1835 5.103 16.2638 6.30825C16.6965 6.498 17.0235 6.90075 17.0588 7.41075C17.0625 7.4565 17.0625 7.50525 17.0625 7.55025V10.4497C17.0625 10.4948 17.0625 10.5435 17.0595 10.5885C17.0235 11.0985 16.6965 11.502 16.2638 11.6925C16.1835 12.897 15.9622 13.8255 15.2692 14.5192C14.7075 15.0802 13.9958 15.3293 13.1168 15.4478C12.2618 15.5625 11.1705 15.5625 9.792 15.5625H7.458C6.0795 15.5625 4.9875 15.5625 4.13325 15.4478C3.25425 15.3293 2.5425 15.0802 1.98075 14.5192C1.41975 13.9575 1.17075 13.2458 1.05225 12.3668C0.9375 11.5118 0.9375 10.4205 0.9375 9.042V8.958C0.9375 7.5795 0.9375 6.4875 1.05225 5.63325C1.17075 4.75425 1.41975 4.0425 1.98075 3.48075C2.5425 2.91975 3.25425 2.67075 4.13325 2.55225C4.98825 2.4375 6.0795 2.4375 7.458 2.4375ZM15.126 11.8125H13.6725C12.0637 11.8125 10.6867 10.5915 10.6867 9C10.6867 7.4085 12.0638 6.1875 13.6718 6.1875H15.1252C15.0398 5.18175 14.847 4.65 14.4728 4.2765C14.1555 3.95925 13.7205 3.76875 12.966 3.6675C12.1958 3.564 11.1795 3.5625 9.74925 3.5625H7.49925C6.069 3.5625 5.0535 3.564 4.28175 3.6675C3.528 3.76875 3.093 3.95925 2.77575 4.2765C2.4585 4.59375 2.268 5.02875 2.16675 5.78325C2.06325 6.55425 2.06175 7.56975 2.06175 9C2.06175 10.4303 2.06325 11.4465 2.16675 12.2175C2.268 12.9713 2.4585 13.4062 2.77575 13.7235C3.093 14.0408 3.528 14.2313 4.2825 14.3325C5.0535 14.436 6.069 14.4375 7.49925 14.4375H9.74925C11.1795 14.4375 12.1957 14.436 12.9667 14.3325C13.7205 14.2313 14.1555 14.0408 14.4728 13.7235C14.847 13.35 15.0405 12.819 15.126 11.8125ZM3.9375 6C3.9375 5.85082 3.99676 5.70774 4.10225 5.60225C4.20774 5.49676 4.35082 5.4375 4.5 5.4375H7.5C7.64918 5.4375 7.79226 5.49676 7.89775 5.60225C8.00324 5.70774 8.0625 5.85082 8.0625 6C8.0625 6.14918 8.00324 6.29226 7.89775 6.39775C7.79226 6.50324 7.64918 6.5625 7.5 6.5625H4.5C4.35082 6.5625 4.20774 6.50324 4.10225 6.39775C3.99676 6.29226 3.9375 6.14918 3.9375 6ZM15.693 7.3125H13.6725C12.6045 7.3125 11.8117 8.10675 11.8117 9C11.8117 9.89325 12.6045 10.6875 13.6718 10.6875H15.7103C15.8647 10.6777 15.9315 10.5735 15.9368 10.5105V7.4895C15.9315 7.4265 15.8647 7.32225 15.7103 7.31325L15.693 7.3125Z" fill="#787878" />
                                                        </svg>Saldo & Penarikan</a>
                                                </div>
                                                <div class="mt-4"><a href="" class="md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M9 16.875C4.6575 16.875 1.125 13.3425 1.125 9C1.125 4.6575 4.6575 1.125 9 1.125C13.3425 1.125 16.875 4.6575 16.875 9C16.875 13.3425 13.3425 16.875 9 16.875ZM9 2.25C5.27625 2.25 2.25 5.27625 2.25 9C2.25 12.7238 5.27625 15.75 9 15.75C12.7238 15.75 15.75 12.7238 15.75 9C15.75 5.27625 12.7238 2.25 9 2.25Z" fill="#787878" />
                                                            <path d="M9 12.9375C8.685 12.9375 8.4375 12.69 8.4375 12.375V5.625C8.4375 5.31 8.685 5.0625 9 5.0625C9.315 5.0625 9.5625 5.31 9.5625 5.625V12.375C9.5625 12.69 9.315 12.9375 9 12.9375Z" fill="#787878" />
                                                            <path d="M12.375 9.5625H5.625C5.31 9.5625 5.0625 9.315 5.0625 9C5.0625 8.685 5.31 8.4375 5.625 8.4375H12.375C12.69 8.4375 12.9375 8.685 12.9375 9C12.9375 9.315 12.69 9.5625 12.375 9.5625Z" fill="#787878" />
                                                        </svg>Buat Projek</a>
                                                </div>
                                                <div class="mt-4"><a href="" class="md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M3.85686 16.358H7.71401M5.78544 16.358V13.7866M0.642578 7.35798V12.5008C0.642578 12.8418 0.778037 13.1689 1.01916 13.41C1.26027 13.6511 1.5873 13.7866 1.92829 13.7866H9.64258C9.98357 13.7866 10.3106 13.6511 10.5517 13.41C10.7928 13.1689 10.9283 12.8418 10.9283 12.5008V7.35798C10.9283 7.01699 10.7928 6.68996 10.5517 6.44884C10.3106 6.20772 9.98357 6.07227 9.64258 6.07227H1.92829C1.5873 6.07227 1.26027 6.20772 1.01916 6.44884C0.778037 6.68996 0.642578 7.01699 0.642578 7.35798Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M9.64258 3.50056V2.8577C9.64258 2.6872 9.71031 2.52369 9.83087 2.40313C9.95143 2.28257 10.1149 2.21484 10.2854 2.21484H16.714C16.8845 2.21484 17.048 2.28257 17.1686 2.40313C17.2891 2.52369 17.3569 2.6872 17.3569 2.8577V15.7148C17.3569 15.8853 17.2891 16.0489 17.1686 16.1694C17.048 16.29 16.8845 16.3577 16.714 16.3577H11.5711" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M13.5 8.00084H17.3571M14.625 5.26869C14.5824 5.26869 14.5415 5.25176 14.5114 5.22162C14.4812 5.19148 14.4643 5.1506 14.4643 5.10798C14.4643 5.06536 14.4812 5.02448 14.5114 4.99434C14.5415 4.9642 14.5824 4.94727 14.625 4.94727C14.6676 4.94727 14.7085 4.9642 14.7386 4.99434C14.7688 5.02448 14.7857 5.06536 14.7857 5.10798C14.7857 5.1506 14.7688 5.19148 14.7386 5.22162C14.7085 5.25176 14.6676 5.26869 14.625 5.26869Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>Projek Saya</a>
                                                </div>
                                                <div class="border-t-2 border-light-30 mt-5"></div>
                                                <div class="mt-4 md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center justify-between" id="jelajahiMobile">
                                                    <div class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                            <path d="M6.55783 15.4422L12.3402 12.3402L15.4422 6.55783L9.65983 9.65983L6.55783 15.4422ZM11 11.9167C10.7403 11.9167 10.5227 11.8287 10.3473 11.6527C10.1719 11.4767 10.0839 11.2591 10.0833 11C10.0833 10.7403 10.1713 10.5227 10.3473 10.3473C10.5233 10.1719 10.7409 10.0839 11 10.0833C11.2597 10.0833 11.4776 10.1713 11.6536 10.3473C11.8296 10.5233 11.9173 10.7409 11.9167 11C11.9167 11.2597 11.8287 11.4776 11.6527 11.6536C11.4767 11.8296 11.2591 11.9173 11 11.9167ZM11.0028 19.25C9.86242 19.25 8.78992 19.0337 7.78525 18.601C6.78119 18.1677 5.90761 17.5798 5.1645 16.8373C4.42139 16.0954 3.83319 15.2228 3.39992 14.2193C2.96664 13.2159 2.75 12.1437 2.75 11.0028C2.75 9.86242 2.96633 8.78992 3.399 7.78525C3.83228 6.78119 4.42017 5.90761 5.16267 5.1645C5.90456 4.42139 6.77722 3.83319 7.78067 3.39992C8.78411 2.96664 9.85631 2.75 10.9972 2.75C12.1376 2.75 13.2101 2.96633 14.2148 3.399C15.2188 3.83228 16.0924 4.42017 16.8355 5.16267C17.5786 5.90456 18.1668 6.77722 18.6001 7.78067C19.0334 8.78411 19.25 9.85631 19.25 10.9972C19.25 12.1376 19.0337 13.2101 18.601 14.2148C18.1677 15.2188 17.5798 16.0924 16.8373 16.8355C16.0954 17.5786 15.2228 18.1668 14.2193 18.6001C13.2159 19.0334 12.1437 19.25 11.0028 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#787878" />
                                                        </svg>
                                                        <p>Jelajahi</p>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" transition-all duration-300 ease-in-out" viewBox="0 0 24 24" fill="none" id="svgjelajahimobile">
                                                        <path d="M7 10L12 15L17 10" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="ml-8 hidden" id="jelajahiMobileContent">
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Blog</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Leaderboard</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Tentang
                                                            Kami</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Pusat
                                                            Bantuan</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">FAQ</button>
                                                    </form>
                                                </div>
                                                <div class="mt-3 md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center justify-between" id="kategoriMobile">
                                                    <div class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M14.166 8.33398C15.5467 8.33398 16.666 7.2147 16.666 5.83398C16.666 4.45327 15.5467 3.33398 14.166 3.33398C12.7853 3.33398 11.666 4.45327 11.666 5.83398C11.666 7.2147 12.7853 8.33398 14.166 8.33398Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.83301 16.668C7.21372 16.668 8.33301 15.5487 8.33301 14.168C8.33301 12.7873 7.21372 11.668 5.83301 11.668C4.4523 11.668 3.33301 12.7873 3.33301 14.168C3.33301 15.5487 4.4523 16.668 5.83301 16.668Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11.6663 11.6673H16.6663V15.834C16.6663 16.055 16.5785 16.267 16.4223 16.4232C16.266 16.5795 16.054 16.6673 15.833 16.6673H12.4997C12.2787 16.6673 12.0667 16.5795 11.9104 16.4232C11.7541 16.267 11.6663 16.055 11.6663 15.834V11.6673ZM3.33301 3.33398H8.33301V7.50065C8.33301 7.72166 8.24521 7.93363 8.08893 8.08991C7.93265 8.24619 7.72069 8.33398 7.49967 8.33398H4.16634C3.94533 8.33398 3.73337 8.24619 3.57709 8.08991C3.42081 7.93363 3.33301 7.72166 3.33301 7.50065V3.33398Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <p>Kategori</p>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" transition-all duration-300 ease-in-out" viewBox="0 0 24 24" fill="none" id="svgkategorimobile">
                                                        <path d="M7 10L12 15L17 10" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="ml-8 hidden" id="kategoriMobileContent">
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Web
                                                            & Pemrograman</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Grafis
                                                            dan Desain</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Penulisan
                                                            & Penerjemah
                                                        </button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Pemasaran
                                                            Digital
                                                        </button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Video
                                                            dan Animasi</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Tutor
                                                            & Pengajar</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Bisnis
                                                            & Akutansi</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Jasa
                                                            Konsultasi</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Musik
                                                            & Audio</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Data
                                                            & Riset</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Editing
                                                            Foto</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-dark-10 hover:text-primary-50 mt-3">Pekerjaan
                                                            Lainnya</button>
                                                    </form>
                                                </div>
                                                <div class="border-t-2 border-light-30 mt-5"></div>
                                                <div class="mt-5"><a href="" class="md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center gap-[10px]"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M9.55907 0.125C9.67816 0.125004 9.79417 0.162804 9.89041 0.232958C9.98664 0.303111 10.0581 0.401998 10.0946 0.515375L10.7133 2.438C10.9732 2.56512 11.2218 2.708 11.4592 2.86887L13.4347 2.44363C13.5512 2.41876 13.6725 2.4315 13.7813 2.48002C13.8901 2.52855 13.9806 2.61034 14.0399 2.71363L15.5992 5.4125C15.6587 5.51573 15.684 5.63519 15.6712 5.75368C15.6585 5.87216 15.6084 5.98354 15.5283 6.07175L14.1727 7.568C14.1924 7.85491 14.1924 8.14284 14.1727 8.42975L15.5283 9.92825C15.6084 10.0165 15.6585 10.1278 15.6712 10.2463C15.684 10.3648 15.6587 10.4843 15.5992 10.5875L14.0399 13.2875C13.9805 13.3906 13.8898 13.4721 13.7811 13.5205C13.6723 13.5688 13.551 13.5813 13.4347 13.5564L11.4592 13.1311C11.2229 13.2909 10.9732 13.4349 10.7144 13.562L10.0946 15.4846C10.0581 15.598 9.98664 15.6969 9.89041 15.767C9.79417 15.8372 9.67816 15.875 9.55907 15.875H6.44057C6.32148 15.875 6.20546 15.8372 6.10923 15.767C6.01299 15.6969 5.94151 15.598 5.90507 15.4846L5.28744 13.5631C5.02826 13.4364 4.77828 13.2917 4.53932 13.13L2.56494 13.5564C2.44846 13.5812 2.3271 13.5685 2.21833 13.52C2.10956 13.4715 2.019 13.3897 1.95969 13.2864L0.400442 10.5875C0.3409 10.4843 0.315681 10.3648 0.328419 10.2463C0.341157 10.1278 0.391194 10.0165 0.471317 9.92825L1.82694 8.42975C1.80731 8.14359 1.80731 7.85641 1.82694 7.57025L0.471317 6.07175C0.391194 5.98354 0.341157 5.87216 0.328419 5.75368C0.315681 5.63519 0.3409 5.51573 0.400442 5.4125L1.95969 2.7125C2.01916 2.60942 2.10979 2.52786 2.21855 2.47955C2.32731 2.43123 2.44859 2.41865 2.56494 2.44363L4.53932 2.87C4.77782 2.70913 5.02757 2.564 5.28744 2.43688L5.90619 0.515375C5.94251 0.402363 6.01366 0.303738 6.10944 0.233619C6.20523 0.163499 6.32074 0.125479 6.43944 0.125H9.55794H9.55907ZM9.14732 1.25H6.85232L6.21332 3.23787L5.78244 3.44825C5.57062 3.5519 5.36615 3.66993 5.17044 3.8015L4.77219 4.0715L2.72919 3.6305L1.58169 5.6195L2.98232 7.16975L2.94857 7.64675C2.9324 7.88197 2.9324 8.11803 2.94857 8.35325L2.98232 8.83025L1.57944 10.3805L2.72807 12.3695L4.77107 11.9296L5.16932 12.1985C5.36502 12.3301 5.5695 12.4481 5.78132 12.5517L6.21219 12.7621L6.85232 14.75H9.14957L9.79082 12.761L10.2206 12.5517C10.4322 12.4483 10.6363 12.3303 10.8314 12.1985L11.2286 11.9296L13.2727 12.3695L14.4202 10.3805L13.0184 8.83025L13.0522 8.35325C13.0684 8.11765 13.0684 7.88122 13.0522 7.64563L13.0184 7.16863L14.4213 5.6195L13.2727 3.6305L11.2286 4.06925L10.8314 3.8015C10.6363 3.66967 10.4322 3.55163 10.2206 3.44825L9.79082 3.239L9.14844 1.25H9.14732ZM7.99982 4.625C8.89492 4.625 9.75337 4.98058 10.3863 5.61351C11.0192 6.24645 11.3748 7.10489 11.3748 8C11.3748 8.89511 11.0192 9.75355 10.3863 10.3865C9.75337 11.0194 8.89492 11.375 7.99982 11.375C7.10471 11.375 6.24627 11.0194 5.61333 10.3865C4.9804 9.75355 4.62482 8.89511 4.62482 8C4.62482 7.10489 4.9804 6.24645 5.61333 5.61351C6.24627 4.98058 7.10471 4.625 7.99982 4.625ZM7.99982 5.75C7.40308 5.75 6.83078 5.98705 6.40883 6.40901C5.98687 6.83097 5.74982 7.40326 5.74982 8C5.74982 8.59674 5.98687 9.16903 6.40883 9.59099C6.83078 10.0129 7.40308 10.25 7.99982 10.25C8.59655 10.25 9.16885 10.0129 9.59081 9.59099C10.0128 9.16903 10.2498 8.59674 10.2498 8C10.2498 7.40326 10.0128 6.83097 9.59081 6.40901C9.16885 5.98705 8.59655 5.75 7.99982 5.75Z" fill="#787878" />
                                                        </svg>Pengaturan</a>
                                                </div>
                                                <div class="mt-4 md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center justify-between" id="pLanguageIndex">
                                                    <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <g clip-path="url(#clip0_963_2988)">
                                                                <path d="M13.2699 9.00078C13.2678 8.32846 13.1957 7.65818 13.0549 7.00078H14.8549C14.7622 6.72656 14.6502 6.45923 14.5199 6.20078H12.8449C12.53 5.14881 12.0416 4.15683 11.3999 3.26578C10.9899 3.09338 10.5624 2.96597 10.1249 2.88578C11.004 3.8304 11.6677 4.95462 12.0699 6.18078H9.37488V2.80078H8.62488V6.18578H5.92988C6.33292 4.9574 6.9983 3.83138 7.87988 2.88578C7.44427 2.96463 7.01846 3.09036 6.60988 3.26078C5.96561 4.14809 5.47386 5.13666 5.15488 6.18578H3.46988C3.33717 6.44895 3.22354 6.72132 3.12988 7.00078H4.94488C4.80403 7.65818 4.73197 8.32846 4.72988 9.00078C4.73126 9.73617 4.81512 10.4691 4.97988 11.1858H3.20988C3.31332 11.466 3.43698 11.7384 3.57988 12.0008H5.19488C5.50099 12.9587 5.95479 13.8629 6.53988 14.6808C6.95887 14.8605 7.39657 14.993 7.84488 15.0758C7.02884 14.1857 6.40126 13.1397 5.99988 12.0008H8.62988V15.1708H9.37988V12.0008H11.9999C11.5971 13.1402 10.9678 14.1862 10.1499 15.0758C10.6003 14.9901 11.0397 14.8543 11.4599 14.6708C12.0441 13.856 12.4978 12.9552 12.8049 12.0008H14.4049C14.5471 11.7433 14.6708 11.4759 14.7749 11.2008H12.9999C13.1725 10.48 13.2631 9.74195 13.2699 9.00078ZM8.62488 11.1858H5.75488C5.40287 9.8097 5.38743 8.36909 5.70988 6.98578H8.62488V11.1858ZM12.2449 11.1858H9.37488V7.00078H12.2899C12.4335 7.65765 12.5039 8.32841 12.4999 9.00078C12.5039 9.73677 12.4183 10.4705 12.2449 11.1858Z" fill="#787878" />
                                                                <path d="M9 1C7.41775 1 5.87103 1.46919 4.55544 2.34824C3.23985 3.22729 2.21447 4.47672 1.60897 5.93853C1.00347 7.40034 0.84504 9.00887 1.15372 10.5607C1.4624 12.1126 2.22433 13.538 3.34315 14.6569C4.46197 15.7757 5.88743 16.5376 7.43928 16.8463C8.99113 17.155 10.5997 16.9965 12.0615 16.391C13.5233 15.7855 14.7727 14.7602 15.6518 13.4446C16.5308 12.129 17 10.5823 17 9C17 6.87827 16.1571 4.84344 14.6569 3.34315C13.1566 1.84285 11.1217 1 9 1ZM9 16C7.61553 16 6.26216 15.5895 5.11101 14.8203C3.95987 14.0511 3.06266 12.9579 2.53285 11.6788C2.00303 10.3997 1.86441 8.99224 2.13451 7.63437C2.4046 6.2765 3.07129 5.02922 4.05026 4.05025C5.02922 3.07128 6.2765 2.4046 7.63437 2.1345C8.99224 1.86441 10.3997 2.00303 11.6788 2.53284C12.9579 3.06266 14.0511 3.95986 14.8203 5.11101C15.5895 6.26215 16 7.61553 16 9C16 10.8565 15.2625 12.637 13.9498 13.9497C12.637 15.2625 10.8565 16 9 16Z" fill="#787878" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_963_2988">
                                                                    <rect width="18" height="18" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <p>Bahasa</p>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" transition-all duration-300 ease-in-out" viewBox="0 0 24 24" fill="none" id="svgLanguageIndex">
                                                        <path d="M7 10L12 15L17 10" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="ml-7 hidden" id="languageIndex">
                                                    <form action="">
                                                        <button class="md:text-lg text-base hover:text-primary-50 mt-3 text-primary-50">Indonesia</button>
                                                    </form>
                                                    <form action="">
                                                        <button class="md:text-lg text-base text-light-90 hover:text-primary-50 mt-3">English</button>
                                                    </form>
                                                </div>
                                                <div class="mt-4"><a href="" class="md:text-lg text-base text-dark-10 hover:text-primary-50 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M16.7102 10.8523L15.0227 9.16481C14.9172 9.05936 14.7742 9.00012 14.625 9.00012C14.4758 9.00012 14.3328 9.05936 14.2273 9.16481L9 14.3921V16.875H11.4829L16.7102 11.6477C16.8156 11.5422 16.8749 11.3992 16.8749 11.25C16.8749 11.1008 16.8156 10.9578 16.7102 10.8523ZM11.0171 15.75H10.125V14.8579L12.9375 12.0454L13.8296 12.9375L11.0171 15.75ZM14.625 12.1421L13.7329 11.25L14.625 10.3579L15.5171 11.25L14.625 12.1421ZM4.5 9H10.125V10.125H4.5V9ZM4.5 5.625H11.25V6.75H4.5V5.625Z" fill="#787878" />
                                                            <path d="M14.625 2.25C14.6247 1.95172 14.5061 1.66575 14.2952 1.45483C14.0843 1.24392 13.7983 1.1253 13.5 1.125H2.25C1.95173 1.1253 1.66575 1.24392 1.45484 1.45483C1.24392 1.66575 1.1253 1.95172 1.125 2.25V9.5625C1.12375 10.6843 1.42803 11.7853 2.00519 12.7473C2.58235 13.7092 3.41059 14.4958 4.401 15.0227L7.3125 16.5752V15.3L4.93088 14.0299C4.12051 13.5988 3.44282 12.9552 2.97051 12.1682C2.49821 11.3812 2.24913 10.4804 2.25 9.5625V2.25H13.5V7.3125H14.625V2.25Z" fill="#787878" />
                                                        </svg>Kebijakan ProjectHub</a>
                                                </div>
                                                <div class="border-t-2 border-light-30 mt-5"></div>
                                                <div class="mt-5 mb-10"><a href="" class="md:text-lg text-base text-[#FF0000] flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M3.375 16.875H10.125C10.4233 16.8747 10.7093 16.7561 10.9202 16.5452C11.1311 16.3343 11.2497 16.0483 11.25 15.75V14.0625H10.125V15.75H3.375V2.25H10.125V3.9375H11.25V2.25C11.2497 1.95172 11.1311 1.66575 10.9202 1.45483C10.7093 1.24392 10.4233 1.1253 10.125 1.125H3.375C3.07672 1.1253 2.79075 1.24392 2.57983 1.45483C2.36892 1.66575 2.2503 1.95172 2.25 2.25V15.75C2.2503 16.0483 2.36892 16.3343 2.57983 16.5452C2.79075 16.7561 3.07672 16.8747 3.375 16.875Z" fill="#D30000" />
                                                            <path d="M11.5796 11.5796L13.5968 9.5625H5.625V8.4375H13.5968L11.5796 6.42037L12.375 5.625L15.75 9L12.375 12.375L11.5796 11.5796Z" fill="#D30000" />
                                                        </svg>Keluar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/index">
                                    <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="md:w-44 sm:w-40">
                                </a>
                            </div>
                            <div class="relative sm:w-full sm:order-2 sm:mt-5" id="searchbar">
                                <form action="/search">
                                    <button class="absolute mt-4 pl-5 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_714_839)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" class="group-hover:fill-primary-50" d="M8.75003 1.66699C7.62052 1.66709 6.50741 1.9373 5.50358 2.45507C4.49974 2.97285 3.63427 3.72317 2.97939 4.64345C2.32451 5.56373 1.8992 6.62728 1.73895 7.74536C1.5787 8.86344 1.68815 10.0036 2.05818 11.0708C2.4282 12.138 3.04807 13.1012 3.86606 13.8801C4.68405 14.659 5.67645 15.231 6.76046 15.5483C7.84446 15.8657 8.98865 15.9192 10.0975 15.7044C11.2064 15.4896 12.2479 15.0128 13.135 14.3137L16.1784 17.357C16.3355 17.5088 16.546 17.5928 16.7645 17.5909C16.983 17.589 17.192 17.5013 17.3465 17.3468C17.501 17.1923 17.5887 16.9833 17.5906 16.7648C17.5925 16.5463 17.5085 16.3358 17.3567 16.1787L14.3134 13.1353C15.1367 12.0908 15.6493 10.8357 15.7926 9.51343C15.9359 8.1912 15.704 6.85534 15.1235 5.65874C14.5431 4.46213 13.6374 3.45312 12.5103 2.74718C11.3831 2.04125 10.08 1.6669 8.75003 1.66699ZM3.33336 8.75033C3.33336 7.31374 3.90404 5.93599 4.91987 4.92016C5.93569 3.90434 7.31344 3.33366 8.75003 3.33366C10.1866 3.33366 11.5644 3.90434 12.5802 4.92016C13.596 5.93599 14.1667 7.31374 14.1667 8.75033C14.1667 10.1869 13.596 11.5647 12.5802 12.5805C11.5644 13.5963 10.1866 14.167 8.75003 14.167C7.31344 14.167 5.93569 13.5963 4.91987 12.5805C3.90404 11.5647 3.33336 10.1869 3.33336 8.75033Z" fill="#CCCCCC" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_714_839">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <input type="text" placeholder="Cari Project Disini" autocomplete="off" class="border-2 border-light-70 bg-white py-3 pl-12 text-light-50 rounded-full w-[307px] sm:w-full focus:outline-primary-50 z-20" id="searchInput">
                                </form>
                                <div class="absolute mt-2 hidden z-20 md:fixed md:left-1/2 md:transform md:-translate-x-1/2 sm:stiky sm:left-1/2 sm:transform sm:-translate-x-1/2 md:mt-3" id="searchHelp">
                                    <div class="bg-white drop-shadow-lg w-[700px] sm:w-[340px] border-[1px] border-light-70 rounded">
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
                                            <div class="ml-8 sm:ml-0 flex sm:flex-wrap items-center mt-3 gap-3">
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
                                            <div class="ml-8 sm:ml-0 flex sm:flex-wrap items-center mt-3 gap-3">
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
                            <div class="dropdown lg:block hidden">
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
                            <a href="" class="text-light-70 font-medium text-base lg:block hidden">Projek Saya</a>
                            <div class="hidden">
                                <a href="" class="text-primary-50 font-medium text-base flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.084 2.75C9.35464 2.75 8.65517 3.03973 8.13944 3.55546C7.62372 4.07118 7.33398 4.77065 7.33398 5.5V6.41667H4.58398C3.85464 6.41667 3.15517 6.7064 2.63944 7.22212C2.12372 7.73785 1.83398 8.43732 1.83398 9.16667V16.5C1.83398 17.2293 2.12372 17.9288 2.63944 18.4445C3.15517 18.9603 3.85464 19.25 4.58398 19.25H17.4173C18.1467 19.25 18.8461 18.9603 19.3619 18.4445C19.8776 17.9288 20.1673 17.2293 20.1673 16.5V9.16667C20.1673 8.43732 19.8776 7.73785 19.3619 7.22212C18.8461 6.7064 18.1467 6.41667 17.4173 6.41667H14.6673V5.5C14.6673 4.77065 14.3776 4.07118 13.8619 3.55546C13.3461 3.03973 12.6467 2.75 11.9173 2.75H10.084ZM12.834 6.41667H9.16732V5.5C9.16732 5.25688 9.2639 5.02373 9.4358 4.85182C9.60771 4.67991 9.84087 4.58333 10.084 4.58333H11.9173C12.1604 4.58333 12.3936 4.67991 12.5655 4.85182C12.7374 5.02373 12.834 5.25688 12.834 5.5V6.41667Z" fill="#020179" />
                                    </svg>Projek Saya</a>
                            </div>
                            <a href="" class="flex items-center gap-2 text-primary-50 font-medium text-base md:hidden sm:hidden"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                    <path d="M11.5 1.91699C6.20713 1.91699 1.91667 6.20745 1.91667 11.5003C1.91667 16.7932 6.20713 21.0837 11.5 21.0837C16.7929 21.0837 21.0833 16.7932 21.0833 11.5003C21.0833 6.20745 16.7929 1.91699 11.5 1.91699ZM16.2917 12.4587H12.4583V16.292H10.5417V12.4587H6.70834V10.542H10.5417V6.70866H12.4583V10.542H16.2917V12.4587Z" fill="#020179" />
                                </svg>Buat Projek</a>
                            <div class="border-[1px] border-[#D9D9D9] h-8 lg:block hidden"></div>
                            <div class="flex items-center gap-3 sm:order-1">
                                <div class="relative sm:block hidden">
                                    <form action="">
                                        <button class="p-1 group transition-all duration-200 ease-in-out tooltip tooltip-bottom" data-tip="Notifikasi"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                                <path class="group-hover:fill-primary-50" d="M16.25 21.1248C16.25 21.9867 15.9076 22.8134 15.2981 23.4229C14.6886 24.0324 13.862 24.3748 13 24.3748C12.138 24.3748 11.3114 24.0324 10.7019 23.4229C10.0924 22.8134 9.75 21.9867 9.75 21.1248H16.25ZM21.125 19.4998H3.4125C3.15391 19.4998 2.90592 19.3971 2.72307 19.2142C2.54022 19.0314 2.4375 18.7834 2.4375 18.5248C2.4375 18.2662 2.54022 18.0182 2.72307 17.8354C2.90592 17.6525 3.15391 17.5498 3.4125 17.5498H4.875V11.3748C4.875 7.4423 7.67 4.1598 11.3831 3.4123C11.3604 3.18635 11.3854 2.95815 11.4563 2.74243C11.5272 2.5267 11.6426 2.32824 11.7949 2.15984C11.9473 1.99144 12.1332 1.85684 12.3408 1.76472C12.5484 1.6726 12.7729 1.625 13 1.625C13.2271 1.625 13.4517 1.6726 13.6592 1.76472C13.8668 1.85684 14.0527 1.99144 14.2051 2.15984C14.3574 2.32824 14.4728 2.5267 14.5437 2.74243C14.6146 2.95815 14.6396 3.18635 14.6169 3.4123C16.4533 3.78583 18.1043 4.78246 19.2902 6.23348C20.4762 7.6845 21.1244 9.50076 21.125 11.3748V17.5498H22.5875C22.8461 17.5498 23.0941 17.6525 23.2769 17.8354C23.4598 18.0182 23.5625 18.2662 23.5625 18.5248C23.5625 18.7834 23.4598 19.0314 23.2769 19.2142C23.0941 19.3971 22.8461 19.4998 22.5875 19.4998H21.125Z" fill="#B3B3B3" />
                                            </svg>
                                            <svg class="absolute top-0 right-0" xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                                                <circle cx="3.5" cy="3.5" r="3.5" fill="#FF3D00" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="dropdown dropdown-bottom dropdown-end dropdown-notif lg:block md:block hidden">
                                    <div tabindex="0" role="button" class=""><button onclick="handleDropdownClick()" class="p-1 btn-notif relative group transition-all duration-200 ease-in-out tooltip tooltip-bottom" data-tip="Notifikasi"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                                <path class="group-hover:fill-primary-50" d="M16.25 21.1248C16.25 21.9867 15.9076 22.8134 15.2981 23.4229C14.6886 24.0324 13.862 24.3748 13 24.3748C12.138 24.3748 11.3114 24.0324 10.7019 23.4229C10.0924 22.8134 9.75 21.9867 9.75 21.1248H16.25ZM21.125 19.4998H3.4125C3.15391 19.4998 2.90592 19.3971 2.72307 19.2142C2.54022 19.0314 2.4375 18.7834 2.4375 18.5248C2.4375 18.2662 2.54022 18.0182 2.72307 17.8354C2.90592 17.6525 3.15391 17.5498 3.4125 17.5498H4.875V11.3748C4.875 7.4423 7.67 4.1598 11.3831 3.4123C11.3604 3.18635 11.3854 2.95815 11.4563 2.74243C11.5272 2.5267 11.6426 2.32824 11.7949 2.15984C11.9473 1.99144 12.1332 1.85684 12.3408 1.76472C12.5484 1.6726 12.7729 1.625 13 1.625C13.2271 1.625 13.4517 1.6726 13.6592 1.76472C13.8668 1.85684 14.0527 1.99144 14.2051 2.15984C14.3574 2.32824 14.4728 2.5267 14.5437 2.74243C14.6146 2.95815 14.6396 3.18635 14.6169 3.4123C16.4533 3.78583 18.1043 4.78246 19.2902 6.23348C20.4762 7.6845 21.1244 9.50076 21.125 11.3748V17.5498H22.5875C22.8461 17.5498 23.0941 17.6525 23.2769 17.8354C23.4598 18.0182 23.5625 18.2662 23.5625 18.5248C23.5625 18.7834 23.4598 19.0314 23.2769 19.2142C23.0941 19.3971 22.8461 19.4998 22.5875 19.4998H21.125Z" fill="#B3B3B3" />
                                            </svg>
                                            <svg class="absolute top-0 right-0" xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                                                <circle cx="3.5" cy="3.5" r="3.5" fill="#FF3D00" />
                                            </svg>
                                        </button></div>
                                    <ul tabindex="0" id="dropdown-content" class="dropdown-content z-[1] menu shadow w-[370px] bg-white rounded-box md:mt-8 absolute right-0">
                                        <div class="">
                                            <div class="">
                                                <div class="mx-6 pt-2">
                                                    <p class="text-base font-semibold">Notifikasi (<span>12</span>)</p>
                                                    <!-- <button tabindex="0" class="btn-close-notif"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M16.2887 14.9617C16.4649 15.1379 16.5638 15.3767 16.5638 15.6258C16.5638 15.8749 16.4649 16.1137 16.2887 16.2899C16.1126 16.466 15.8737 16.5649 15.6247 16.5649C15.3756 16.5649 15.1367 16.466 14.9606 16.2899L10.0005 11.3281L5.03874 16.2883C4.86262 16.4644 4.62374 16.5634 4.37467 16.5634C4.1256 16.5634 3.88673 16.4644 3.71061 16.2883C3.53449 16.1122 3.43555 15.8733 3.43555 15.6242C3.43555 15.3752 3.53449 15.1363 3.71061 14.9602L8.67233 10L3.71217 5.0383C3.53605 4.86218 3.43711 4.62331 3.43711 4.37423C3.43711 4.12516 3.53605 3.88629 3.71217 3.71017C3.88829 3.53405 4.12716 3.43511 4.37624 3.43511C4.62531 3.43511 4.86418 3.53405 5.0403 3.71017L10.0005 8.67189L14.9622 3.70939C15.1383 3.53327 15.3772 3.43433 15.6262 3.43433C15.8753 3.43433 16.1142 3.53327 16.2903 3.70939C16.4664 3.88551 16.5654 4.12438 16.5654 4.37345C16.5654 4.62252 16.4664 4.86139 16.2903 5.03752L11.3286 10L16.2887 14.9617Z" fill="#2B2B2B" />
                                                        </svg></button> -->
                                                </div>
                                                <div class="border-t-2 border-light-30 mt-4"></div>
                                                <div class="h-[470px] overflow-y-auto" id="notifcontent">
                                                    <div class="hover:bg-gray-100 pt-4 cursor-pointer">
                                                        <a href="">
                                                            <div class="flex mx-5 gap-3">
                                                                <div class="relative p-1">
                                                                    <div class="bg-light-30 rounded-full p-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                                            <g opacity="0.5">
                                                                                <path d="M19.7996 13.2H17.4016C17.2146 13.97 16.9176 14.685 16.5106 15.323L18.2046 17.017L15.8946 19.327L14.2006 17.633C13.5626 18.029 12.8476 18.326 12.0996 18.502V20.9H8.79961V18.502C8.05161 18.326 7.33661 18.029 6.69861 17.633L5.00461 19.327L2.67261 16.995L4.36661 15.301C3.97061 14.663 3.67361 13.948 3.49761 13.2H1.09961V9.93301H3.48661C3.66261 9.16301 3.97061 8.44801 4.36661 7.79901L2.67261 6.10501L4.98261 3.79501L6.67661 5.48901C7.31461 5.08201 8.04061 4.78501 8.79961 4.59801V2.20001H12.0996V4.59801C12.8476 4.77401 13.5626 5.07101 14.2006 5.46701L15.8946 3.77301L18.2266 6.10501L16.5326 7.79901C16.9286 8.44801 17.2366 9.16301 17.4126 9.93301H19.7996V13.2ZM10.4496 14.85C12.2756 14.85 13.7496 13.376 13.7496 11.55C13.7496 9.72401 12.2756 8.25001 10.4496 8.25001C8.62361 8.25001 7.14961 9.72401 7.14961 11.55C7.14961 13.376 8.62361 14.85 10.4496 14.85Z" fill="#787878" />
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <svg class="absolute top-0 right-0" xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 5 5" fill="none">
                                                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#020179" />
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <p class="font-medium text-dark-70">[Sistem] Projek
                                                                        yang
                                                                        anda <br> buat telah kami hapus</p>
                                                                    <p class="text-xs mt-2 text-dark-70">Berdasarkan
                                                                        tinjauan
                                                                        sistem kami yang menerima banyak report dari ...
                                                                    </p>
                                                                </div>
                                                                <p class="font-medium text-xs text-light-90 mt-1 flex gap-1">
                                                                    <span>5</span> <span>jam</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <button class="text-primary-50 text-xs font-medium mt-4 ml-[85px]">
                                                            Tandai telah dibaca
                                                        </button>
                                                        <div class="border-t-2 border-light-30 mx-5 mt-4"></div>
                                                    </div>
                                                    <div class="hover:bg-gray-100 pt-4 cursor-pointer">
                                                        <a href="">
                                                            <div class="flex mx-5 gap-3">
                                                                <img src="{{asset('assets/img_index/asset/index/profilenotif.png')}}" alt="" class="h-[53px] w-[53px] p-1">
                                                                <div class="">
                                                                    <p class="font-medium text-dark-70">[Projek] Lamaran
                                                                        anda
                                                                        <br> telah diterima oleh Rahm...
                                                                    </p>
                                                                    <p class="text-xs mt-2 text-dark-70">Selamat,
                                                                        Lamaran
                                                                        yang
                                                                        kamu ajukan untuk projek “Butuh Jasa UI/UX...
                                                                    </p>
                                                                </div>
                                                                <p class="font-medium text-xs text-light-90 mt-1 flex gap-1">
                                                                    <span>5</span> <span>jam</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <button class="text-primary-50 text-xs font-medium mt-4 ml-[85px]">
                                                            Tandai telah dibaca
                                                        </button>
                                                        <div class="border-t-2 border-light-30 mx-5 mt-4"></div>
                                                    </div>
                                                    <div class="hover:bg-gray-100 pt-4 cursor-pointer">
                                                        <a href="">
                                                            <div class="flex mx-5 gap-3">
                                                                <img src="{{asset('assets/img_index/asset/index/profilenotif.png')}}" alt="" class="h-[53px] w-[53px] p-1">
                                                                <div class="">
                                                                    <p class="font-medium text-light-90">[Projek]
                                                                        Lamaran
                                                                        anda
                                                                        <br> telah diterima oleh Rahm...
                                                                    </p>
                                                                    <p class="text-xs mt-2 text-light-90">Selamat,
                                                                        Lamaran
                                                                        yang
                                                                        kamu ajukan untuk projek “Butuh Jasa UI/UX...
                                                                    </p>
                                                                </div>
                                                                <p class="font-medium text-xs text-light-90 mt-1 flex gap-1">
                                                                    <span>5</span> <span>jam</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <button class="text-light-90 text-xs font-medium mt-4 ml-[85px]">
                                                            Tandai telah dibaca
                                                        </button>
                                                        <div class="border-t-2 border-light-30 mx-5 mt-4"></div>
                                                    </div>
                                                    <div class="hover:bg-gray-100 pt-4 cursor-pointer">
                                                        <a href="">
                                                            <div class="flex mx-5 gap-3">
                                                                <img src="{{asset('assets/img_index/asset/index/profilenotif.png')}}" alt="" class="h-[53px] w-[53px] p-1">
                                                                <div class="">
                                                                    <p class="font-medium text-light-90">[Projek]
                                                                        Lamaran
                                                                        anda
                                                                        <br> telah diterima oleh Rahm...
                                                                    </p>
                                                                    <p class="text-xs mt-2 text-light-90">Selamat,
                                                                        Lamaran
                                                                        yang
                                                                        kamu ajukan untuk projek “Butuh Jasa UI/UX...
                                                                    </p>
                                                                </div>
                                                                <p class="font-medium text-xs text-light-90 mt-1 flex gap-1">
                                                                    <span>5</span> <span>jam</span>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <button class="text-light-90 text-xs font-medium mt-4 ml-[85px]">
                                                            Tandai telah dibaca
                                                        </button>
                                                        <div class="border-t-2 border-light-30 mx-5 mt-4"></div>
                                                    </div>
                                                </div>
                                                <div class="mx-5 py-3">
                                                    <button class="w-full bg-primary-50 text-white py-3 rounded-xl">Tandai
                                                        semua dibaca</button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <div class="relative">
                                    <button class="p-1 group tooltip tooltip-bottom" data-tip="Pesan"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                            <g clip-path="url(#clip0_714_850)">
                                                <path class="group-hover:fill-primary-50" d="M11.7975 2.74924C12.127 2.52935 12.5105 2.404 12.9062 2.38681C13.302 2.36962 13.6948 2.46125 14.0422 2.65174L14.2014 2.74924L22.8681 8.52666C23.1396 8.70759 23.3667 8.94752 23.5326 9.22852C23.6984 9.50952 23.7986 9.82434 23.8257 10.1495L23.8333 10.3293V20.5831C23.8335 21.1297 23.6271 21.6562 23.2554 22.057C22.8837 22.4578 22.3742 22.7033 21.8292 22.7443L21.6667 22.7497H4.33333C3.78671 22.7499 3.26022 22.5435 2.8594 22.1718C2.45859 21.8001 2.21308 21.2907 2.17208 20.7456L2.16666 20.5831V10.3293C2.16667 10.0031 2.24032 9.68116 2.38214 9.38741C2.52395 9.09366 2.73025 8.83572 2.98566 8.63283L3.13191 8.52666L11.7975 2.74924ZM13 4.55191L5.20325 9.74974L13 14.9476L20.7967 9.74974L13 4.55191Z" fill="#B3B3B3" />
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
                            <form action="" class="lg:block hidden">
                                <button class="font-semibold text-base bg-primary-50 rounded-lg py-3 text-white px-7 hover:bg-primary-70 transition-all duration-200 ease-in-out">Beralih
                                    Ke
                                    Freelancer</button>
                            </form>
                            <form action="" class="hidden">
                                <button class="font-semibold text-base bg-primary-50 rounded-lg py-3 text-white px-10 hover:bg-primary-70 transition-all duration-200 ease-in-out">Beralih
                                    Ke
                                    Owner</button>
                            </form>
                            <div class="hidden">
                                <div class="flex items-center gap-4">
                                    <form action="/login">
                                        <button class=" border-2 rounded-full border-primary-50 text-primary-50 px-10 py-3 font-semibold hover:bg-primary-50 hover:text-white transition-all duration-200 ease-in-out">Masuk</button>
                                    </form>
                                    <form action="/register">
                                        <button class=" border-2 rounded-full border-primary-50 text-white bg-primary-50 px-10 py-3 font-semibold hover:bg-primary-70 transition-all duration-200 ease-in-out">Daftar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown dropdown-bottom dropdown-end lg:block hidden">
                                <div tabindex="0" role="button" class="border-[3px] border-primary-50 rounded-full select-none" id="btnProfile">
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
                                        <a href="/profile" class="flex text-dark-70 items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 2.29199C12.0781 2.29166 13.1279 2.63693 13.9953 3.27711C14.8628 3.91729 15.5022 4.81867 15.8196 5.84895C16.1371 6.87924 16.116 7.98416 15.7593 9.00155C15.4027 10.0189 14.7293 10.8952 13.838 11.5017C15.385 12.0692 16.7268 13.0866 17.6907 14.4231C18.6545 15.7596 19.1963 17.354 19.2463 19.001C19.251 19.0924 19.2374 19.1838 19.2062 19.2699C19.1751 19.356 19.1271 19.435 19.065 19.5023C19.0029 19.5696 18.9281 19.6238 18.8448 19.6617C18.7614 19.6997 18.6714 19.7206 18.5799 19.7233C18.4884 19.726 18.3973 19.7104 18.3119 19.6774C18.2265 19.6444 18.1486 19.5947 18.0827 19.5311C18.0167 19.4676 17.9642 19.3916 17.928 19.3075C17.8919 19.2233 17.8729 19.1329 17.8723 19.0413C17.8177 17.2552 17.0697 15.5604 15.787 14.3163C14.5042 13.0721 12.7875 12.3763 11.0005 12.3763C9.21346 12.3763 7.49668 13.0721 6.21392 14.3163C4.93117 15.5604 4.18325 17.2552 4.12867 19.0413C4.1232 19.2237 4.04552 19.3964 3.91272 19.5214C3.77992 19.6465 3.60288 19.7137 3.42054 19.7082C3.23821 19.7027 3.06551 19.625 2.94045 19.4923C2.81538 19.3595 2.7482 19.1824 2.75367 19.0001C2.80385 17.3532 3.34574 15.759 4.30958 14.4227C5.27342 13.0864 6.61512 12.0691 8.162 11.5017C7.27071 10.8952 6.59732 10.0189 6.24067 9.00155C5.88401 7.98416 5.86288 6.87924 6.18036 5.84895C6.49784 4.81867 7.13723 3.91729 8.00466 3.27711C8.8721 2.63693 9.92191 2.29166 11 2.29199ZM7.33333 7.33366C7.33333 8.30612 7.71964 9.23875 8.40728 9.92638C9.09491 10.614 10.0275 11.0003 11 11.0003C11.9725 11.0003 12.9051 10.614 13.5927 9.92638C14.2804 9.23875 14.6667 8.30612 14.6667 7.33366C14.6667 6.3612 14.2804 5.42857 13.5927 4.74093C12.9051 4.0533 11.9725 3.66699 11 3.66699C10.0275 3.66699 9.09491 4.0533 8.40728 4.74093C7.71964 5.42857 7.33333 6.3612 7.33333 7.33366Z" fill="black" />
                                            </svg>Profil Saya</a>
                                        <a href="" class="flex text-dark-70 items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M5.5 9.16666H9.16667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20.1648 11.4583C20.1648 11.3877 20.1667 10.9697 20.1648 10.9404C20.1318 10.4811 19.7386 10.1154 19.2436 10.0851C19.2115 10.0833 19.1739 10.0833 19.0969 10.0833H16.7118C15.0755 10.0833 13.75 11.3144 13.75 12.8333C13.75 14.3522 15.0764 15.5833 16.7108 15.5833H19.0969C19.1739 15.5833 19.2115 15.5833 19.2436 15.5815C19.7386 15.5512 20.1327 15.1855 20.1648 14.7262C20.1667 14.6969 20.1667 14.2789 20.1667 14.2083" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M16.4997 13.75C17.0059 13.75 17.4163 13.3396 17.4163 12.8333C17.4163 12.3271 17.0059 11.9167 16.4997 11.9167C15.9934 11.9167 15.583 12.3271 15.583 12.8333C15.583 13.3396 15.9934 13.75 16.4997 13.75Z" fill="black" />
                                                <path d="M9.16634 20.1667H11.9163C15.3731 20.1667 17.1019 20.1667 18.1753 19.0923C18.9169 18.3517 19.147 17.2993 19.2176 15.5833M19.2176 10.0833C19.1461 8.36733 18.9169 7.31499 18.1753 6.57433C17.1019 5.49999 15.3731 5.49999 11.9163 5.49999H9.16634C5.70959 5.49999 3.98076 5.49999 2.90734 6.57433C1.83301 7.64774 1.83301 9.37658 1.83301 12.8333C1.83301 16.2901 1.83301 18.0189 2.90734 19.0923C3.50592 19.6918 4.30801 19.9567 5.49967 20.0732M5.49967 5.49999L8.92342 3.22941C9.40491 2.91622 9.96696 2.74951 10.5413 2.74951C11.1157 2.74951 11.6778 2.91622 12.1593 3.22941L15.583 5.49999" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>Saldo & Penarikan</a>
                                        <a href="" class="flex text-dark-70 items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M11 20.625C5.6925 20.625 1.375 16.3075 1.375 11C1.375 5.6925 5.6925 1.375 11 1.375C16.3075 1.375 20.625 5.6925 20.625 11C20.625 16.3075 16.3075 20.625 11 20.625ZM11 2.75C6.44875 2.75 2.75 6.44875 2.75 11C2.75 15.5512 6.44875 19.25 11 19.25C15.5512 19.25 19.25 15.5512 19.25 11C19.25 6.44875 15.5512 2.75 11 2.75Z" fill="black" />
                                                <path d="M11 15.8125C10.615 15.8125 10.3125 15.51 10.3125 15.125V6.875C10.3125 6.49 10.615 6.1875 11 6.1875C11.385 6.1875 11.6875 6.49 11.6875 6.875V15.125C11.6875 15.51 11.385 15.8125 11 15.8125Z" fill="black" />
                                                <path d="M15.125 11.6875H6.875C6.49 11.6875 6.1875 11.385 6.1875 11C6.1875 10.615 6.49 10.3125 6.875 10.3125H15.125C15.51 10.3125 15.8125 10.615 15.8125 11C15.8125 11.385 15.51 11.6875 15.125 11.6875Z" fill="black" />
                                            </svg>Buat Projek</a>
                                        <a href="" class="flex text-dark-70 items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M4.71434 19.9914H9.42862M7.07148 19.9914V16.8485M0.785767 8.99135V15.2771C0.785767 15.6938 0.951327 16.0935 1.24603 16.3882C1.54073 16.6829 1.94043 16.8485 2.3572 16.8485H11.7858C12.2025 16.8485 12.6022 16.6829 12.8969 16.3882C13.1916 16.0935 13.3572 15.6938 13.3572 15.2771V8.99135C13.3572 8.57458 13.1916 8.17488 12.8969 7.88018C12.6022 7.58548 12.2025 7.41992 11.7858 7.41992H2.3572C1.94043 7.41992 1.54073 7.58548 1.24603 7.88018C0.951327 8.17488 0.785767 8.57458 0.785767 8.99135Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.7858 4.27748V3.49177C11.7858 3.28338 11.8685 3.08354 12.0159 2.93619C12.1632 2.78884 12.3631 2.70605 12.5715 2.70605H20.4286C20.637 2.70605 20.8369 2.78884 20.9842 2.93619C21.1316 3.08354 21.2143 3.28338 21.2143 3.49177V19.2061C21.2143 19.4144 21.1316 19.6143 20.9842 19.7616C20.8369 19.909 20.637 19.9918 20.4286 19.9918H14.1429" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.5001 9.77706H21.2143M17.8751 6.43778C17.823 6.43778 17.773 6.41708 17.7362 6.38025C17.6993 6.34341 17.6786 6.29345 17.6786 6.24135C17.6786 6.18925 17.6993 6.13929 17.7362 6.10245C17.773 6.06562 17.823 6.04492 17.8751 6.04492C17.9272 6.04492 17.9771 6.06562 18.014 6.10245C18.0508 6.13929 18.0715 6.18925 18.0715 6.24135C18.0715 6.29345 18.0508 6.34341 18.014 6.38025C17.9771 6.41708 17.9272 6.43778 17.8751 6.43778Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>Projek Saya</a>
                                    </div>
                                    <div class="border-t-[1px] border-light-30 my-5 mx-5"></div>
                                    <div class="mx-5">
                                        <a href="" class="flex text-dark-70 items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                                <path d="M12.9058 1.375C13.0513 1.375 13.1931 1.42121 13.3107 1.50695C13.4284 1.59269 13.5157 1.71355 13.5603 1.85212L14.3165 4.202C14.6342 4.35737 14.938 4.532 15.2282 4.72862L17.6427 4.20888C17.785 4.17848 17.9333 4.19406 18.0663 4.25336C18.1992 4.31267 18.3099 4.41264 18.3824 4.53888L20.2882 7.8375C20.3609 7.96366 20.3917 8.10968 20.3762 8.2545C20.3606 8.39931 20.2995 8.53544 20.2015 8.64325L18.5447 10.472C18.5688 10.8227 18.5688 11.1746 18.5447 11.5252L20.2015 13.3567C20.2995 13.4646 20.3606 13.6007 20.3762 13.7455C20.3917 13.8903 20.3609 14.0363 20.2882 14.1625L18.3824 17.4625C18.3097 17.5885 18.1989 17.6882 18.066 17.7472C17.9331 17.8063 17.7849 17.8216 17.6427 17.7911L15.2282 17.2714C14.9394 17.4666 14.6342 17.6426 14.3179 17.798L13.5603 20.1479C13.5157 20.2864 13.4284 20.4073 13.3107 20.4931C13.1931 20.5788 13.0513 20.625 12.9058 20.625H9.09428C8.94872 20.625 8.80692 20.5788 8.68931 20.4931C8.57169 20.4073 8.48432 20.2864 8.43978 20.1479L7.6849 17.7994C7.36813 17.6445 7.06259 17.4676 6.77053 17.27L4.3574 17.7911C4.21504 17.8215 4.06671 17.8059 3.93377 17.7466C3.80083 17.6873 3.69014 17.5874 3.61765 17.4611L1.7119 14.1625C1.63913 14.0363 1.60831 13.8903 1.62387 13.7455C1.63944 13.6007 1.7006 13.4646 1.79853 13.3567L3.4554 11.5252C3.4314 11.1755 3.4314 10.8245 3.4554 10.4748L1.79853 8.64325C1.7006 8.53544 1.63944 8.39931 1.62387 8.2545C1.60831 8.10968 1.63913 7.96366 1.7119 7.8375L3.61765 4.5375C3.69034 4.41151 3.80111 4.31183 3.93404 4.25278C4.06696 4.19373 4.21519 4.17836 4.3574 4.20888L6.77053 4.73C7.06203 4.53338 7.36728 4.356 7.6849 4.20063L8.44115 1.85212C8.48555 1.714 8.5725 1.59346 8.68957 1.50776C8.80664 1.42205 8.94782 1.37559 9.0929 1.375H12.9044H12.9058ZM12.4025 2.75H9.59753L8.81653 5.17963L8.2899 5.43675C8.03101 5.56344 7.7811 5.70769 7.5419 5.8685L7.05515 6.1985L4.55815 5.6595L3.15565 8.0905L4.86753 9.98525L4.82628 10.5682C4.80652 10.8557 4.80652 11.1443 4.82628 11.4318L4.86753 12.0147L3.1529 13.9095L4.55678 16.3405L7.05378 15.8029L7.54053 16.1315C7.77972 16.2923 8.02964 16.4366 8.28853 16.5632L8.81515 16.8204L9.59753 19.25H12.4053L13.189 16.819L13.7143 16.5632C13.9729 16.4369 14.2224 16.2926 14.4609 16.1315L14.9463 15.8029L17.4447 16.3405L18.8472 13.9095L17.1339 12.0147L17.1752 11.4318C17.195 11.1438 17.195 10.8548 17.1752 10.5669L17.1339 9.98388L18.8485 8.0905L17.4447 5.6595L14.9463 6.19575L14.4609 5.8685C14.2224 5.70737 13.9729 5.5631 13.7143 5.43675L13.189 5.181L12.4039 2.75H12.4025ZM11 6.875C12.094 6.875 13.1433 7.3096 13.9168 8.08318C14.6904 8.85677 15.125 9.90598 15.125 11C15.125 12.094 14.6904 13.1432 13.9168 13.9168C13.1433 14.6904 12.094 15.125 11 15.125C9.90601 15.125 8.8568 14.6904 8.08321 13.9168C7.30962 13.1432 6.87503 12.094 6.87503 11C6.87503 9.90598 7.30962 8.85677 8.08321 8.08318C8.8568 7.3096 9.90601 6.875 11 6.875ZM11 8.25C10.2707 8.25 9.57121 8.53973 9.05548 9.05546C8.53976 9.57118 8.25003 10.2707 8.25003 11C8.25003 11.7293 8.53976 12.4288 9.05548 12.9445C9.57121 13.4603 10.2707 13.75 11 13.75C11.7294 13.75 12.4288 13.4603 12.9446 12.9445C13.4603 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4603 9.57118 12.9446 9.05546C12.4288 8.53973 11.7294 8.25 11 8.25Z" fill="black" />
                                            </svg>Pengaturan</a>
                                        <div class="flex items-center justify-between hover:bg-light-30 rounded-lg pl-3 pr-2 py-2 cursor-pointer" id="btnOpenBahasa">
                                            <div class="flex text-dark-70 items-center font-medium text-base gap-2">
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
                                        <a href="" class="flex text-dark-70 items-center font-medium text-base gap-2 pl-3 py-2 hover:bg-light-30 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
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
                    <div class="mt-5 border-t-2 border-b-2 border-light-30 lg:block hidden">
                        <div class="mx-14">
                            <section class="splide" aria-label="Basic Structure Example">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[200px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Web & Pemrograman</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Grafis dan Desain</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[220px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Penulisan & Penerjemah</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Pemasaran Digital</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Video dan Animasi</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Tutor & Pengajar</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[160px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Bisnis & Akutansi</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[150px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Jasa Konsultasi</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[150px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Musik & Audio</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[140px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Data & Riset</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[140px]">
                                            <a href="" class="font-medium">
                                                <p class="text-center">Editing Foto</p>
                                            </a>
                                        </li>
                                        <li class="splide__slide text-dark-70 hover:border-primary-50 hover:text-primary-50 border-b-2 border-transparent transition-all duration-100 easy-in-out cursor-pointer py-3 w-[170px]">
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
    <footer class="mt-28 container mx-auto">
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
            <div class="grid grid-cols-12 mt-16 sm:mt-12 pb-10">
                <div class="lg:col-span-4 md:col-span-6 col-span-12">
                    <img src="{{asset('assets/img_index/asset/landingPage/logoProjectHubBlue.svg')}}" alt="logoProjectHub" class="sm:w-40">
                    <p class="text-lg font-medium leading-5 mt-10 sm:text-[13px] text-dark-70 sm:mt-5">Bersama
                        ProjectHub, raih
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
                        <ul>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                        Web & Pemrograman
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Grafis dan Desain
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Penulisan dan Penerjemah
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Pemasaran Digital
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Video dan Animasi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Tutor & Pengajar
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Bisnis & Akutansi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Jasa Konsultasi
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Musik & Audio
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Data & Riset
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Editing Foto
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
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
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                        Bantuan
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Kebijakan ProjectHub
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Karir
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Kerja Sama
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Syarat dan Ketentuan
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
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
                                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                            Tentang ProjectHub
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Blog
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Leaderboard
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Buat Project
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                            Daftar Project
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="inline-block">
                                        <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
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
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50">
                                        Tentang ProjectHub
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Blog
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Leaderboard
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Buat Project
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
                                        Daftar Project
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="inline-block">
                                    <p class="text-light-90 hover:underline hover:decoration-primary-50 hover:text-primary-50 mt-2 md:mt-1">
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
<script src="{{asset('js/search.js')}}"></script>
<script src="{{asset('js/jelajahiOverlay.js')}}"></script>
<script src="{{asset('js/btnOpenBahasa.js')}}"></script>
<script src="{{asset('js/btnProfile.js')}}"></script>
<script src="{{asset('js/drawerMobile.js')}}"></script>
<script src="{{asset('js/modalProfile.js')}}"></script>
<script src="{{asset('js/modal-report.js')}}"></script>
<script src="{{asset('js/btn-notif.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 9,
        perMove: 1,
        pagination: false,
        autoWidth: true,
        drag: false,
    });

    splide.mount();
</script>
<script>
    $(document).ready(function() {
        // Handle button click event
        $('.btn-umum, .btn-dokumen, .btn-rating, .btn-riwayat').on('click', function() {
            // Remove active class from all buttons
            $('.btn-umum, .btn-dokumen, .btn-rating, .btn-riwayat').removeClass(
                'text-primary-50 border-primary-50');
            // Add border-transparent class to all buttons
            $('.btn-umum, .btn-dokumen, .btn-rating, .btn-riwayat').addClass('border-transparent');

            // Remove border-transparent class from the clicked button
            $(this).removeClass('border-transparent');
            // Add active class to the clicked button
            $(this).addClass('text-primary-50 border-primary-50');

            // Hide all content divs
            $('.umum, .dokumen, .rating, .riwayat').hide();

            // Show the corresponding content based on the clicked button
            var targetClass = $(this).attr('class').split(' ')[0].replace('btn-', '');
            $('.' + targetClass).show();
        });

        // Trigger click event on the default active button (btn-umum)
        $('.btn-umum').trigger('click');
    });
</script>
<script>
    function hideDiv(className) {
        var elements = document.getElementsByClassName(className);
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = 'none';
        }
    }
</script>


</html>
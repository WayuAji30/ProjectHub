<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Pengaturan bahasa -->
    <link rel="alternate" hreflang="en" href="https://yourwebsite.com/en/page.html" />
    <link rel="alternate" hreflang="id" href="https://yourwebsite.com/id/page.html" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succsess Change Data</title>
    @vite(['resources/css/app.css'])
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/logo/iconlogo.svg')}}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


<body class="font-inter bg-white flex items-center h-screen">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-28" width="125" height="125" viewBox="0 0 125 125"
                fill="none">
                <g clip-path="url(#clip0_1239_2071)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 62.5C0 45.924 6.5848 30.0268 18.3058 18.3058C30.0268 6.5848 45.924 0 62.5 0C79.076 0 94.9731 6.5848 106.694 18.3058C118.415 30.0268 125 45.924 125 62.5C125 79.076 118.415 94.9731 106.694 106.694C94.9731 118.415 79.076 125 62.5 125C45.924 125 30.0268 118.415 18.3058 106.694C6.5848 94.9731 0 79.076 0 62.5ZM58.9333 89.25L94.9167 44.2667L88.4167 39.0667L57.7333 77.4083L36 59.3L30.6667 65.7L58.9333 89.25Z"
                        fill="#020179" />
                </g>
                <defs>
                    <clipPath id="clip0_1239_2071">
                        <rect width="125" height="125" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="text-center mt-10">
            <h1 class="font-semibold text-5xl text-dark-70 sm:text-2xl">Data <span
                    class="text-primary-50">Berhasil</span> Diubah
            </h1>
            <p class="text-light-90 text-base mt-6 sm:text-sm">Selamat, verifikasi anda diterima dan data <br
                    class="sm:block hidden"> berhasil diubah. <br class="sm:hidden block">
                Silahkan
                klik tombol dibawah<br class="sm:block hidden"> untuk kembali ke halaman <br class="sm:hidden block">
                beranda ProjectHub.</p>
            <form action="/" class="sm:mx-6">
                <button
                    class="py-3 bg-primary-50 text-white font-semibold text-lg sm:text-sm sm:py-4 w-[480px] sm:w-full rounded-lg lg:mt-12 md:mt-10 mt-8 hover:bg-primary-70 transition-all duration-200 ease-linear">Kembali
                    Ke <span class="sm:hidden">Halaman</span>
                    Beranda</button>
            </form>
        </div>
    </div>
</body>

<script src="{{asset('js/password.js')}}"></script>
<script src="{{asset('js/verify_email.js')}}"></script>
<script src="{{asset('js/time_verify.js')}}"></script>


</html>
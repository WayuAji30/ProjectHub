<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Pengaturan bahasa -->
    <link rel="alternate" hreflang="en" href="https://yourwebsite.com/en/page.html" />
    <link rel="alternate" hreflang="id" href="https://yourwebsite.com/id/page.html" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    @vite(['resources/css/app.css'])
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/logo/iconlogo.svg')}}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


<body class="font-inter bg-white flex items-center justify-center h-screen">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="lg:col-span-6 col-span-12">
                <img src="{{asset('assets/img_index/asset/logo/404.png')}}" alt="" class="mx-auto sm:w-80">
            </div>
            <div class="lg:col-span-6 col-span-12 mt-10 md:text-center sm:text-center">
                <h1 class="font-semibold text-5xl leading-[60px] sm:text-2xl sm:leading-8">Halamannya <br> <span class="text-primary-50">Ngga
                        Ada</span>
                    Hehe...</h1>
                <h2 class="text-base text-light-90 mt-8">Halaman yang kamu cari tidak tersedia <br class="hidden sm:block"> dikarenakan sudah <br class="block sm:hidden">
                    dihapus atau sedang dalam <br class="hidden sm:block"> masa pemeliharaan. Untuk saat <br class="block sm:hidden"> ini, silahkan <br class="hidden sm:block"> kembali ke halaman
                    beranda.</h2>
                <form action="/" class="sm:mx-6">
                    <button class="py-3 bg-primary-50 text-white font-semibold text-lg sm:text-sm sm:py-4 w-[480px] sm:w-full rounded-lg lg:mt-16 md:mt-12 mt-8 hover:bg-primary-70 transition-all duration-200 ease-linear">Kembali
                        Ke <span class="sm:hidden">Halaman</span>
                        Beranda</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/password.js')}}"></script>
<script src="{{asset('js/verify_email.js')}}"></script>
<script src="{{asset('js/time_verify.js')}}"></script>


</html>
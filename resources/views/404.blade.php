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
    <meta name="description"
        content="Login ke ProjectHub untuk mengakses proyek. Keamanan tinggi dan pengalaman pengguna yang intuitif. Masukkan kredensial Anda dan mulai manajemen proyek yang efisien sekarang.">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


<body class="font-inter bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="lg:col-span-6 col-span-12">
                <img src="{{asset('assets/img_index/asset/logo/404.png')}}" alt="mx-auto">
            </div>
            <div class="lg:col-span-6 col-span-12">
                <h1 class="font-semibold text-5xl">Halamannya <span>Ngga Ada</span> Hehe...</h1>
            </div>
        </div>
    </div>
</body>

</html>
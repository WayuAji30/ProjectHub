<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectHub</title>
    @vite(['resources/css/app.css'])

    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />

    <style>
    @media (min-width: 1280px) and (max-width: 1439px) {
        .bg-primary-50 img {
            padding-top: 56px;
        }
    }
    </style>
</head>

<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-6 w-full lg:block hidden">
                <div class="bg-hero-login w-full sticky top-0">
                    <div class="bg-primary-50 bg-opacity-70 w-full">
                        <img src="{{asset('assets/img_index/asset/loginandregister/logo.svg')}}" alt="logoProjectHub"
                            class="ml-12 pt-12">
                        <div class="ml-12">
                            <h1 class="text-[36px] text-white mt-16">Bersama <span
                                    class="font-semibold">ProjectHub</span>,
                                <br>
                                Raih Peluang Kerja <i class="font-semibold">#TanpaBatas.</i>
                            </h1>
                            <p class="text-white mt-6 text-[16px]">ProjectHub merupakan sebuah situs freelance yang
                                menyediakan
                                <br> ribuan
                                projek dan
                                pekerjaan
                                freelance untuk para freelancer. Selain itu, <br> para projek owner juga dapat mencari
                                freelancer
                                untuk membantu <br> mereka menyelesaikan projeknya.
                            </p>
                            <img src="{{asset('assets/img_index/asset/loginandregister/hehe.png')}}" alt="banner"
                                class="w-[82%] mt-5 ml-3">
                        </div>
                        <div class="bg-gradient-to-t from-primary-50 w-full h-32 -mt-32 relative"></div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

<script src="{{asset('js/password.js')}}"></script>


</html>
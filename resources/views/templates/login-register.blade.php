<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectHub</title>
    @vite(['resources/css/app.css'])
    <link rel="shortcut icon" href="{{asset('assets/img_index/asset/navbar/logoTitle.svg')}}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @media (min-width: 1280px) and (max-width: 1439px) {
            .bg-primary-50 img {
                padding-top: 56px;
            }

            #lupapassword {
                margin-right: 40px;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-6 w-full lg:block hidden">
                <div class="bg-hero-login w-full sticky top-0">
                    <div class="bg-primary-50 bg-opacity-70 w-full h-screen">
                        <a href="/index">
                            <img src="{{asset('assets/img_index/asset/loginandregister/logo.svg')}}" alt="logoProjectHub" class="ml-12 pt-12 select-none">
                        </a>
                        <div class="ml-12">
                            <h1 class="text-[36px] text-white mt-16 select-none">Bersama <span class="font-semibold">ProjectHub</span>,
                                <br>
                                Raih Peluang Kerja <i class="font-semibold">#TanpaBatas.</i>
                            </h1>
                            <p class="text-white mt-6 text-[16px] select-none">ProjectHub merupakan sebuah situs
                                freelance yang
                                menyediakan
                                <br> ribuan
                                projek dan
                                pekerjaan
                                freelance untuk para freelancer. Selain itu, <br> para projek owner juga dapat mencari
                                freelancer
                                untuk membantu <br> mereka menyelesaikan projeknya.
                            </p>
                            <img src="{{asset('assets/img_index/asset/loginandregister/hehe.png')}}" alt="banner" class="w-fit bottom-0 fixed select-none">
                        </div>
                        <div class="bg-gradient-to-t from-primary-50 w-[50%] h-32 select-none z-0 bottom-0 fixed"></div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

<script src="{{asset('js/password.js')}}"></script>
<script src="{{asset('js/time_verify.js')}}"></script>


</html>
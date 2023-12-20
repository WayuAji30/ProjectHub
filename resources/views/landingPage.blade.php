@extends('templates.landing_layout')
@section('content')

<section class="hero">
    <div class="md:mt-20 sm:mt-20">
        <div class="lg:bg-hero-landing md:bg-hero-landing-md bg-hero-landing-sm bg-no-repeat w-full">
            <div class="bg-primary-50 bg-opacity-80">
                <div class="grid grid-cols-12 lg:mx-16 mx-14 sm:mx-6">
                    <div class="lg:col-span-6 col-span-12 lg:pt-52 pt-20">
                        <h1 class="text-white lg:text-6xl md:text-5xl text-2xl sm:text-center">
                            <p class="lg:leading-[80px]">Apakah <span class="font-semibold">Kamu
                                    Mencari
                                    Projek</span>
                                Freelance?</p>
                        </h1>
                        <h2 class="text-white lg:mt-8 mt-9 text-lg sm:text-sm sm:text-center">
                            <p class="leading-6 lg:leading-8">ProjectHub merupakan sebuah
                                situs
                                freelance yang
                                menyediakan
                                ribuan <br class="sm:hidden block">
                                projek
                                dan pekerjaan
                                freelance untuk para freelancer. Selain itu, para projek <br class="sm:hidden block">
                                owner
                                juga dapat membuat
                                projek
                                dan
                                mencari freelancer untuk membantu <br class="sm:hidden block"> mereka menyelesaikan
                                projeknya.</p>
                        </h2>
                        <div class="flex sm:flex-col items-center mt-20 sm:mt-14 gap-7 lg:mb-24 mb-20">
                            <form action="" class="sm:w-full"><button
                                    class="text-white border-2 rounded-lg text-lg border-white w-56 sm:w-full py-3">Rekrut
                                    Freelance</button></form>
                            <form action="" class="sm:w-full"><button
                                    class="text-white border-2 rounded-lg text-lg border-white w-96 sm:w-full py-3 flex items-center justify-center gap-5">Cari
                                    Pekerjaan
                                    Freelance <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 28 28" fill="none">
                                        <path
                                            d="M18.0833 16.3333H17.1617L16.835 16.0183C17.5641 15.1713 18.097 14.1735 18.3955 13.0965C18.694 12.0195 18.7507 10.8898 18.5617 9.7883C18.0133 6.54497 15.3067 3.95497 12.04 3.5583C10.8916 3.41301 9.72509 3.53237 8.62986 3.90724C7.53464 4.28211 6.53969 4.90256 5.72114 5.72111C4.90259 6.53966 4.28214 7.53461 3.90727 8.62983C3.5324 9.72506 3.41304 10.8915 3.55833 12.04C3.955 15.3066 6.545 18.0133 9.78833 18.5616C10.8898 18.7507 12.0195 18.6939 13.0965 18.3954C14.1736 18.0969 15.1713 17.5641 16.0183 16.835L16.3333 17.1616V18.0833L21.2917 23.0416C21.77 23.52 22.5517 23.52 23.03 23.0416C23.5083 22.5633 23.5083 21.7816 23.03 21.3033L18.0833 16.3333ZM11.0833 16.3333C8.17833 16.3333 5.83333 13.9883 5.83333 11.0833C5.83333 8.1783 8.17833 5.8333 11.0833 5.8333C13.9883 5.8333 16.3333 8.1783 16.3333 11.0833C16.3333 13.9883 13.9883 16.3333 11.0833 16.3333Z"
                                            fill="white" />
                                    </svg></button></form>
                        </div>
                    </div>
                    <div class="col-span-6 lg:block hidden">
                        <img src="{{asset('assets/img_index/asset/landingPage/peoplepink.png')}}" alt="peoplePink"
                            class="mx-auto mt-40">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
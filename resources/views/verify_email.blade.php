@extends('templates.login-register')
@section('content')

<div class="lg:col-span-6 col-span-12" id="content">
    <div class="text-center lg:mt-40 md:mt-20 mt-10">
        <a href="/index">
            <img src="{{asset('assets/img_index/asset/loginandregister/logomobile.svg')}}" alt="logoProjectHub"
                class="lg:hidden block mx-auto sm:w-[180px]">
        </a>
        <img src="{{asset('assets/img_index/asset/loginandregister/verifikasi.svg')}}" alt="verify"
            class="mx-auto md:mt-20 sm:mt-16">
        <h1 class="text-dark-50 font-semibold text-3xl mt-5">Verifikasi Email Kamu</h1>
        <h2 class="text-[16px] text-light-90 mt-4 font-light">Kami Telah Mengirimkan Email Untuk <br
                class="lg:hidden md:hidden block">
            Memverifikasi <br class="lg:block md:block hidden"> Akunmu ke <br class="lg:hidden md:hidden block">
            <span class="font-semibold text-primary-50 select-none">{{$user->email}}</span>
        </h2>

        @if (session()->has('failed'))
        <p class="mt-2 lg:ml-[0%] md:ml-[0%] sm:text-xs sm:ml-2">
            <span class="text-[#D10B05]">*</span>
            <span class="text-[#D10B05]">{{session('failed')}}</span>
        </p>
        @endif

        <!-- Benerin target nya rol bagian action -->
        <form action="" target="_blank" class="flex justify-center sm:mx-10">
            <button type="submit" id="btn-verify" data-id_user="{{$user->id}}" data-email="{{$user->email}}"
                class="button-submit select-none gap-3 tracking-wide flex justify-center items-center text-white bg-primary-50 py-3 w-[500px] sm:w-full mt-12 text-[18px] rounded-lg font-semibold hover:bg-primary-70 transition-all duration-200 ease-linear">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <path
                        d="M25 22.5H22.5V11.5625L15 16.25L7.5 11.5625V22.5H5V7.5H6.5L15 12.8125L23.5 7.5H25M25 5H5C3.6125 5 2.5 6.1125 2.5 7.5V22.5C2.5 23.163 2.76339 23.7989 3.23223 24.2678C3.70107 24.7366 4.33696 25 5 25H25C25.663 25 26.2989 24.7366 26.7678 24.2678C27.2366 23.7989 27.5 23.163 27.5 22.5V7.5C27.5 6.83696 27.2366 6.20107 26.7678 5.73223C26.2989 5.26339 25.663 5 25 5Z"
                        fill="white" />
                </svg> Buka Gmail
            </button>
        </form>

        <p class="text-light-90 mt-5 sm:text-sm">Tidak menerima email? <button type="button"
                class="text-primary-50 font-medium select-none" id="kirim-ulang" data-id_user="{{$user->id}}"
                data-email="{{$user->email}}">Kirim ulang</button>
            dalam <span class="countdown text-primary-50 font-medium select-none">
                <span style="--value:1;" class="select-none"></span>:
                <span style="--value:00;" class="select-none"></span>
            </span>
            detik.</p>
        <!-- <form action="javascript:void(0);">
            <p class="text-light-90 mt-5 sm:text-sm">Tidak menerima email?
                <button class="text-primary-50 font-medium select-none" id="kirim-ulang" data-id_user="{{$user->id}}"
                    data-email="">Kirim Ulang</button>
                dalam <span class="countdown text-primary-50 font-medium select-none">
                    <span style="--value:1;" class="select-none"></span>:
                    <span style="--value:00;" class="select-none"></span>
                </span>
                detik.
            </p>
        </form> -->
    </div>
</div>

@endsection
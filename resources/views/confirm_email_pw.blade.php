@extends('templates.login-register')
@section('content')

<div class="lg:col-span-6 col-span-12">
    <div class="text-center lg:mt-32 md:mt-20 mt-5">
        <a href="/index">
            <img src="{{asset('assets/img_index/asset/loginandregister/logomobile.svg')}}" alt="logoProjectHub" class="lg:hidden block mx-auto sm:w-[180px]">
        </a>
        <img src="{{asset('assets/img_index/asset/loginandregister/ubahpassword.svg')}}" alt="verify" class="mx-auto md:mt-20 sm:mt-16">
        <h1 class="text-dark-50 font-semibold text-3xl sm:text-2xl mt-5">Ingin Mengubah Password?</h1>
        <p class="text-[16px] text-light-90 mt-4">Masukan alamat email anda yang telah <br class="lg:hidden md:hidden block"> terdaftar di ProjectHub
        </p>
        <form action="/send_verify_email" target="_blank" method="post" class="sm:mx-10 mt-12 sm:mt-5">
            @csrf
            <input type="email" name="email" id="email" required placeholder="Masukan Email Kamu" class="text-dark-90 py-3 pl-5 pr-12 border-2 border-light-50 rounded-lg w-[500px] sm:w-full mt-4 focus:outline-primary-50">

            @if (session()->has('failed'))
            <p class="text-start mt-2 lg:ml-[18%] md:ml-[18%] sm:text-xs sm:ml-2">
                <span class="text-[#D10B05]">*</span>
                <span class="text-[#D10B05]">{{session('failed')}}</span>
            </p>
            @endif

            <button type="submit" class="button-submit tracking-wide select-none sm:mb-20 text-white bg-primary-50 py-3 w-[500px] sm:w-full mt-8 text-[18px] rounded-lg font-semibold hover:bg-primary-70 transition-all duration-200 ease-linear">
                Kirim Email
            </button>
        </form>
    </div>
</div>

@endsection
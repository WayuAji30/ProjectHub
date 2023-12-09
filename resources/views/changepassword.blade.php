@extends('templates.login-register')
@section('content')

<div class="lg:col-span-6 col-span-12">
    <div class="lg:ml-20 lg:mt-36 md:mt-20 mt-7">
        <a href="/index">
            <img src="{{asset('assets/img_index/asset/loginandregister/logomobile.svg')}}" alt="logoProjectHub"
                class="lg:hidden block md:mx-auto ml-10 sm:w-[180px]">
        </a>
        <h1 class="text-dark-50 font-semibold text-3xl sm:text-2xl sm:ml-10 lg:mt-5 mt-12 md:text-center">
            Atur Ulang
            Password Kamu
        </h1>
        <p class="text-[16px] text-light-90 mt-4 sm:ml-10 md:text-center sm:mt-2 sm:text-sm sm:leading-5">Buat kata
            sandi kamu
            yang baru.
            Disarankan <br class="sm:block hidden">
            menggunakan
            <br class="lg:block md:block hidden"> kombinasi
            angka
            dan huruf <br class="sm:block hidden"> menciptakan password yang kuat.
        </p>
        <form action="" method="post" class="lg:mt-14 mt-10 lg:ml-0 md:ml-32 mx-10">
            <label for="password" class="font-medium text-dark-10 mt-5">Password Baru</label> <br>
            <div class="relative inline-block sm:block">
                <input type="password" id="password" name="password" required
                    class="text-dark-90 py-3 pl-5 pr-12 border-2 border-light-50 rounded-lg w-[500px] sm:w-full mt-4 focus:outline-primary-50">
                <button class="absolute right-5 top-8 btn-eye-close" form="none"><svg xmlns="http://www.w3.org/2000/svg"
                        width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path
                            d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                            fill="#CCC" />
                    </svg></button>
                <button class="absolute right-5 top-8 btn-eye-open" form="none" hidden><svg
                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path
                            d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                            fill="#020179" />
                    </svg></button>
            </div>
            <br> <br class="lg:block md:block hidden">
            <label for="konfirmasiPassword" class="font-medium text-dark-10 mt-5">Konfirmasi Password Baru</label> <br>
            <div class="relative inline-block sm:block">
                <input type="password" name="password" id="konfirmasiPassword" required
                    class="text-dark-90 py-3 pl-5 pr-12 border-2 border-light-50 rounded-lg w-[500px] sm:w-full mt-4 focus:outline-primary-50">
                <button class="absolute right-5 top-8 btn-eye-close" form="none"><svg xmlns="http://www.w3.org/2000/svg"
                        width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path
                            d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                            fill="#CCC" />
                    </svg></button>
                <button class="absolute right-5 top-8 btn-eye-open" form="none" hidden><svg
                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path
                            d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                            fill="#020179" />
                    </svg></button>
            </div>
            <button type="submit" name="submit"
                class="button-submit text-white bg-primary-50 py-3 w-[500px] sm:w-full mt-12 text-[18px] rounded-lg font-semibold hover:bg-primary-70 transition-all duration-200 ease-linear">
                Simpan
            </button>
        </form>
    </div>
</div>

@endsection
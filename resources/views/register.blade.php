@extends('templates.login-register')
@section('content')

<div class="lg:col-span-6 col-span-12">
    <div class="lg:ml-20 lg:mt-20 md:mt-20 mt-7">
        <a href="/index">
            <img src="{{asset('assets/img_index/asset/loginandregister/logomobile.svg')}}" alt="" class="lg:hidden block md:mx-auto sm:ml-5 sm:w-[180px]">
        </a>
        <p class="lg:text-[35px] text-3xl lg:mt-0 mt-12 sm:ml-[22px] font-semibold text-start md:text-center">Halooo,
            Daftar
            Dulu
            Ya!
        </p>
        <p class="text-light-90 mt-3 text-start md:text-center sm:ml-6">Sudah Punya Akun? Langsung <a href="/login" class="text-primary-50 font-semibold hover:text-primary-70">Masuk</a>
            Aja</p>
        <form action="/verify_email" method="post" class="lg:mt-14 mt-10 lg:ml-0 md:ml-32 mx-6">
            <label for="email" class="font-medium text-dark-10">Email</label> <br>
            <input type="email" name="email" id="email" class="text-dark-90 py-3 px-5 border-2 border-light-50 rounded-lg w-[500px] sm:w-full mt-4 focus:outline-primary-50" required>
            <br><br>
            <label for="password" class="font-medium text-dark-10 mt-5">Buat Password</label> <br>
            <div class="relative inline-block sm:block">
                <input type="password" id="password" name="password" required class="text-dark-90 py-3 pl-5 pr-12 border-2 border-light-50 rounded-lg w-[500px] sm:w-full mt-4 focus:outline-primary-50">
                <button class="absolute right-5 top-8 btn-eye-close" form="none"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z" fill="#CCC" />
                    </svg></button>
                <button class="absolute right-5 top-8 btn-eye-open" form="none" hidden><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z" fill="#020179" />
                    </svg></button>
            </div>
            <br> <br class="lg:block md:block hidden">
            <label for="konfirmasiPassword" class="font-medium text-dark-10 mt-5">Konfirmasi Password</label> <br>
            <div class="relative inline-block sm:block">
                <input type="password" name="password" id="konfirmasiPassword" required class="text-dark-90 py-3 pl-5 pr-12 border-2 border-light-50 rounded-lg w-[500px] sm:w-full mt-4 focus:outline-primary-50">
                <button class="absolute right-5 top-8 btn-eye-close" form="none"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z" fill="#CCC" />
                    </svg></button>
                <button class="absolute right-5 top-8 btn-eye-open" form="none" hidden><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z" fill="#020179" />
                    </svg></button>
            </div>
            <div class="inline-flex items-start mt-8 -ml-3 sm:mx-4">
                <label class="relative flex items-start p-3 rounded-full cursor-pointer" htmlFor="check">
                    <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-primary-50 checked:bg-primary-50 checked:before:bg-primary-50 hover:before:opacity-10" id="check" />
                    <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </label>
                <label class="mt-2 text-light-90 select-none sm:text-sm leading-5" For="check">
                    Saya telah membaca dan menyetujui <a href="" class="text-primary-50 font-medium hover:text-primary-70">persyaratan layanan</a>
                    <br class="lg:block md:block hidden">
                    yang dikeluarkan oleh ProjectHub.
                </label>
            </div>
            <button type="submit" name="submit" class="button-submit text-white bg-primary-50 py-3 w-[500px] sm:w-full mt-12 text-[18px] rounded-lg font-semibold hover:bg-primary-70 transition-all duration-200 ease-linear">
                Daftar
            </button>
            <div class="divider w-[500px] sm:w-full mt-7">Atau</div>
        </form>
        <form action="" class="lg:ml-0 ml-32 sm:mx-6">
            <button type="submit" class="button-submit flex justify-center items-center gap-3 text-white bg-dark-70 py-3 w-[500px] sm:w-full mt-7 mb-16 text-[18px] rounded-lg font-semibold hover:bg-primary-90 transition-all duration-200 ease-linear">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <path d="M27.2569 12.5519H26.25V12.5H15V17.5H22.0644C21.0338 20.4106 18.2644 22.5 15 22.5C10.8581 22.5 7.5 19.1419 7.5 15C7.5 10.8581 10.8581 7.5 15 7.5C16.9119 7.5 18.6513 8.22125 19.9756 9.39937L23.5112 5.86375C21.2787 3.78312 18.2925 2.5 15 2.5C8.09688 2.5 2.5 8.09688 2.5 15C2.5 21.9031 8.09688 27.5 15 27.5C21.9031 27.5 27.5 21.9031 27.5 15C27.5 14.1619 27.4137 13.3438 27.2569 12.5519Z" fill="#FFC107" />
                    <path d="M3.94128 9.18187L8.04816 12.1937C9.15941 9.4425 11.8507 7.5 15 7.5C16.9119 7.5 18.6513 8.22125 19.9757 9.39937L23.5113 5.86375C21.2788 3.78312 18.2925 2.5 15 2.5C10.1988 2.5 6.03503 5.21062 3.94128 9.18187Z" fill="#FF3D00" />
                    <path d="M15 27.5C18.2287 27.5 21.1625 26.2644 23.3806 24.255L19.5118 20.9813C18.2147 21.9677 16.6296 22.5013 15 22.5C11.7487 22.5 8.98808 20.4269 7.94808 17.5338L3.87183 20.6744C5.94058 24.7225 10.1418 27.5 15 27.5Z" fill="#4CAF50" />
                    <path d="M27.2569 12.5519H26.25V12.5H15V17.5H22.0644C21.5714 18.8853 20.6833 20.0957 19.51 20.9819L19.5119 20.9806L23.3806 24.2544C23.1069 24.5031 27.5 21.25 27.5 15C27.5 14.1619 27.4137 13.3438 27.2569 12.5519Z" fill="#1976D2" />
                </svg>Daftar Dengan Google
            </button>
        </form>
    </div>
</div>

@vite(['resources/js/app.js'])
@endsection
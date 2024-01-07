@extends('templates.index_layout')
@section('content')

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchbarElement = document.getElementById('searchbar');

    if (searchbarElement) {
        searchbarElement.classList.add('sm:hidden');
    }
});
</script>

<div id="hover"></div>
<div id="jelajahiOverlay"></div>
<div id="profileOverlay"></div>
<div class="modal-overlay" id="modalOverlay"></div>
<div class="modal-overlay" id="modalOverlay-pesan"></div>

<div class="border-t-2 border-light-30 sm:block hidden"></div>

<main>
    <div class="container mx-auto">
        <div class="lg:mt-52 md:mt-28 mt-5 lg:mx-24 md:mx-12 mx-6">
            <div class="lg:border-2 lg:border-light-50 lg:rounded-3xl lg:px-20">
                <div class="mt-10 sm:mt-0">
                    <h1 class="font-semibold text-[28px] sm:text-2xl text-dark-70">Pengaturan</h1>
                </div>
                <div class="mt-10 sm:mt-8">
                    <form action="">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.75">
                                    <path
                                        d="M18.334 3.6665H3.66732C2.65898 3.6665 1.84315 4.4915 1.84315 5.49984L1.83398 16.4998C1.83398 17.5082 2.65898 18.3332 3.66732 18.3332H18.334C19.3423 18.3332 20.1673 17.5082 20.1673 16.4998V5.49984C20.1673 4.4915 19.3423 3.6665 18.334 3.6665ZM17.9673 7.56234L11.4865 11.614C11.1932 11.7973 10.8082 11.7973 10.5148 11.614L4.03398 7.56234C3.94207 7.51074 3.86158 7.44103 3.79738 7.35742C3.73319 7.27381 3.68662 7.17805 3.66051 7.07593C3.6344 6.9738 3.62928 6.86744 3.64546 6.76329C3.66164 6.65913 3.69879 6.55933 3.75466 6.46995C3.81053 6.38056 3.88395 6.30344 3.97048 6.24325C4.05702 6.18306 4.15487 6.14106 4.25811 6.11978C4.36134 6.0985 4.46783 6.09839 4.57111 6.11946C4.67439 6.14052 4.77233 6.18233 4.85898 6.24234L11.0007 10.0832L17.1423 6.24234C17.229 6.18233 17.3269 6.14052 17.4302 6.11946C17.5335 6.09839 17.64 6.0985 17.7432 6.11978C17.8464 6.14106 17.9443 6.18306 18.0308 6.24325C18.1174 6.30344 18.1908 6.38056 18.2466 6.46995C18.3025 6.55933 18.3397 6.65913 18.3558 6.76329C18.372 6.86744 18.3669 6.9738 18.3408 7.07593C18.3147 7.17805 18.2681 7.27381 18.2039 7.35742C18.1397 7.44103 18.0592 7.51074 17.9673 7.56234Z"
                                        fill="#787878" />
                                </g>
                            </svg>
                            <p class="font-medium text-base sm:text-sm text-dark-10">EMAIL DAN NOTIFIKASI</p>
                        </div>
                        <div class="border-t-2 border-light-30 mt-4"></div>
                        <div class="mt-8 sm:mt-5 flex md:flex-wrap sm:flex-wrap items-center justify-between">
                            <p class="text-base font-medium text-dark-70 sm:text-sm">Email</p>
                            <input type="email" name="" id=""
                                class="py-3 sm:text-sm border-2 border-light-50 w-[833px] md:w-full md:mt-5 sm:mt-3 rounded-lg px-5 font-medium text-base text-dark-70 focus:outline-primary-50">
                        </div>
                        <div class="flex md:flex-wrap sm:flex-wrap md:gap-5 gap-3 mt-10 sm:mt-5 lg:gap-40">
                            <p class="text-base font-medium text-dark-70 sm:text-sm">Terima Notifikasi Email</p>
                            <div>
                                <input type="checkbox"
                                    class="toggle border-[#D9D9D9] bg-[#D9D9D9] checked:border-primary-50 checked:bg-primary-50" />
                                <p class="text-[15px] text-light-70 mt-5 sm:text-xs sm:mt-3">Dengan menyalakan
                                    notifikasi email, anda akan <br class="sm:block hidden">
                                    menerima notifikasi pesan dari pengguna <br class="sm:hidden block"> lain selama<br
                                        class="sm:block hidden">
                                    mengerjakan projek. Anda
                                    juga akan menerima<br class="sm:block hidden"> update rutin dari ProjectHub <br
                                        class="sm:hidden block"> terkait
                                    informasi dan<br class="sm:block hidden"> penawaran
                                    terbaru dari kami</p>
                            </div>
                        </div>
                        <div class="flex justify-end mt-16 sm:mt-8">
                            <button
                                class="w-52 py-3 bg-light-50 text-white text-base sm:w-full font-semibold rounded-lg hover:drop-shadow-md">Simpan
                                Perubahan</button>
                        </div>
                    </form>
                    <form action="" class="mt-12 sm:mt-16">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 16 21"
                                fill="none">
                                <path
                                    d="M7.99935 15.5832C8.48558 15.5832 8.95189 15.39 9.29571 15.0462C9.63953 14.7024 9.83268 14.2361 9.83268 13.7498C9.83268 13.2636 9.63953 12.7973 9.29571 12.4535C8.95189 12.1097 8.48558 11.9165 7.99935 11.9165C7.51312 11.9165 7.0468 12.1097 6.70299 12.4535C6.35917 12.7973 6.16602 13.2636 6.16602 13.7498C6.16602 14.2361 6.35917 14.7024 6.70299 15.0462C7.0468 15.39 7.51312 15.5832 7.99935 15.5832ZM13.4993 7.33317C13.9856 7.33317 14.4519 7.52633 14.7957 7.87014C15.1395 8.21396 15.3327 8.68027 15.3327 9.1665V18.3332C15.3327 18.8194 15.1395 19.2857 14.7957 19.6295C14.4519 19.9734 13.9856 20.1665 13.4993 20.1665H2.49935C2.01312 20.1665 1.5468 19.9734 1.20299 19.6295C0.85917 19.2857 0.666016 18.8194 0.666016 18.3332V9.1665C0.666016 8.68027 0.85917 8.21396 1.20299 7.87014C1.5468 7.52633 2.01312 7.33317 2.49935 7.33317H3.41602V5.49984C3.41602 4.28426 3.8989 3.11847 4.75844 2.25893C5.61798 1.39939 6.78377 0.916504 7.99935 0.916504C8.60124 0.916504 9.19724 1.03506 9.75331 1.26539C10.3094 1.49572 10.8147 1.83333 11.2403 2.25893C11.6659 2.68453 12.0035 3.1898 12.2338 3.74587C12.4641 4.30195 12.5827 4.89795 12.5827 5.49984V7.33317H13.4993ZM7.99935 2.74984C7.27 2.74984 6.57053 3.03957 6.05481 3.55529C5.53908 4.07102 5.24935 4.77049 5.24935 5.49984V7.33317H10.7493V5.49984C10.7493 4.77049 10.4596 4.07102 9.94389 3.55529C9.42817 3.03957 8.72869 2.74984 7.99935 2.74984Z"
                                    fill="#787878" />
                            </svg>
                            <p class="font-medium text-base sm:text-sm text-dark-10 mt-1">UBAH PASSWORD</p>
                        </div>
                        <div class="border-t-2 border-light-30 mt-4"></div>
                        <div class="flex items-center md:flex-wrap sm:flex-wrap justify-between mt-10 sm:mt-5">
                            <p class="text-base font-medium text-dark-70">Password Baru</p>
                            <div class="relative inline-block md:w-full sm:w-full md:mt-5 sm:mt-3">
                                <input type="password" name="password" id="password" required
                                    class="text-dark-90 py-3 px-5 border-2 border-light-50 font-medium text-base rounded-lg lg:w-[838px] w-full focus:outline-primary-50">
                                <button class="absolute right-5 top-4 btn-eye-close" form="none"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <path
                                            d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                                            fill="#CCC" />
                                    </svg></button>
                                <button class="absolute right-5 top-4 btn-eye-open" form="none" hidden><svg
                                        xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <path
                                            d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                                            fill="#020179" />
                                    </svg></button>
                            </div>
                        </div>
                        <div class="flex items-start md:flex-wrap sm:flex-wrap justify-between mt-10 sm:mt-5">
                            <p class="text-base font-medium text-dark-70 mt-3">Konfirmasi Password</p>
                            <div class="md:w-full sm:w-full md:mt-5 sm:mt-3">
                                <div class="relative inline-block md:w-full sm:w-full">
                                    <input type="password" name="password" id="password" required
                                        class="text-dark-90 py-3 px-5 border-2 border-light-50 font-medium text-base rounded-lg lg:w-[837px] w-full focus:outline-primary-50">
                                    <button class="absolute right-5 top-4 btn-eye-close" form="none"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                                                fill="#CCC" />
                                        </svg></button>
                                    <button class="absolute right-5 top-4 btn-eye-open" form="none" hidden><svg
                                            xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22" fill="none">
                                            <path
                                                d="M11 8.25C10.2706 8.25 9.57114 8.53973 9.05542 9.05546C8.53969 9.57118 8.24996 10.2707 8.24996 11C8.24996 11.7293 8.53969 12.4288 9.05542 12.9445C9.57114 13.4603 10.2706 13.75 11 13.75C11.7293 13.75 12.4288 13.4603 12.9445 12.9445C13.4602 12.4288 13.75 11.7293 13.75 11C13.75 10.2707 13.4602 9.57118 12.9445 9.05546C12.4288 8.53973 11.7293 8.25 11 8.25ZM11 15.5833C9.78438 15.5833 8.61859 15.1004 7.75905 14.2409C6.89951 13.3814 6.41663 12.2156 6.41663 11C6.41663 9.78442 6.89951 8.61864 7.75905 7.75909C8.61859 6.89955 9.78438 6.41667 11 6.41667C12.2155 6.41667 13.3813 6.89955 14.2409 7.75909C15.1004 8.61864 15.5833 9.78442 15.5833 11C15.5833 12.2156 15.1004 13.3814 14.2409 14.2409C13.3813 15.1004 12.2155 15.5833 11 15.5833ZM11 4.125C6.41663 4.125 2.50246 6.97583 0.916626 11C2.50246 15.0242 6.41663 17.875 11 17.875C15.5833 17.875 19.4975 15.0242 21.0833 11C19.4975 6.97583 15.5833 4.125 11 4.125Z"
                                                fill="#020179" />
                                        </svg></button>
                                </div>
                                <p class="text-light-70 mt-3 sm:text-xs"><span class="text-[#FF0000]">*</span> Pastikan
                                    bahwa
                                    password baru kamu berbeda dari password sebelumnya</p>
                            </div>
                        </div>
                        <div class="flex justify-end mt-16 sm:mt-8">
                            <button
                                class="w-52 py-3 bg-primary-50 text-white text-base font-semibold sm:w-full rounded-lg hover:drop-shadow-md">Simpan
                                Perubahan</button>
                        </div>
                    </form>
                    <form action="" class="mt-12 sm:mt-16 mb-28">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                fill="none">
                                <g opacity="0.75">
                                    <path
                                        d="M17.4173 3.66667H14.209L13.2923 2.75H8.70898L7.79232 3.66667H4.58398V5.5H17.4173M5.50065 17.4167C5.50065 17.9029 5.69381 18.3692 6.03762 18.713C6.38144 19.0568 6.84775 19.25 7.33398 19.25H14.6673C15.1535 19.25 15.6199 19.0568 15.9637 18.713C16.3075 18.3692 16.5007 17.9029 16.5007 17.4167V6.41667H5.50065V17.4167Z"
                                        fill="#787878" />
                                </g>
                            </svg>
                            <p class="font-medium text-base text-dark-10">HAPUS AKUN</p>
                        </div>
                        <div class="border-t-2 border-light-30 mt-4"></div>
                        <div class="mt-10 sm:mt-5">
                            <p class="font-medium text-base text-dark-70 sm:text-sm">Apa yang akan terjadi jika anda <br
                                    class="sm:block hidden">
                                menghapus
                                akun?</p>
                            <div class="mt-4">
                                <p class="flex items-center sm:items-start sm:text-xs gap-2 text-light-90"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="sm:mt-1" width="7" height="7"
                                        viewBox="0 0 7 7" fill="none">
                                        <circle cx="3.5" cy="3.5" r="3.5" fill="#787878" />
                                    </svg>Akun kamu akan dihapus permanen dan tidak <br class="sm:block hidden"> bisa
                                    dikembalikan</p>
                                <p class="flex items-center sm:items-start sm:text-xs sm:mt-3 gap-2 text-light-90"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="sm:mt-1" width="7" height="7"
                                        viewBox="0 0 7 7" fill="none">
                                        <circle cx="3.5" cy="3.5" r="3.5" fill="#787878" />
                                    </svg>Semua projek yang sedang berjalan akan<br class="sm:block hidden"> otomatis
                                    dihentikan</p>
                                <p class="flex items-center sm:items-start sm:text-xs sm:mt-3 gap-2 text-light-90"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="sm:mt-1" width="7" height="7"
                                        viewBox="0 0 7 7" fill="none">
                                        <circle cx="3.5" cy="3.5" r="3.5" fill="#787878" />
                                    </svg>Profil kamu tidak akan tersedia lagi di ProjectHub</p>
                            </div>
                        </div>
                        <div class="mt-14 sm:mt-7 flex md:flex-wrap sm:flex-wrap items-center justify-between">
                            <p class="text-base font-medium text-dark-70">Alasan Saya Menghapus Akun Adalah</p>
                            <select name="Alasan" id=""
                                class="border-2 sm:mt-3 font-medium text-base sm:text-sm md:mt-5 text-light-90 border-light-50 py-[14px] rounded-lg lg:w-[730px] w-full px-5">
                                <option form="none">Pilih Alasan</option>
                                <option value="dog">Cape</option>
                                <option value="cat">Hehe</option>
                                <option value="hamster">Hamster</option>
                                <option value="parrot">Parrot</option>
                            </select>
                        </div>
                        <div class="flex justify-end mt-16 sm:mt-8">
                            <button
                                class="w-52 py-3 bg-light-50 text-white text-base sm:w-full font-semibold rounded-lg hover:drop-shadow-md">Hapus
                                Akun</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
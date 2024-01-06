@extends('templates.index_layout')
@section('content')

<div id="hover"></div>
<div id="jelajahiOverlay"></div>
<div id="profileOverlay"></div>
<div class="modal-overlay" id="modalOverlay"></div>

<div id="modalProfile" hidden>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>
        <div class="relative z-10 w-screen max-w-md mx-auto overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center">
                <div class="relative transform overflow-hidden rounded-3xl bg-white drop-shadow-xl transition-all text-center w-[480px]">
                    <h1 class="font-semibold text-4xl text-dark-70 mt-16 sm:text-3xl">Lengkapi Profilmu</h1>
                    <img src="{{asset('assets/img_index/asset/landingPage/modalLengkapiProfil.png')}}" alt="Modal" class="mx-auto mt-9">
                    <p class="text-base text-light-90 mt-7">Sebelum bisa mendaftar atau membuat <br> projek, kamu harus
                        terlebih dahulu <br> melengkapi profile kamu</p>
                    <form action="/profile" class="mx-10">
                        <button class="text-white text-base font-semibold bg-primary-50 rounded-md py-3 mt-10 w-full hover:bg-primary-70 transition-all duration-200 ease-in-out">Lengkapi
                            Sekarang</button>
                    </form>
                    <button class="text-primary-50 my-5 font-semibold hover:underline transition-all duration-200 ease-in-out" id="close">Lakukan Nanti</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-report hidden">
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>
        <div class="relative z-10 w-screen max-w-md mx-auto overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4">
                <div class="relative transform overflow-hidden rounded-3xl bg-white drop-shadow-xl transition-all w-[480px]">
                    <div class="flex justify-center mt-9">
                        <div class="bg-primary-50 bg-opacity-10 py-6 px-8 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="54" viewBox="0 0 45 54" fill="none">
                                <path d="M0.833496 7.54169C0.833548 7.18154 0.905432 6.82501 1.04494 6.49297C1.18446 6.16093 1.38879 5.86005 1.646 5.60794C4.59766 2.71446 8.541 1.05451 12.6734 0.965953C16.8058 0.877398 20.8166 2.3669 23.8895 5.13128L24.8402 6.01961C26.8157 7.7505 29.3528 8.70473 31.9793 8.70473C34.6059 8.70473 37.143 7.7505 39.1185 6.01961L39.7929 5.40482C41.445 4.09669 43.9285 5.14211 44.1533 7.23565L44.1668 7.54169V31.9167C44.1668 32.2769 44.0949 32.6334 43.9554 32.9654C43.8159 33.2975 43.6115 33.5983 43.3543 33.8504C40.4027 36.7439 36.4593 38.4039 32.3269 38.4924C28.1945 38.581 24.1837 37.0915 21.1108 34.3271L20.1602 33.4388C18.2468 31.7623 15.8045 30.8127 13.2613 30.7562C10.718 30.6998 8.23601 31.5401 6.25016 33.13V50.875C6.2494 51.5653 5.98507 52.2293 5.5112 52.7312C5.03732 53.2332 4.38966 53.5352 3.70055 53.5757C3.01144 53.6162 2.33289 53.392 1.80353 52.9489C1.27418 52.5058 0.933985 51.8774 0.852454 51.1919L0.833496 50.875V7.54169Z" fill="#020179" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-center font-semibold text-2xl text-dark-70 mt-4">Laporkan Projek Ini</p>
                    <p class="text-center text-light-70 text-base mt-3">Apa yang membuat kamu ingin melaporkan projek
                        <br class="sm:hidden"> ini pada kami?
                    </p>
                    <form action="" class="mx-5 mt-4">
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-2 rounded-full cursor-pointer" htmlFor="html">
                                <input name="type" type="radio" required class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-light-90 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-primary-50 checked:before:bg-primary-50 hover:before:opacity-10" id="melanggar" />
                                <span class="absolute transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="#020179">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px text-dark-70 cursor-pointer select-none font-semibold" for="melanggar">
                                Melanggar kebijakan
                                ProjectHub
                            </label>
                        </div>
                        <br>
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-2 rounded-full cursor-pointer" htmlFor="html">
                                <input name="type" type="radio" required class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-light-90 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-primary-50 checked:before:bg-primary-50 hover:before:opacity-10" id="penipuan" />
                                <span class="absolute transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="#020179">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px text-dark-70 cursor-pointer select-none font-semibold" for="penipuan">
                                Penipuan atau pemalsuan
                            </label>
                        </div>
                        <br>
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-2 rounded-full cursor-pointer" htmlFor="html">
                                <input name="type" type="radio" required class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-light-90 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-primary-50 checked:before:bg-primary-50 hover:before:opacity-10" id="sara" />
                                <span class="absolute transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="#020179">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px text-dark-70 cursor-pointer select-none font-semibold" for="sara">
                                Melanggar SARA
                            </label>
                        </div>
                        <br>
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-2 rounded-full cursor-pointer" htmlFor="html">
                                <input name="type" type="radio" required class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-light-90 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-primary-50 checked:before:bg-primary-50 hover:before:opacity-10" id="lainnya" />
                                <span class="absolute transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="#020179">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px text-dark-70 cursor-pointer select-none font-semibold" for="lainnya">
                                Lainnya
                            </label>
                        </div>
                        <div class="flex items-center justify-around mt-5 mb-8">
                            <button form="none" class="font-semibold text-light-70 border-2 border-light-70 py-3 rounded-lg lg:w-44 w-36 hover:text-primary-50 hover:border-primary-50 transition-all duration-200 ease-linear">Batal</button>
                            <button class="font-semibold text-white border-2 border-primary-50 bg-primary-50 py-3 rounded-lg lg:w-44 w-36 hover:bg-primary-70 transition-all duration-200 ease-linear">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="lg:mt-44 md:mt-28 mt-5 lg:px-24 md:px-12 px-6 container mx-auto">
    <nav aria-label="breadcrumb" class="w-max">
        <ol class="flex flex-wrap items-center w-full">
            <li class="flex items-center text-primary-50 sm:text-xs font-medium leading-normal transition-colors duration-300 cursor-pointer">
                <a href="/index" class="opacity-50 hover:opacity-100">Beranda</a><span class="mx-2 antialiased font-semibold leading-normal pointer-events-none select-none">/</span>
            </li>
            <li class="flex items-center text-primary-50 sm:text-xs font-medium antialiased leading-normal transition-colors duration-300 cursor-pointer">
                <a href="" class="opacity-50 hover:opacity-100">Search</a><span class="mx-2 antialiased font-semibold leading-normal pointer-events-none select-none">/</span>
            </li>
        </ol>
    </nav>
    <div class="lg:mt-5 mt-4">
        <h1 class="lg:text-[32px] md:text-2xl text-xl text-dark-70">Hasil Untuk <span class="font-semibold">Desain
                UI/UX</span></h1>
        <p class="text-light-70 lg:text-base md:text-[14px] text-xs mt-2">Berikut merupakan <span class="font-semibold">171
                project</span> terkait
            yang tersedia</p>
        <h1 class="lg:text-[32px] md:text-2xl text-xl text-dark-70 hidden">Temukan Projek Terbaik Untuk Kamu</h1>
        <p class="text-light-70 lg:text-base md:text-[14px] text-xs mt-2 hidden">Cari projek yang tersedia untuk kamu
        </p>
    </div>
</main>

<section>
    <div class="container mx-auto mt-12 lg:px-24 md:px-12 px-6">
        <div>
            <div class="flex sm:flex-col sm:gap-3 items-center justify-between lg:mt-12 mt-8">
                <a href="" class="sm:w-full hover:shadow-xl transition-all duration-200 ease-in-out">
                    <div class="flex items-center lg:gap-3 md:gap-2 gap-6 border-2 rounded-lg sm:rounded-2xl bg-white border-light-90 lg:px-9 md:px-3 px-5 sm:w-full py-4">
                        <div>
                            <img src="{{asset('assets/img_index/asset/index/panduan.svg')}}" alt="" class="md:w-10">
                        </div>
                        <div>
                            <h2 class="font-semibold lg:text-lg text-[14px] text-dark-70">Panduan Pengunaan</h2>
                            <p class="text-light-90 lg:text-[14px] md:text-[11px] text-xs">Pelajarin cara pakai <br class="md:block hidden">
                                ProjectHub disini</p>
                        </div>
                    </div>
                </a>
                <a href="" class="sm:w-full hover:shadow-xl transition-all duration-200 ease-in-out">
                    <div class="flex items-center gap-3 md:gap-2 border-2 rounded-lg sm:rounded-2xl bg-white border-light-90 lg:pl-8 md:px-3 pl-5 lg:pr-14 sm:w-full py-4">
                        <div>
                            <img src="{{asset('assets/img_index/asset/index/kebijakan.svg')}}" alt="" class="md:w-12">
                        </div>
                        <div>
                            <h2 class="font-semibold lg:text-lg text-[14px] text-dark-70">Kebijakan ProjectHub</h2>
                            <p class="text-light-90 lg:text-[14px] md:text-[11px] text-xs">Cari tau aturan pakai <br class="md:block hidden">
                                ProjectHub</p>
                        </div>
                    </div>
                </a>
                <a href="" class="sm:w-full hover:shadow-xl transition-all duration-200 ease-in-out">
                    <div class="flex items-center lg:gap-3 md:gap-2 gap-4 border-2 rounded-lg sm:rounded-2xl bg-white border-light-90 lg:pr-24 lg:pl-8 md:px-4 md:pr-6 px-5 sm:w-full md:py-6 py-4">
                        <div>
                            <img src="{{asset('assets/img_index/asset/index/bantuan.svg')}}" alt="" class="md:w-10">
                        </div>
                        <div>
                            <h2 class="font-semibold lg:text-lg text-[14px] text-dark-70">Pusat Bantuan</h2>
                            <p class="text-light-90 lg:text-[14px] md:text-[11px] text-xs">Tempat kamu mengadu</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="border-t-2 border-light-30 mt-16"></div>
    </div>
</section>

<section>
    <div class="container mx-auto lg:px-24 md:px-12 px-6 lg:mt-14 mt-10">
        <div class="grid grid-cols-12">
            <div class="col-span-6 sm:col-span-12 lg:mt-14">
                <h1 class="lg:text-[28px] md:text-2xl text-xl text-primary-50">Butuh Jasa UI/UX Desainer Untuk Website
                    Sekolah</h1>
                <h2 class="lg:text-base md:text-[15px] text-[14px] text-dark-70 mt-7">Saya memililki sebuah website jual
                    beli pulsa, dan saya ingin
                    membuat
                    versi aplikasi supaya bisa lebih mudah di pahami user saya, untuk designnya sudah ada. saya memiliki
                    design UI/UX dari aplikasi yang ingin saya buat dengan bahasa dart saya memnyimpanya di FIGMA, saya
                    ingin mencari jasa yang dapat mengimplementasikan aplikasi saya serta menghubungkan dengan API web
                    saya, dengan design yang sudah saya sediakan.</h2>
                <a href="/profiles">
                    <div class="flex items-center gap-3 lg:mt-12 mt-8">
                        <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt="profile" class="border-2 border-primary-50 rounded-full">
                        <div>
                            <p class="font-semibold text-lg text-dark-70">Pororo</p>
                            <p class="text-light-90">Bogor, Jawa Barat</p>
                        </div>
                    </div>
                </a>
                <div class="flex items-center gap-6 lg:mt-14 mt-7">
                    <button class="openModalBtn flex items-center gap-2 text-[#FF0000] text-base font-medium"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99984 18.2442C5.39734 18.2442 1.6665 14.5133 1.6665 9.91085C1.6665 5.30918 5.39734 1.57751 9.99984 1.57751C14.6023 1.57751 18.3332 5.30918 18.3332 9.91085C18.3332 14.5133 14.6023 18.2442 9.99984 18.2442ZM9.99984 5.74418C9.77882 5.74418 9.56686 5.83198 9.41058 5.98826C9.2543 6.14454 9.1665 6.3565 9.1665 6.57751V10.7442C9.1665 10.9652 9.2543 11.1772 9.41058 11.3334C9.56686 11.4897 9.77882 11.5775 9.99984 11.5775C10.2209 11.5775 10.4328 11.4897 10.5891 11.3334C10.7454 11.1772 10.8332 10.9652 10.8332 10.7442V6.57751C10.8332 6.3565 10.7454 6.14454 10.5891 5.98826C10.4328 5.83198 10.2209 5.74418 9.99984 5.74418ZM9.99984 14.0775C10.2209 14.0775 10.4328 13.9897 10.5891 13.8334C10.7454 13.6772 10.8332 13.4652 10.8332 13.2442C10.8332 13.0232 10.7454 12.8112 10.5891 12.6549C10.4328 12.4986 10.2209 12.4108 9.99984 12.4108C9.77882 12.4108 9.56686 12.4986 9.41058 12.6549C9.2543 12.8112 9.1665 13.0232 9.1665 13.2442C9.1665 13.4652 9.2543 13.6772 9.41058 13.8334C9.56686 13.9897 9.77882 14.0775 9.99984 14.0775Z" fill="#FF0000" />
                        </svg>Laporkan Projek</button>
                    <button class="flex items-center gap-2 text-light-90"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 18.3333C14.3056 18.3333 13.7153 18.0902 13.2292 17.6041C12.7431 17.118 12.5 16.5277 12.5 15.8333C12.5 15.7361 12.5069 15.6352 12.5208 15.5308C12.5347 15.4263 12.5556 15.3327 12.5833 15.25L6.70833 11.8333C6.47222 12.0416 6.20833 12.205 5.91667 12.3233C5.625 12.4416 5.31944 12.5005 5 12.5C4.30556 12.5 3.71528 12.2569 3.22917 11.7708C2.74306 11.2847 2.5 10.6944 2.5 9.99996C2.5 9.30551 2.74306 8.71524 3.22917 8.22913C3.71528 7.74301 4.30556 7.49996 5 7.49996C5.31944 7.49996 5.625 7.55913 5.91667 7.67746C6.20833 7.79579 6.47222 7.95885 6.70833 8.16663L12.5833 4.74996C12.5556 4.66663 12.5347 4.57301 12.5208 4.46913C12.5069 4.36524 12.5 4.2644 12.5 4.16663C12.5 3.47218 12.7431 2.8819 13.2292 2.39579C13.7153 1.90968 14.3056 1.66663 15 1.66663C15.6944 1.66663 16.2847 1.90968 16.7708 2.39579C17.2569 2.8819 17.5 3.47218 17.5 4.16663C17.5 4.86107 17.2569 5.45135 16.7708 5.93746C16.2847 6.42357 15.6944 6.66663 15 6.66663C14.6806 6.66663 14.375 6.60774 14.0833 6.48996C13.7917 6.37218 13.5278 6.20885 13.2917 5.99996L7.41667 9.41663C7.44444 9.49996 7.46528 9.59385 7.47917 9.69829C7.49306 9.80274 7.5 9.90329 7.5 9.99996C7.5 10.0972 7.49306 10.198 7.47917 10.3025C7.46528 10.4069 7.44444 10.5005 7.41667 10.5833L13.2917 14C13.5278 13.7916 13.7917 13.6286 14.0833 13.5108C14.375 13.393 14.6806 13.3338 15 13.3333C15.6944 13.3333 16.2847 13.5763 16.7708 14.0625C17.2569 14.5486 17.5 15.1388 17.5 15.8333C17.5 16.5277 17.2569 17.118 16.7708 17.6041C16.2847 18.0902 15.6944 18.3333 15 18.3333Z" fill="#999999" />
                        </svg>Bagikan</button>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-12 flex justify-end sm:mt-8">
                <div class="bg-[#f3f3f3] bg-opacity-70 rounded-3xl lg:w-[550px] md:w-80 w-full lg:px-11 px-5">
                    <div class="flex items-center justify-between mt-9">
                        <div>
                            <p class="font-medium text-base md:text-[14px] text-dark-50">Kategori :</p>
                            <div class="bg-primary-50 bg-opacity-10 lg:rounded-xl rounded-md py-3 pl-3 lg:w-56 w-36 mt-5">
                                <p class="flex items-center font-semibold gap-2 text-primary-50 lg:text-[14px] text-xs">
                                    <svg class="sm:hidden md:hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g opacity="0.7">
                                            <path d="M7.33317 9.12502L9.12484 7.31252L7.95817 6.12502L7.0415 7.04169L5.87484 5.87502L6.77067 4.95835L5.83317 4.02085L4.02067 5.83335L7.33317 9.12502ZM14.1665 15.9792L15.979 14.1667L15.0415 13.2292L14.1248 14.125L12.9582 12.9584L13.854 12.0417L12.6665 10.875L10.8748 12.6667L14.1665 15.9792ZM13.5207 5.35419L14.6873 6.52085L15.854 5.35419L14.6665 4.16669L13.5207 5.35419ZM6.0415 17.5H2.49984V13.9584L6.14567 10.3125L1.6665 5.83335L5.83317 1.66669L10.3332 6.16669L13.479 3.00002C13.6457 2.83335 13.8332 2.70835 14.0415 2.62502C14.2498 2.54169 14.4651 2.50002 14.6873 2.50002C14.9096 2.50002 15.1248 2.54169 15.3332 2.62502C15.5415 2.70835 15.729 2.83335 15.8957 3.00002L16.9998 4.12502C17.1665 4.29169 17.2915 4.47919 17.3748 4.68752C17.4582 4.89585 17.4998 5.11113 17.4998 5.33335C17.4998 5.55558 17.4582 5.76752 17.3748 5.96919C17.2915 6.17085 17.1665 6.35474 16.9998 6.52085L13.854 9.68752L18.3332 14.1667L14.1665 18.3334L9.68734 13.8542L6.0415 17.5Z" fill="#020179" />
                                        </g>
                                    </svg>Grafis dan Desain
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="font-medium text-base md:text-[14px] text-dark-50">Status Projek :</p>
                            <div class="bg-[#00A410] bg-opacity-10 lg:rounded-xl rounded-md py-3 lg:pl-7 md:pl-2 pl-4 md:w-32 sm:w-36 lg:pr-[100px] mt-5">
                                <p class="flex items-center font-semibold gap-2 md:gap-1 text-[#004A03] lg:text-[14px] text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#427B45" />
                                    </svg>Tersedia
                                </p>
                            </div>
                            <div class="bg-[#FFC807] bg-opacity-10 lg:rounded-xl rounded-md py-3 lg:px-7 md:pl-2 pl-4 md:w-32 sm:w-36 mt-5 hidden">
                                <p class="flex items-center font-semibold gap-2 md:gap-1 text-[#CD9A00] lg:text-[14px] text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#DBB544" />
                                    </svg>Dalam Pengerjaan
                                </p>
                            </div>
                            <div class="bg-[#454545] bg-opacity-10 lg:rounded-xl rounded-md py-3 lg:pl-7 md:pl-2 pl-4 md:w-32 sm:w-36 lg:pr-[100px] mt-5 hidden">
                                <p class="flex items-center font-semibold gap-2 md:gap-1 text-dark-30 lg:text-[14px] text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#878787" />
                                    </svg>Selesai
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border-t-2 border-light-30 mt-10"></div>
                    <div class="flex items-center justify-between mt-5">
                        <div>
                            <p class="flex items-center gap-1 text-primary-50 lg:text-base md:text-xs text-[13px] font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M9.83327 9.08333C7.9416 8.59167 7.33327 8.08333 7.33327 7.29167C7.33327 6.38333 8.17493 5.75 9.58327 5.75C11.0666 5.75 11.6166 6.45833 11.6666 7.5H13.5083C13.4499 6.06667 12.5749 4.75 10.8333 4.325V2.5H8.33327V4.3C6.7166 4.65 5.4166 5.7 5.4166 7.30833C5.4166 9.23333 7.00827 10.1917 9.33327 10.75C11.4166 11.25 11.8333 11.9833 11.8333 12.7583C11.8333 13.3333 11.4249 14.25 9.58327 14.25C7.8666 14.25 7.1916 13.4833 7.09994 12.5H5.2666C5.3666 14.325 6.73327 15.35 8.33327 15.6917V17.5H10.8333V15.7083C12.4583 15.4 13.7499 14.4583 13.7499 12.75C13.7499 10.3833 11.7249 9.575 9.83327 9.08333Z" fill="#020179" />
                                </svg>Bayaran
                            </p>
                            <p class="text-dark-50 lg:text-xl text-base font-semibold mt-3">Rp<span>350.000</span></p>
                        </div>
                        <div>
                            <p class="flex items-center gap-1 text-primary-50 lg:text-base md:text-xs text-[13px] font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <g clip-path="url(#clip0_1088_1107)">
                                        <path d="M14.1694 7.56201C14.6011 7.76676 14.9912 8.02409 15.3398 8.33398C15.6885 8.64388 15.9873 8.99528 16.2363 9.38818C16.4854 9.78109 16.6735 10.2017 16.8008 10.6499C16.9281 11.0981 16.9945 11.563 17 12.0444C17 12.7251 16.87 13.367 16.6099 13.9702C16.3498 14.5734 15.9956 15.0991 15.5474 15.5474C15.0991 15.9956 14.5734 16.3498 13.9702 16.6099C13.367 16.87 12.7251 17 12.0444 17C11.563 17 11.0981 16.9336 10.6499 16.8008C10.2017 16.668 9.78385 16.4798 9.39648 16.2363C9.00911 15.9928 8.65771 15.6968 8.34229 15.3481C8.02686 14.9995 7.76676 14.6066 7.56201 14.1694H0V1.41943H2.83057V0H4.25V1.41943H9.91943V0H11.3306V1.41943H14.1694V7.56201ZM1.41943 4.25H12.75V2.83057H1.41943V4.25ZM7.13037 12.75C7.09717 12.5176 7.08057 12.2824 7.08057 12.0444C7.08057 11.3582 7.21061 10.7135 7.4707 10.1104C7.73079 9.50716 8.08496 8.98145 8.5332 8.5332C8.98145 8.08496 9.50716 7.73079 10.1104 7.4707C10.7135 7.21061 11.3582 7.08057 12.0444 7.08057C12.2824 7.08057 12.5176 7.09717 12.75 7.13037V5.66943H1.41943V12.75H7.13037ZM12.0444 15.5806C12.5314 15.5806 12.988 15.4893 13.4141 15.3066C13.8402 15.124 14.2165 14.8695 14.543 14.543C14.8695 14.2165 15.1213 13.8429 15.2983 13.4224C15.4754 13.0018 15.5695 12.5425 15.5806 12.0444C15.5806 11.5575 15.4893 11.0981 15.3066 10.6665C15.124 10.2349 14.8722 9.85856 14.5513 9.5376C14.2303 9.21663 13.854 8.96484 13.4224 8.78223C12.9907 8.59961 12.5314 8.50553 12.0444 8.5C11.5519 8.5 11.0926 8.59131 10.6665 8.77393C10.2404 8.95654 9.8641 9.2111 9.5376 9.5376C9.2111 9.8641 8.95931 10.2404 8.78223 10.6665C8.60514 11.0926 8.51107 11.5519 8.5 12.0444C8.5 12.5369 8.59131 12.9963 8.77393 13.4224C8.95654 13.8485 9.2111 14.222 9.5376 14.543C9.8641 14.8639 10.2404 15.1157 10.6665 15.2983C11.0926 15.481 11.5519 15.575 12.0444 15.5806ZM12.75 11.3306H14.1694V12.75H11.3306V9.91943H12.75V11.3306Z" fill="#020179" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1088_1107">
                                            <rect width="17" height="17" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>Deadline <span class="lg:block hidden">Project</span>
                            </p>
                            <p class="text-dark-50 lg:text-xl text-base font-semibold mt-3">15-20 <span>Hari</span></p>
                        </div>
                        <div>
                            <p class="flex items-center gap-1 text-primary-50 lg:text-base md:text-xs text-[13px] font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M6.33301 14.25L9.49967 11.8354L12.6663 14.25L11.4788 10.3312L14.6455 8.07498H10.7663L9.49967 3.95831L8.23301 8.07498H4.35384L7.52051 10.3312L6.33301 14.25ZM9.49967 17.4166C8.40454 17.4166 7.37537 17.2087 6.41217 16.7928C5.44898 16.3769 4.61113 15.813 3.89863 15.101C3.18613 14.3885 2.6222 13.5507 2.20684 12.5875C1.79148 11.6243 1.58354 10.5951 1.58301 9.49998C1.58301 8.40484 1.79095 7.37567 2.20684 6.41248C2.62273 5.44929 3.18666 4.61144 3.89863 3.89894C4.61113 3.18644 5.44898 2.62251 6.41217 2.20715C7.37537 1.79179 8.40454 1.58384 9.49967 1.58331C10.5948 1.58331 11.624 1.79126 12.5872 2.20715C13.5504 2.62304 14.3882 3.18697 15.1007 3.89894C15.8132 4.61144 16.3774 5.44929 16.7933 6.41248C17.2092 7.37567 17.4169 8.40484 17.4163 9.49998C17.4163 10.5951 17.2084 11.6243 16.7925 12.5875C16.3766 13.5507 15.8127 14.3885 15.1007 15.101C14.3882 15.8135 13.5504 16.3777 12.5872 16.7936C11.624 17.2095 10.5948 17.4172 9.49967 17.4166Z" fill="#020179" />
                                </svg>Kesulitan
                            </p>
                            <p class="text-dark-50 lg:text-xl text-base font-semibold mt-3">Mudah</p>
                        </div>
                    </div>
                    <div class="border-t-2 border-light-30 mt-5"></div>
                    <div class="mt-6">
                        <div class="flex items-center lg:gap-3">
                            <p class="flex items-center gap-2 md:gap-1 text-light-90 font-medium lg:text-[14px] md:text-[10px] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M6.66667 11.6667C6.43056 11.6667 6.23278 11.5867 6.07333 11.4267C5.91389 11.2667 5.83389 11.0689 5.83333 10.8334C5.83333 10.5972 5.91333 10.3995 6.07333 10.24C6.23333 10.0806 6.43111 10.0006 6.66667 10C6.90278 10 7.10083 10.08 7.26083 10.24C7.42083 10.4 7.50056 10.5978 7.5 10.8334C7.5 11.0695 7.42 11.2675 7.26 11.4275C7.1 11.5875 6.90222 11.6672 6.66667 11.6667ZM10 11.6667C9.76389 11.6667 9.56611 11.5867 9.40667 11.4267C9.24722 11.2667 9.16722 11.0689 9.16667 10.8334C9.16667 10.5972 9.24667 10.3995 9.40667 10.24C9.56667 10.0806 9.76444 10.0006 10 10C10.2361 10 10.4342 10.08 10.5942 10.24C10.7542 10.4 10.8339 10.5978 10.8333 10.8334C10.8333 11.0695 10.7533 11.2675 10.5933 11.4275C10.4333 11.5875 10.2356 11.6672 10 11.6667ZM13.3333 11.6667C13.0972 11.6667 12.8994 11.5867 12.74 11.4267C12.5806 11.2667 12.5006 11.0689 12.5 10.8334C12.5 10.5972 12.58 10.3995 12.74 10.24C12.9 10.0806 13.0978 10.0006 13.3333 10C13.5694 10 13.7675 10.08 13.9275 10.24C14.0875 10.4 14.1672 10.5978 14.1667 10.8334C14.1667 11.0695 14.0867 11.2675 13.9267 11.4275C13.7667 11.5875 13.5689 11.6672 13.3333 11.6667ZM4.16667 18.3334C3.70833 18.3334 3.31611 18.1703 2.99 17.8442C2.66389 17.5181 2.50056 17.1256 2.5 16.6667V5.00002C2.5 4.54169 2.66333 4.14946 2.99 3.82335C3.31667 3.49724 3.70889 3.33391 4.16667 3.33335H5V1.66669H6.66667V3.33335H13.3333V1.66669H15V3.33335H15.8333C16.2917 3.33335 16.6842 3.49669 17.0108 3.82335C17.3375 4.15002 17.5006 4.54224 17.5 5.00002V16.6667C17.5 17.125 17.3369 17.5175 17.0108 17.8442C16.6847 18.1709 16.2922 18.3339 15.8333 18.3334H4.16667ZM4.16667 16.6667H15.8333V8.33335H4.16667V16.6667Z" fill="#999999" />
                                </svg>Tanggal Diunggah
                            </p>
                            <p class="text-light-90 lg:text-[14px] md:text-[10px] text-[11px] md:ml-3 sm:ml-2">:</p>
                            <div class="flex items-center text-light-90 font-semibold lg:gap-2 lg:text-[14px] md:text-[10px] text-[11px] lg:ml-0 ml-2">
                                <p>19 Desember 2023</p> |
                                <p>20.36 WIB</p>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <p class="flex items-center gap-3 md:gap-2 text-light-90 font-medium ml-[2px] lg:text-[14px] md:text-[10px] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                    <path d="M7.00016 11.5C3.31683 11.5 0.333496 12.9917 0.333496 14.8334V16.5H13.6668V14.8334C13.6668 12.9917 10.6835 11.5 7.00016 11.5ZM3.66683 6.50002C3.66683 7.38408 4.01802 8.23192 4.64314 8.85704C5.26826 9.48216 6.11611 9.83335 7.00016 9.83335C7.88422 9.83335 8.73206 9.48216 9.35719 8.85704C9.98231 8.23192 10.3335 7.38408 10.3335 6.50002M6.5835 0.666687C6.3335 0.666687 6.16683 0.841687 6.16683 1.08335V3.58335H5.3335V1.50002C5.3335 1.50002 3.4585 2.21669 3.4585 4.62502C3.4585 4.62502 2.8335 4.74169 2.8335 5.66669H11.1668C11.1252 4.74169 10.5418 4.62502 10.5418 4.62502C10.5418 2.21669 8.66683 1.50002 8.66683 1.50002V3.58335H7.8335V1.08335C7.8335 0.841687 7.67516 0.666687 7.41683 0.666687H6.5835Z" fill="#999999" />
                                </svg>Jumlah Pelamar
                            </p>
                            <p class="text-light-90 lg:ml-[27px] md:ml-[22px] ml-5 lg:text-[14px] md:text-[10px] text-[11px]">
                                :</p>
                            <p class="text-light-90 font-semibold lg:ml-3 ml-2 lg:text-[14px] md:text-[10px] text-[11px]">
                                <span>215</span> Orang
                            </p>
                        </div>
                        <div class="flex items-center mt-1">
                            <p class="flex items-center gap-3 md:gap-2 text-light-90 font-medium lg:text-[14px] md:text-[10px] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 16.5C13.1422 16.5 16.5 13.1422 16.5 9C16.5 4.85775 13.1422 1.5 9 1.5C4.85775 1.5 1.5 4.85775 1.5 9C1.5 13.1422 4.85775 16.5 9 16.5ZM11.9512 4.194C12.0547 4.23616 12.1433 4.30818 12.2057 4.40088C12.2681 4.49359 12.3014 4.60276 12.3015 4.7145V6.75075C12.3015 6.89993 12.2422 7.04301 12.1367 7.1485C12.0313 7.25399 11.8882 7.31325 11.739 7.31325H9.75C9.63929 7.31331 9.53102 7.2807 9.43876 7.21951C9.3465 7.15831 9.27435 7.07125 9.23135 6.96923C9.18835 6.86721 9.17641 6.75477 9.19703 6.646C9.21764 6.53723 9.2699 6.43696 9.34725 6.35775L9.91875 5.77275C9.36677 5.60315 8.7786 5.58969 8.21944 5.73385C7.66027 5.87801 7.15193 6.17417 6.75075 6.5895C5.49975 7.86975 5.49975 9.95175 6.75075 11.232C7.04237 11.534 7.39181 11.7742 7.77824 11.9382C8.16468 12.1022 8.58019 12.1868 9 12.1868C9.41981 12.1868 9.83532 12.1022 10.2218 11.9382C10.6082 11.7742 10.9576 11.534 11.2492 11.232C11.7419 10.7269 12.0595 10.0771 12.1552 9.378C12.1987 9.0645 12.4477 8.8005 12.7642 8.8005C13.0687 8.8005 13.3207 9.04425 13.2915 9.34725C13.1962 10.3529 12.7595 11.2957 12.054 12.0187C11.6576 12.428 11.183 12.7534 10.6583 12.9756C10.1337 13.1979 9.56976 13.3124 9 13.3124C8.43024 13.3124 7.86629 13.1979 7.34166 12.9756C6.81702 12.7534 6.34241 12.428 5.946 12.0187C4.26825 10.3012 4.26825 7.521 5.946 5.8035C6.5579 5.17128 7.35096 4.74458 8.21571 4.5823C9.08046 4.42001 9.97426 4.53015 10.7737 4.8975L11.3362 4.3215C11.4145 4.2415 11.5147 4.18663 11.6243 4.16392C11.7338 4.14121 11.8477 4.15168 11.9512 4.194Z" fill="#999999" />
                                </svg>Opsi Meeting
                            </p>
                            <p class="text-light-90 lg:ml-[43px] ml-8 lg:text-[14px] md:text-[10px] text-[11px]">:</p>
                            <p class="text-light-90 font-semibold lg:ml-3 ml-2 lg:text-[14px] md:text-[10px] text-[11px]">
                                Iya</p>
                        </div>
                    </div>
                    <form action="/detail_project">
                        <button class="bg-primary-50 text-white py-3 rounded-lg w-full font-semibold lg:my-12 my-6 hover:bg-primary-30 hover:shadow-xl transition-all duration-200 ease-in-out">Daftar
                            Project</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-light-30 lg:mt-14 mt-10"></div>
    </div>
</section>

<section>
    <div class="container mx-auto lg:px-24 md:px-12 px-6 lg:mt-14 mt-10">
        <div class="grid grid-cols-12">
            <div class="col-span-6 sm:col-span-12 lg:mt-14">
                <h1 class="lg:text-[28px] md:text-2xl text-xl text-primary-50">Butuh Jasa UI/UX Desainer Untuk Website
                    Sekolah</h1>
                <h2 class="lg:text-base md:text-[15px] text-[14px] text-dark-70 mt-7">Saya memililki sebuah website jual
                    beli pulsa, dan saya ingin
                    membuat
                    versi aplikasi supaya bisa lebih mudah di pahami user saya, untuk designnya sudah ada. saya memiliki
                    design UI/UX dari aplikasi yang ingin saya buat dengan bahasa dart saya memnyimpanya di FIGMA, saya
                    ingin mencari jasa yang dapat mengimplementasikan aplikasi saya serta menghubungkan dengan API web
                    saya, dengan design yang sudah saya sediakan.</h2>
                <a href="/profiles">
                    <div class="flex items-center gap-3 lg:mt-12 mt-8">
                        <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt="profile" class="border-2 border-primary-50 rounded-full">
                        <div>
                            <p class="font-semibold text-lg text-dark-70">Pororo</p>
                            <p class="text-light-90">Bogor, Jawa Barat</p>
                        </div>
                    </div>
                </a>
                <div class="flex items-center gap-6 lg:mt-14 mt-7">
                    <button class="openModalBtn flex items-center gap-2 text-[#FF0000] text-base font-medium"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M9.99984 18.2442C5.39734 18.2442 1.6665 14.5133 1.6665 9.91085C1.6665 5.30918 5.39734 1.57751 9.99984 1.57751C14.6023 1.57751 18.3332 5.30918 18.3332 9.91085C18.3332 14.5133 14.6023 18.2442 9.99984 18.2442ZM9.99984 5.74418C9.77882 5.74418 9.56686 5.83198 9.41058 5.98826C9.2543 6.14454 9.1665 6.3565 9.1665 6.57751V10.7442C9.1665 10.9652 9.2543 11.1772 9.41058 11.3334C9.56686 11.4897 9.77882 11.5775 9.99984 11.5775C10.2209 11.5775 10.4328 11.4897 10.5891 11.3334C10.7454 11.1772 10.8332 10.9652 10.8332 10.7442V6.57751C10.8332 6.3565 10.7454 6.14454 10.5891 5.98826C10.4328 5.83198 10.2209 5.74418 9.99984 5.74418ZM9.99984 14.0775C10.2209 14.0775 10.4328 13.9897 10.5891 13.8334C10.7454 13.6772 10.8332 13.4652 10.8332 13.2442C10.8332 13.0232 10.7454 12.8112 10.5891 12.6549C10.4328 12.4986 10.2209 12.4108 9.99984 12.4108C9.77882 12.4108 9.56686 12.4986 9.41058 12.6549C9.2543 12.8112 9.1665 13.0232 9.1665 13.2442C9.1665 13.4652 9.2543 13.6772 9.41058 13.8334C9.56686 13.9897 9.77882 14.0775 9.99984 14.0775Z" fill="#FF0000" />
                        </svg>Laporkan Projek</button>
                    <button class="flex items-center gap-2 text-light-90"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 18.3333C14.3056 18.3333 13.7153 18.0902 13.2292 17.6041C12.7431 17.118 12.5 16.5277 12.5 15.8333C12.5 15.7361 12.5069 15.6352 12.5208 15.5308C12.5347 15.4263 12.5556 15.3327 12.5833 15.25L6.70833 11.8333C6.47222 12.0416 6.20833 12.205 5.91667 12.3233C5.625 12.4416 5.31944 12.5005 5 12.5C4.30556 12.5 3.71528 12.2569 3.22917 11.7708C2.74306 11.2847 2.5 10.6944 2.5 9.99996C2.5 9.30551 2.74306 8.71524 3.22917 8.22913C3.71528 7.74301 4.30556 7.49996 5 7.49996C5.31944 7.49996 5.625 7.55913 5.91667 7.67746C6.20833 7.79579 6.47222 7.95885 6.70833 8.16663L12.5833 4.74996C12.5556 4.66663 12.5347 4.57301 12.5208 4.46913C12.5069 4.36524 12.5 4.2644 12.5 4.16663C12.5 3.47218 12.7431 2.8819 13.2292 2.39579C13.7153 1.90968 14.3056 1.66663 15 1.66663C15.6944 1.66663 16.2847 1.90968 16.7708 2.39579C17.2569 2.8819 17.5 3.47218 17.5 4.16663C17.5 4.86107 17.2569 5.45135 16.7708 5.93746C16.2847 6.42357 15.6944 6.66663 15 6.66663C14.6806 6.66663 14.375 6.60774 14.0833 6.48996C13.7917 6.37218 13.5278 6.20885 13.2917 5.99996L7.41667 9.41663C7.44444 9.49996 7.46528 9.59385 7.47917 9.69829C7.49306 9.80274 7.5 9.90329 7.5 9.99996C7.5 10.0972 7.49306 10.198 7.47917 10.3025C7.46528 10.4069 7.44444 10.5005 7.41667 10.5833L13.2917 14C13.5278 13.7916 13.7917 13.6286 14.0833 13.5108C14.375 13.393 14.6806 13.3338 15 13.3333C15.6944 13.3333 16.2847 13.5763 16.7708 14.0625C17.2569 14.5486 17.5 15.1388 17.5 15.8333C17.5 16.5277 17.2569 17.118 16.7708 17.6041C16.2847 18.0902 15.6944 18.3333 15 18.3333Z" fill="#999999" />
                        </svg>Bagikan</button>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-12 flex justify-end sm:mt-8">
                <div class="bg-[#f3f3f3] bg-opacity-70 rounded-3xl lg:w-[550px] md:w-80 w-full lg:px-11 px-5">
                    <div class="flex items-center justify-between mt-9">
                        <div>
                            <p class="font-medium text-base md:text-[14px] text-dark-50">Kategori :</p>
                            <div class="bg-primary-50 bg-opacity-10 lg:rounded-xl rounded-md py-3 pl-3 lg:w-56 w-36 mt-5">
                                <p class="flex items-center font-semibold gap-2 text-primary-50 lg:text-[14px] text-xs">
                                    <svg class="sm:hidden md:hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g opacity="0.7">
                                            <path d="M7.33317 9.12502L9.12484 7.31252L7.95817 6.12502L7.0415 7.04169L5.87484 5.87502L6.77067 4.95835L5.83317 4.02085L4.02067 5.83335L7.33317 9.12502ZM14.1665 15.9792L15.979 14.1667L15.0415 13.2292L14.1248 14.125L12.9582 12.9584L13.854 12.0417L12.6665 10.875L10.8748 12.6667L14.1665 15.9792ZM13.5207 5.35419L14.6873 6.52085L15.854 5.35419L14.6665 4.16669L13.5207 5.35419ZM6.0415 17.5H2.49984V13.9584L6.14567 10.3125L1.6665 5.83335L5.83317 1.66669L10.3332 6.16669L13.479 3.00002C13.6457 2.83335 13.8332 2.70835 14.0415 2.62502C14.2498 2.54169 14.4651 2.50002 14.6873 2.50002C14.9096 2.50002 15.1248 2.54169 15.3332 2.62502C15.5415 2.70835 15.729 2.83335 15.8957 3.00002L16.9998 4.12502C17.1665 4.29169 17.2915 4.47919 17.3748 4.68752C17.4582 4.89585 17.4998 5.11113 17.4998 5.33335C17.4998 5.55558 17.4582 5.76752 17.3748 5.96919C17.2915 6.17085 17.1665 6.35474 16.9998 6.52085L13.854 9.68752L18.3332 14.1667L14.1665 18.3334L9.68734 13.8542L6.0415 17.5Z" fill="#020179" />
                                        </g>
                                    </svg>Grafis dan Desain
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="font-medium text-base md:text-[14px] text-dark-50">Status Projek :</p>
                            <div class="bg-[#00A410] bg-opacity-10 lg:rounded-xl rounded-md py-3 lg:pl-7 md:pl-2 pl-4 md:w-32 sm:w-36 lg:pr-[100px] mt-5">
                                <p class="flex items-center font-semibold gap-2 md:gap-1 text-[#004A03] lg:text-[14px] text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#427B45" />
                                    </svg>Tersedia
                                </p>
                            </div>
                            <div class="bg-[#FFC807] bg-opacity-10 lg:rounded-xl rounded-md py-3 lg:px-7 md:pl-2 pl-4 md:w-32 sm:w-36 mt-5 hidden">
                                <p class="flex items-center font-semibold gap-2 md:gap-1 text-[#CD9A00] lg:text-[14px] text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#DBB544" />
                                    </svg>Dalam Pengerjaan
                                </p>
                            </div>
                            <div class="bg-[#454545] bg-opacity-10 lg:rounded-xl rounded-md py-3 lg:pl-7 md:pl-2 pl-4 md:w-32 sm:w-36 lg:pr-[100px] mt-5 hidden">
                                <p class="flex items-center font-semibold gap-2 md:gap-1 text-dark-30 lg:text-[14px] text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                        <circle cx="4" cy="4" r="4" fill="#878787" />
                                    </svg>Selesai
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="border-t-2 border-light-30 mt-10"></div>
                    <div class="flex items-center justify-between mt-5">
                        <div>
                            <p class="flex items-center gap-1 text-primary-50 lg:text-base md:text-xs text-[13px] font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M9.83327 9.08333C7.9416 8.59167 7.33327 8.08333 7.33327 7.29167C7.33327 6.38333 8.17493 5.75 9.58327 5.75C11.0666 5.75 11.6166 6.45833 11.6666 7.5H13.5083C13.4499 6.06667 12.5749 4.75 10.8333 4.325V2.5H8.33327V4.3C6.7166 4.65 5.4166 5.7 5.4166 7.30833C5.4166 9.23333 7.00827 10.1917 9.33327 10.75C11.4166 11.25 11.8333 11.9833 11.8333 12.7583C11.8333 13.3333 11.4249 14.25 9.58327 14.25C7.8666 14.25 7.1916 13.4833 7.09994 12.5H5.2666C5.3666 14.325 6.73327 15.35 8.33327 15.6917V17.5H10.8333V15.7083C12.4583 15.4 13.7499 14.4583 13.7499 12.75C13.7499 10.3833 11.7249 9.575 9.83327 9.08333Z" fill="#020179" />
                                </svg>Bayaran
                            </p>
                            <p class="text-dark-50 lg:text-xl text-base font-semibold mt-3">Rp<span>350.000</span></p>
                        </div>
                        <div>
                            <p class="flex items-center gap-1 text-primary-50 lg:text-base md:text-xs text-[13px] font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <g clip-path="url(#clip0_1088_1107)">
                                        <path d="M14.1694 7.56201C14.6011 7.76676 14.9912 8.02409 15.3398 8.33398C15.6885 8.64388 15.9873 8.99528 16.2363 9.38818C16.4854 9.78109 16.6735 10.2017 16.8008 10.6499C16.9281 11.0981 16.9945 11.563 17 12.0444C17 12.7251 16.87 13.367 16.6099 13.9702C16.3498 14.5734 15.9956 15.0991 15.5474 15.5474C15.0991 15.9956 14.5734 16.3498 13.9702 16.6099C13.367 16.87 12.7251 17 12.0444 17C11.563 17 11.0981 16.9336 10.6499 16.8008C10.2017 16.668 9.78385 16.4798 9.39648 16.2363C9.00911 15.9928 8.65771 15.6968 8.34229 15.3481C8.02686 14.9995 7.76676 14.6066 7.56201 14.1694H0V1.41943H2.83057V0H4.25V1.41943H9.91943V0H11.3306V1.41943H14.1694V7.56201ZM1.41943 4.25H12.75V2.83057H1.41943V4.25ZM7.13037 12.75C7.09717 12.5176 7.08057 12.2824 7.08057 12.0444C7.08057 11.3582 7.21061 10.7135 7.4707 10.1104C7.73079 9.50716 8.08496 8.98145 8.5332 8.5332C8.98145 8.08496 9.50716 7.73079 10.1104 7.4707C10.7135 7.21061 11.3582 7.08057 12.0444 7.08057C12.2824 7.08057 12.5176 7.09717 12.75 7.13037V5.66943H1.41943V12.75H7.13037ZM12.0444 15.5806C12.5314 15.5806 12.988 15.4893 13.4141 15.3066C13.8402 15.124 14.2165 14.8695 14.543 14.543C14.8695 14.2165 15.1213 13.8429 15.2983 13.4224C15.4754 13.0018 15.5695 12.5425 15.5806 12.0444C15.5806 11.5575 15.4893 11.0981 15.3066 10.6665C15.124 10.2349 14.8722 9.85856 14.5513 9.5376C14.2303 9.21663 13.854 8.96484 13.4224 8.78223C12.9907 8.59961 12.5314 8.50553 12.0444 8.5C11.5519 8.5 11.0926 8.59131 10.6665 8.77393C10.2404 8.95654 9.8641 9.2111 9.5376 9.5376C9.2111 9.8641 8.95931 10.2404 8.78223 10.6665C8.60514 11.0926 8.51107 11.5519 8.5 12.0444C8.5 12.5369 8.59131 12.9963 8.77393 13.4224C8.95654 13.8485 9.2111 14.222 9.5376 14.543C9.8641 14.8639 10.2404 15.1157 10.6665 15.2983C11.0926 15.481 11.5519 15.575 12.0444 15.5806ZM12.75 11.3306H14.1694V12.75H11.3306V9.91943H12.75V11.3306Z" fill="#020179" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1088_1107">
                                            <rect width="17" height="17" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>Deadline <span class="lg:block hidden">Project</span>
                            </p>
                            <p class="text-dark-50 lg:text-xl text-base font-semibold mt-3">15-20 <span>Hari</span></p>
                        </div>
                        <div>
                            <p class="flex items-center gap-1 text-primary-50 lg:text-base md:text-xs text-[13px] font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M6.33301 14.25L9.49967 11.8354L12.6663 14.25L11.4788 10.3312L14.6455 8.07498H10.7663L9.49967 3.95831L8.23301 8.07498H4.35384L7.52051 10.3312L6.33301 14.25ZM9.49967 17.4166C8.40454 17.4166 7.37537 17.2087 6.41217 16.7928C5.44898 16.3769 4.61113 15.813 3.89863 15.101C3.18613 14.3885 2.6222 13.5507 2.20684 12.5875C1.79148 11.6243 1.58354 10.5951 1.58301 9.49998C1.58301 8.40484 1.79095 7.37567 2.20684 6.41248C2.62273 5.44929 3.18666 4.61144 3.89863 3.89894C4.61113 3.18644 5.44898 2.62251 6.41217 2.20715C7.37537 1.79179 8.40454 1.58384 9.49967 1.58331C10.5948 1.58331 11.624 1.79126 12.5872 2.20715C13.5504 2.62304 14.3882 3.18697 15.1007 3.89894C15.8132 4.61144 16.3774 5.44929 16.7933 6.41248C17.2092 7.37567 17.4169 8.40484 17.4163 9.49998C17.4163 10.5951 17.2084 11.6243 16.7925 12.5875C16.3766 13.5507 15.8127 14.3885 15.1007 15.101C14.3882 15.8135 13.5504 16.3777 12.5872 16.7936C11.624 17.2095 10.5948 17.4172 9.49967 17.4166Z" fill="#020179" />
                                </svg>Kesulitan
                            </p>
                            <p class="text-dark-50 lg:text-xl text-base font-semibold mt-3">Mudah</p>
                        </div>
                    </div>
                    <div class="border-t-2 border-light-30 mt-5"></div>
                    <div class="mt-6">
                        <div class="flex items-center lg:gap-3">
                            <p class="flex items-center gap-2 md:gap-1 text-light-90 font-medium lg:text-[14px] md:text-[10px] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M6.66667 11.6667C6.43056 11.6667 6.23278 11.5867 6.07333 11.4267C5.91389 11.2667 5.83389 11.0689 5.83333 10.8334C5.83333 10.5972 5.91333 10.3995 6.07333 10.24C6.23333 10.0806 6.43111 10.0006 6.66667 10C6.90278 10 7.10083 10.08 7.26083 10.24C7.42083 10.4 7.50056 10.5978 7.5 10.8334C7.5 11.0695 7.42 11.2675 7.26 11.4275C7.1 11.5875 6.90222 11.6672 6.66667 11.6667ZM10 11.6667C9.76389 11.6667 9.56611 11.5867 9.40667 11.4267C9.24722 11.2667 9.16722 11.0689 9.16667 10.8334C9.16667 10.5972 9.24667 10.3995 9.40667 10.24C9.56667 10.0806 9.76444 10.0006 10 10C10.2361 10 10.4342 10.08 10.5942 10.24C10.7542 10.4 10.8339 10.5978 10.8333 10.8334C10.8333 11.0695 10.7533 11.2675 10.5933 11.4275C10.4333 11.5875 10.2356 11.6672 10 11.6667ZM13.3333 11.6667C13.0972 11.6667 12.8994 11.5867 12.74 11.4267C12.5806 11.2667 12.5006 11.0689 12.5 10.8334C12.5 10.5972 12.58 10.3995 12.74 10.24C12.9 10.0806 13.0978 10.0006 13.3333 10C13.5694 10 13.7675 10.08 13.9275 10.24C14.0875 10.4 14.1672 10.5978 14.1667 10.8334C14.1667 11.0695 14.0867 11.2675 13.9267 11.4275C13.7667 11.5875 13.5689 11.6672 13.3333 11.6667ZM4.16667 18.3334C3.70833 18.3334 3.31611 18.1703 2.99 17.8442C2.66389 17.5181 2.50056 17.1256 2.5 16.6667V5.00002C2.5 4.54169 2.66333 4.14946 2.99 3.82335C3.31667 3.49724 3.70889 3.33391 4.16667 3.33335H5V1.66669H6.66667V3.33335H13.3333V1.66669H15V3.33335H15.8333C16.2917 3.33335 16.6842 3.49669 17.0108 3.82335C17.3375 4.15002 17.5006 4.54224 17.5 5.00002V16.6667C17.5 17.125 17.3369 17.5175 17.0108 17.8442C16.6847 18.1709 16.2922 18.3339 15.8333 18.3334H4.16667ZM4.16667 16.6667H15.8333V8.33335H4.16667V16.6667Z" fill="#999999" />
                                </svg>Tanggal Diunggah
                            </p>
                            <p class="text-light-90 lg:text-[14px] md:text-[10px] text-[11px] md:ml-3 sm:ml-2">:</p>
                            <div class="flex items-center text-light-90 font-semibold lg:gap-2 lg:text-[14px] md:text-[10px] text-[11px] lg:ml-0 ml-2">
                                <p>19 Desember 2023</p> |
                                <p>20.36 WIB</p>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <p class="flex items-center gap-3 md:gap-2 text-light-90 font-medium ml-[2px] lg:text-[14px] md:text-[10px] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                                    <path d="M7.00016 11.5C3.31683 11.5 0.333496 12.9917 0.333496 14.8334V16.5H13.6668V14.8334C13.6668 12.9917 10.6835 11.5 7.00016 11.5ZM3.66683 6.50002C3.66683 7.38408 4.01802 8.23192 4.64314 8.85704C5.26826 9.48216 6.11611 9.83335 7.00016 9.83335C7.88422 9.83335 8.73206 9.48216 9.35719 8.85704C9.98231 8.23192 10.3335 7.38408 10.3335 6.50002M6.5835 0.666687C6.3335 0.666687 6.16683 0.841687 6.16683 1.08335V3.58335H5.3335V1.50002C5.3335 1.50002 3.4585 2.21669 3.4585 4.62502C3.4585 4.62502 2.8335 4.74169 2.8335 5.66669H11.1668C11.1252 4.74169 10.5418 4.62502 10.5418 4.62502C10.5418 2.21669 8.66683 1.50002 8.66683 1.50002V3.58335H7.8335V1.08335C7.8335 0.841687 7.67516 0.666687 7.41683 0.666687H6.5835Z" fill="#999999" />
                                </svg>Jumlah Pelamar
                            </p>
                            <p class="text-light-90 lg:ml-[27px] md:ml-[22px] ml-5 lg:text-[14px] md:text-[10px] text-[11px]">
                                :</p>
                            <p class="text-light-90 font-semibold lg:ml-3 ml-2 lg:text-[14px] md:text-[10px] text-[11px]">
                                <span>215</span> Orang
                            </p>
                        </div>
                        <div class="flex items-center mt-1">
                            <p class="flex items-center gap-3 md:gap-2 text-light-90 font-medium lg:text-[14px] md:text-[10px] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 16.5C13.1422 16.5 16.5 13.1422 16.5 9C16.5 4.85775 13.1422 1.5 9 1.5C4.85775 1.5 1.5 4.85775 1.5 9C1.5 13.1422 4.85775 16.5 9 16.5ZM11.9512 4.194C12.0547 4.23616 12.1433 4.30818 12.2057 4.40088C12.2681 4.49359 12.3014 4.60276 12.3015 4.7145V6.75075C12.3015 6.89993 12.2422 7.04301 12.1367 7.1485C12.0313 7.25399 11.8882 7.31325 11.739 7.31325H9.75C9.63929 7.31331 9.53102 7.2807 9.43876 7.21951C9.3465 7.15831 9.27435 7.07125 9.23135 6.96923C9.18835 6.86721 9.17641 6.75477 9.19703 6.646C9.21764 6.53723 9.2699 6.43696 9.34725 6.35775L9.91875 5.77275C9.36677 5.60315 8.7786 5.58969 8.21944 5.73385C7.66027 5.87801 7.15193 6.17417 6.75075 6.5895C5.49975 7.86975 5.49975 9.95175 6.75075 11.232C7.04237 11.534 7.39181 11.7742 7.77824 11.9382C8.16468 12.1022 8.58019 12.1868 9 12.1868C9.41981 12.1868 9.83532 12.1022 10.2218 11.9382C10.6082 11.7742 10.9576 11.534 11.2492 11.232C11.7419 10.7269 12.0595 10.0771 12.1552 9.378C12.1987 9.0645 12.4477 8.8005 12.7642 8.8005C13.0687 8.8005 13.3207 9.04425 13.2915 9.34725C13.1962 10.3529 12.7595 11.2957 12.054 12.0187C11.6576 12.428 11.183 12.7534 10.6583 12.9756C10.1337 13.1979 9.56976 13.3124 9 13.3124C8.43024 13.3124 7.86629 13.1979 7.34166 12.9756C6.81702 12.7534 6.34241 12.428 5.946 12.0187C4.26825 10.3012 4.26825 7.521 5.946 5.8035C6.5579 5.17128 7.35096 4.74458 8.21571 4.5823C9.08046 4.42001 9.97426 4.53015 10.7737 4.8975L11.3362 4.3215C11.4145 4.2415 11.5147 4.18663 11.6243 4.16392C11.7338 4.14121 11.8477 4.15168 11.9512 4.194Z" fill="#999999" />
                                </svg>Opsi Meeting
                            </p>
                            <p class="text-light-90 lg:ml-[43px] ml-8 lg:text-[14px] md:text-[10px] text-[11px]">:</p>
                            <p class="text-light-90 font-semibold lg:ml-3 ml-2 lg:text-[14px] md:text-[10px] text-[11px]">
                                Iya</p>
                        </div>
                    </div>
                    <form action="/detail_project">
                        <button class="bg-primary-50 text-white py-3 rounded-lg w-full font-semibold lg:my-12 my-6 hover:bg-primary-30 hover:shadow-xl transition-all duration-200 ease-in-out">Daftar
                            Project</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-light-30 lg:mt-14 mt-10"></div>
    </div>
</section>

<main class="pagination sm:hidden block container mx-auto">
    <div class="lg:px-24 md:px-12 px-6  mt-12">
        <div class="flex items-center justify-between">
            <div>
                <p class="font-medium lg:text-lg text-[14px] text-light-50">Menampilkan halaman <span>2</span> dari
                    <span>247</span>
                </p>
            </div>
            <div class="flex items-center lg:gap-3 gap-1">
                <button class="flex items-center lg:text-lg text-[14px] text-primary-50 lg:gap-1 gap-0"><svg xmlns="http://www.w3.org/2000/svg" class="md:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <path d="M12.1971 19.4665C12.2836 19.558 12.3512 19.6657 12.396 19.7833C12.4409 19.9009 12.4621 20.0262 12.4586 20.152C12.455 20.2779 12.4267 20.4018 12.3753 20.5166C12.3238 20.6315 12.2503 20.7352 12.1588 20.8216C12.0673 20.9081 11.9597 20.9757 11.842 21.0205C11.7244 21.0654 11.5991 21.0867 11.4733 21.0831C11.3475 21.0796 11.2236 21.0512 11.1087 20.9998C10.9938 20.9484 10.8902 20.8748 10.8037 20.7833L2.65786 12.1583C2.48964 11.9804 2.3959 11.7448 2.3959 11.4999C2.3959 11.2551 2.48964 11.0195 2.65786 10.8415L10.8037 2.21559C10.8896 2.1221 10.9932 2.04659 11.1085 1.99348C11.2238 1.94036 11.3485 1.91069 11.4754 1.90619C11.6023 1.90168 11.7288 1.92242 11.8476 1.96722C11.9664 2.01202 12.0751 2.07998 12.1674 2.16714C12.2597 2.2543 12.3338 2.35894 12.3853 2.47497C12.4368 2.59101 12.4648 2.71612 12.4675 2.84305C12.4703 2.96997 12.4478 3.09619 12.4014 3.21435C12.355 3.33252 12.2855 3.44028 12.1971 3.53138L4.67228 11.4999L12.1971 19.4665Z" fill="#020179" />
                    </svg>Prev
                </button>
                <a href="" class="py-[1px] lg:px-3 px-2 bg-primary-50 text-white lg:text-lg text-[14px] rounded-md">1</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md">2</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md">3</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md">4</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md">5</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md lg:block hidden">6</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md">...</a>
                <a href="" class="py-[1px] lg:px-3 px-2 text-light-70 hover:bg-light-30 lg:text-lg text-[14px] rounded-md">10</a>
                <button class="flex items-center lg:text-lg text-[14px] text-primary-50 lg:gap-1 gap-0">Next<svg xmlns="http://www.w3.org/2000/svg" class="md:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <path d="M10.8029 3.53345C10.7164 3.44196 10.6488 3.33433 10.604 3.21672C10.5591 3.0991 10.5379 2.9738 10.5414 2.84797C10.545 2.72214 10.5733 2.59824 10.6247 2.48335C10.6762 2.36846 10.7497 2.26483 10.8412 2.17837C10.9327 2.09191 11.0403 2.02432 11.158 1.97945C11.2756 1.93459 11.4009 1.91333 11.5267 1.91689C11.6525 1.92045 11.7764 1.94876 11.8913 2.0002C12.0062 2.05164 12.1098 2.12521 12.1963 2.2167L20.3421 10.8417C20.5104 11.0196 20.6041 11.2552 20.6041 11.5001C20.6041 11.7449 20.5104 11.9805 20.3421 12.1585L12.1963 20.7844C12.1104 20.8779 12.0068 20.9534 11.8915 21.0065C11.7762 21.0596 11.6515 21.0893 11.5246 21.0938C11.3977 21.0983 11.2712 21.0776 11.1524 21.0328C11.0336 20.988 10.9249 20.92 10.8326 20.8329C10.7403 20.7457 10.6662 20.6411 10.6147 20.525C10.5632 20.409 10.5352 20.2839 10.5325 20.157C10.5297 20.03 10.5522 19.9038 10.5986 19.7857C10.645 19.6675 10.7145 19.5597 10.8029 19.4686L18.3277 11.5001L10.8029 3.53345Z" fill="#020179" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</main>

@endsection
@extends('templates.landing_layout')
@section('content')

<!-- HIRO -->
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
                            <form action="" class="sm:w-full"><button class="text-white border-2 rounded-lg text-lg border-white w-56 sm:w-full py-3">Rekrut
                                    Freelance</button></form>
                            <form action="" class="sm:w-full"><button class="text-white border-2 rounded-lg text-lg border-white w-96 sm:w-full py-3 flex items-center justify-center gap-5">Cari
                                    Pekerjaan
                                    Freelance <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M18.0833 16.3333H17.1617L16.835 16.0183C17.5641 15.1713 18.097 14.1735 18.3955 13.0965C18.694 12.0195 18.7507 10.8898 18.5617 9.7883C18.0133 6.54497 15.3067 3.95497 12.04 3.5583C10.8916 3.41301 9.72509 3.53237 8.62986 3.90724C7.53464 4.28211 6.53969 4.90256 5.72114 5.72111C4.90259 6.53966 4.28214 7.53461 3.90727 8.62983C3.5324 9.72506 3.41304 10.8915 3.55833 12.04C3.955 15.3066 6.545 18.0133 9.78833 18.5616C10.8898 18.7507 12.0195 18.6939 13.0965 18.3954C14.1736 18.0969 15.1713 17.5641 16.0183 16.835L16.3333 17.1616V18.0833L21.2917 23.0416C21.77 23.52 22.5517 23.52 23.03 23.0416C23.5083 22.5633 23.5083 21.7816 23.03 21.3033L18.0833 16.3333ZM11.0833 16.3333C8.17833 16.3333 5.83333 13.9883 5.83333 11.0833C5.83333 8.1783 8.17833 5.8333 11.0833 5.8333C13.9883 5.8333 16.3333 8.1783 16.3333 11.0833C16.3333 13.9883 13.9883 16.3333 11.0833 16.3333Z" fill="white" />
                                    </svg></button></form>
                        </div>
                    </div>
                    <div class="col-span-6 lg:block hidden">
                        <img src="{{asset('assets/img_index/asset/landingPage/peoplepink.png')}}" alt="peoplePink" class="mx-auto mt-40 select-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-light-50 bg-opacity-20">
        <div class="lg:mx-16 mx-6">
            <div class="flex sm:flex-wrap items-center lg:justify-between justify-start md:px-8 scrollable-container py-14 sm:mx-2 gap-20 sm:gap-8">
                <div class="flex items-center gap-6">
                    <div class="bg-[#E6EAF3] p-4 sm:px-5 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="sm:w-8" width="42" height="42" viewBox="0 0 42 42" fill="none">
                            <path d="M31.5 14H29.75V10.5C29.75 5.67 25.83 1.75 21 1.75C16.17 1.75 12.25 5.67 12.25 10.5V14H10.5C8.575 14 7 15.575 7 17.5V35C7 36.925 8.575 38.5 10.5 38.5H31.5C33.425 38.5 35 36.925 35 35V17.5C35 15.575 33.425 14 31.5 14ZM21 29.75C19.075 29.75 17.5 28.175 17.5 26.25C17.5 24.325 19.075 22.75 21 22.75C22.925 22.75 24.5 24.325 24.5 26.25C24.5 28.175 22.925 29.75 21 29.75ZM15.75 14V10.5C15.75 7.595 18.095 5.25 21 5.25C23.905 5.25 26.25 7.595 26.25 10.5V14H15.75Z" fill="#020179" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-semibold sm:text-[13px] text-lg text-primary-50">
                            <p class="leading-5">Transaksi Cepat dan <br class="sm:hidden block"> Aman,
                                <br class="sm:block hidden"> Anti Penipuan.
                            </p>
                        </h2>
                        <p class="text-[16px] text-light-70 mt-3 sm:mt-2 sm:text-[12px] leading-5">Semua transaksi
                            melalui kami,
                            uang <br>
                            ditahan dan
                            dilindungi
                            sampai projek <br> selesai, tidak ada peluang penipuan.</p>
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="bg-[#E6EAF3] p-4 sm:px-5 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="sm:w-8" width="42" height="42" viewBox="0 0 42 42" fill="none">
                            <g clip-path="url(#clip0_260_76)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.875 21C30.9314 21 32.9063 21.8045 34.3774 23.2414C35.8485 24.6782 36.6992 26.6336 36.7477 28.6894C36.7961 30.7453 36.0385 32.7386 34.6367 34.2432C33.2349 35.7478 31.3001 36.6443 29.246 36.7413L28.875 36.75H13.125C11.0686 36.75 9.09374 35.9455 7.62261 34.5086C6.15147 33.0717 5.30076 31.1164 5.25231 29.0606C5.20386 27.0047 5.9615 25.0114 7.36331 23.5068C8.76511 22.0022 10.6999 21.1057 12.754 21.0088L13.125 21H28.875ZM12.25 25.375C11.3217 25.375 10.4315 25.7437 9.77512 26.4001C9.11875 27.0565 8.75 27.9467 8.75 28.875C8.75 29.8033 9.11875 30.6935 9.77512 31.3499C10.4315 32.0063 11.3217 32.375 12.25 32.375C13.1783 32.375 14.0685 32.0063 14.7249 31.3499C15.3812 30.6935 15.75 29.8033 15.75 28.875C15.75 27.9467 15.3812 27.0565 14.7249 26.4001C14.0685 25.7437 13.1783 25.375 12.25 25.375ZM28.875 3.5C30.9314 3.50003 32.9063 4.30447 34.3774 5.74136C35.8485 7.17825 36.6992 9.13359 36.7477 11.1894C36.7961 13.2453 36.0385 15.2386 34.6367 16.7432C33.2349 18.2478 31.3001 19.1443 29.246 19.2413L28.875 19.25H13.125C11.0686 19.25 9.09374 18.4455 7.62261 17.0086C6.15147 15.5718 5.30076 13.6164 5.25231 11.5606C5.20386 9.5047 5.9615 7.51145 7.36331 6.00684C8.76511 4.50224 10.6999 3.60566 12.754 3.50875L13.125 3.5H28.875ZM29.75 7.875C28.8217 7.875 27.9315 8.24375 27.2751 8.90013C26.6187 9.5565 26.25 10.4467 26.25 11.375C26.25 12.3033 26.6187 13.1935 27.2751 13.8499C27.9315 14.5063 28.8217 14.875 29.75 14.875C30.6783 14.875 31.5685 14.5063 32.2249 13.8499C32.8812 13.1935 33.25 12.3033 33.25 11.375C33.25 10.4467 32.8812 9.5565 32.2249 8.90013C31.5685 8.24375 30.6783 7.875 29.75 7.875Z" fill="#020179" />
                            </g>
                            <defs>
                                <clipPath id="clip0_260_76">
                                    <rect width="42" height="42" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-semibold sm:text-[13px] text-lg text-primary-50">
                            <p class="leading-5">Fitur Switch Role, Jadi Project <br> Owner dan
                                Freelancer.
                            </p>
                        </h2>
                        <p class="text-[16px] text-light-70 mt-3 sm:mt-2 sm:text-[12px] leading-5">Jadi project owner
                            saat kamu
                            butuh <br>
                            pekerja dan jadi freelancer jika kamu <br> mencari pekerjaan.</p>
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="bg-[#E6EAF3] p-4 sm:py-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="sm:w-10" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 43.2001C29.0922 43.2001 33.9758 41.1772 37.5765 37.5765C41.1772 33.9758 43.2 29.0922 43.2 24C43.2 18.9079 41.1772 14.0243 37.5765 10.4236C33.9758 6.8229 29.0922 4.80005 24 4.80005C18.9078 4.80005 14.0242 6.8229 10.4235 10.4236C6.82285 14.0243 4.8 18.9079 4.8 24C4.8 29.0922 6.82285 33.9758 10.4235 37.5765C14.0242 41.1772 18.9078 43.2001 24 43.2001ZM16.7712 20.6592C16.696 20.9619 16.5059 21.2234 16.2413 21.3883C15.9766 21.5533 15.6581 21.6087 15.3533 21.5429C15.0485 21.477 14.7812 21.2951 14.6082 21.0356C14.4352 20.7762 14.37 20.4596 14.4264 20.1529V20.1409C14.5749 19.5473 14.8356 18.9876 15.1944 18.492C15.5834 17.9527 16.0983 17.5165 16.6944 17.2216C17.2905 16.9267 17.9496 16.782 18.6144 16.8C19.9392 16.8 21.0168 17.316 21.7536 18.1464C22.4688 18.9552 22.8048 19.9992 22.8048 21C22.8048 21.8377 22.6392 22.5553 22.3128 23.1744C22.0145 23.7256 21.5992 24.2048 21.096 24.5784C20.7276 24.852 20.3429 25.1028 19.944 25.3296L19.8096 25.4113C19.4064 25.6513 19.0752 25.8601 18.7896 26.1073C17.844 26.9256 17.2248 27.792 16.956 28.8H21.6C21.9183 28.8 22.2235 28.9265 22.4485 29.1515C22.6736 29.3766 22.8 29.6818 22.8 30C22.8 30.3183 22.6736 30.6235 22.4485 30.8486C22.2235 31.0736 21.9183 31.2001 21.6 31.2001H15.6C15.2817 31.2001 14.9765 31.0736 14.7515 30.8486C14.5264 30.6235 14.4 30.3183 14.4 30C14.4 27.576 15.54 25.7424 17.2152 24.2928C17.6712 23.8944 18.1656 23.5968 18.576 23.3496L18.7152 23.2656C19.0301 23.0893 19.3339 22.8938 19.6248 22.68C19.8547 22.5155 20.0456 22.3025 20.184 22.056C20.3424 21.7274 20.4166 21.3645 20.4 21C20.4073 20.5389 20.2479 20.0907 19.9512 19.7376C19.6872 19.44 19.272 19.2 18.6072 19.2C17.8152 19.2 17.3952 19.5504 17.1336 19.908C16.9764 20.1265 16.8572 20.3699 16.7808 20.628L16.7712 20.6592ZM26.4 16.8C26.7183 16.8 27.0235 16.9265 27.2485 17.1515C27.4736 17.3766 27.6 17.6818 27.6 18V24H31.2V18C31.2 17.6818 31.3264 17.3766 31.5515 17.1515C31.7765 16.9265 32.0817 16.8 32.4 16.8C32.7183 16.8 33.0235 16.9265 33.2485 17.1515C33.4736 17.3766 33.6 17.6818 33.6 18V30C33.6 30.3183 33.4736 30.6235 33.2485 30.8486C33.0235 31.0736 32.7183 31.2001 32.4 31.2001C32.0817 31.2001 31.7765 31.0736 31.5515 30.8486C31.3264 30.6235 31.2 30.3183 31.2 30V26.4H26.4C26.0817 26.4 25.7765 26.2736 25.5515 26.0486C25.3264 25.8235 25.2 25.5183 25.2 25.2001V18C25.2 17.6818 25.3264 17.3766 25.5515 17.1515C25.7765 16.9265 26.0817 16.8 26.4 16.8Z" fill="#020179" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-semibold sm:text-[13px] text-lg text-primary-50">
                            <p class="leading-5">Siapapun, Kapanpun,<br> Dimanapun, BISA!
                            </p>
                        </h2>
                        <p class="text-[16px] text-light-70 mt-3 sm:mt-2 sm:text-[12px] leading-5">Cari uang tambahan
                            dengan
                            mudah <br>
                            darimana saja dan kapan saja sesuai <br> dengan bidang kamu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="bidang">
    <div class="mt-20 mx-16 sm:mx-6 sm:mt-10">
        <div class="">
            <h1 class="text-4xl sm:text-2xl lg:text-start text-center">Cari <span class="font-semibold">Pekerjaan</span>
                Sesuai <span class="font-semibold">Bidangmu</span></h1>
            <p class="mt-5 text-lg sm:text-[13px] lg:text-start text-center text-light-90 sm:leading-5">Tersedia banyak
                bidang
                yang bisa
                kamu pilih <br class="hidden sm:block">
                sesuai dengan
                <br class="block sm:hidden"> bakat dan
                keahlianmu.<br class="hidden sm:block"> <span class="font-medium">Pemrograman, desain,
                    keuangan,<br class="block sm:hidden"> menulis,</span><br class="hidden sm:block"> dan <span class="font-medium">masih banyak lagi.</span>
            </p>
        </div>
        <div class="grid grid-cols-12 justify-between mt-14 sm:mt-7 sm:ml-2">
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 ">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9333 0C13.3499 0 12.7903 0.231785 12.3777 0.644365C11.9651 1.05695 11.7333 1.61652 11.7333 2.2V4.4H2.2C1.61652 4.4 1.05695 4.63179 0.644365 5.04437C0.231785 5.45695 0 6.01652 0 6.6L0 15.4C0 15.9835 0.231785 16.5431 0.644365 16.9556C1.05695 17.3682 1.61652 17.6 2.2 17.6H8.8V20.5333H5.86667V22H19.8C20.3835 22 20.9431 21.7682 21.3556 21.3556C21.7682 20.9431 22 20.3835 22 19.8V2.2C22 1.61652 21.7682 1.05695 21.3556 0.644365C20.9431 0.231785 20.3835 0 19.8 0L13.9333 0ZM11.858 20.5333H10.2667V17.6H11.7333V19.8C11.7333 20.0567 11.7773 20.3045 11.858 20.5333ZM13.9333 20.5333H19.8C19.9945 20.5333 20.181 20.4561 20.3185 20.3185C20.4561 20.181 20.5333 19.9945 20.5333 19.8V8.8H13.2V19.8C13.2 19.9945 13.2773 20.181 13.4148 20.3185C13.5523 20.4561 13.7388 20.5333 13.9333 20.5333ZM13.2 7.33333H20.5333V2.2C20.5333 2.00551 20.4561 1.81898 20.3185 1.68146C20.181 1.54393 19.9945 1.46667 19.8 1.46667H13.9333C13.7388 1.46667 13.5523 1.54393 13.4148 1.68146C13.2773 1.81898 13.2 2.00551 13.2 2.2V7.33333Z" fill="#020179" />
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Web & Pemrograman</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 ">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g opacity="0.7">
                                <path d="M8.8 10.95L10.95 8.775L9.55 7.35L8.45 8.45L7.05 7.05L8.125 5.95L7 4.825L4.825 7L8.8 10.95ZM17 19.175L19.175 17L18.05 15.875L16.95 16.95L15.55 15.55L16.625 14.45L15.2 13.05L13.05 15.2L17 19.175ZM16.225 6.425L17.625 7.825L19.025 6.425L17.6 5L16.225 6.425ZM7.25 21H3V16.75L7.375 12.375L2 7L7 2L12.4 7.4L16.175 3.6C16.375 3.4 16.6 3.25 16.85 3.15C17.1 3.05 17.3583 3 17.625 3C17.8917 3 18.15 3.05 18.4 3.15C18.65 3.25 18.875 3.4 19.075 3.6L20.4 4.95C20.6 5.15 20.75 5.375 20.85 5.625C20.95 5.875 21 6.13333 21 6.4C21 6.66667 20.95 6.921 20.85 7.163C20.75 7.405 20.6 7.62567 20.4 7.825L16.625 11.625L22 17L17 22L11.625 16.625L7.25 21Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Grafis dan Desain</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 md:mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-[14px]">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g opacity="0.7">
                                <path d="M12 22L11 19H4C3.45 19 2.97933 18.8043 2.588 18.413C2.19667 18.0217 2.00067 17.5507 2 17V4C2 3.45 2.196 2.97933 2.588 2.588C2.98 2.19667 3.45067 2.00067 4 2H10L10.875 5H20C20.5833 5 21.0627 5.18767 21.438 5.563C21.8133 5.93833 22.0007 6.41733 22 7V20C22 20.55 21.8127 21.021 21.438 21.413C21.0633 21.805 20.584 22.0007 20 22H12ZM7.15 14.6C8.3 14.6 9.246 14.2293 9.988 13.488C10.73 12.7467 11.1007 11.784 11.1 10.6C11.1 10.4667 11.096 10.346 11.088 10.238C11.08 10.13 11.059 10.0173 11.025 9.9H7.075V11.45H9.3C9.16667 11.9167 8.91233 12.2793 8.537 12.538C8.16167 12.7967 7.70767 12.9257 7.175 12.925C6.525 12.925 5.96667 12.6917 5.5 12.225C5.03333 11.7583 4.8 11.1833 4.8 10.5C4.8 9.81667 5.03333 9.24167 5.5 8.775C5.96667 8.30833 6.525 8.075 7.175 8.075C7.475 8.075 7.75833 8.12933 8.025 8.238C8.29167 8.34667 8.53333 8.509 8.75 8.725L9.975 7.55C9.625 7.18333 9.204 6.9 8.712 6.7C8.22 6.5 7.69933 6.4 7.15 6.4C6.03333 6.4 5.079 6.796 4.287 7.588C3.495 8.38 3.09933 9.35067 3.1 10.5C3.1 11.65 3.496 12.621 4.288 13.413C5.08 14.205 6.034 14.6007 7.15 14.6ZM13.85 15.1L14.4 14.575C14.1667 14.2917 13.9543 14.0167 13.763 13.75C13.5717 13.4833 13.384 13.2 13.2 12.9L13.85 15.1ZM15.1 13.825C15.5667 13.275 15.921 12.75 16.163 12.25C16.405 11.75 16.5673 11.3583 16.65 11.075H12.675L12.975 12.125H13.975C14.1083 12.375 14.2667 12.646 14.45 12.938C14.6333 13.23 14.85 13.5257 15.1 13.825ZM13 21H20C20.3 21 20.5417 20.904 20.725 20.712C20.9083 20.52 21 20.2827 21 20V7C21 6.7 20.9083 6.45833 20.725 6.275C20.5417 6.09167 20.3 6 20 6H11.175L12.35 10.05H14.325V9H15.35V10.05H19V11.075H17.725C17.5583 11.7083 17.3083 12.325 16.975 12.925C16.6417 13.525 16.25 14.0833 15.8 14.6L18.525 17.275L17.8 18L15.1 15.3L14.2 16.225L15 19L13 21Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px] sm:leading-3">Penulisan & <br class="hidden sm:block"> Penerjemah</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 md:mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <g opacity="0.7">
                                <path d="M20.125 9.64371V3.83333C20.125 3.57917 20.024 3.33541 19.8443 3.15569C19.6646 2.97597 19.4208 2.875 19.1667 2.875H18.2083C16.3118 4.77154 12.7487 5.83337 10.5417 6.33746V16.6625C12.7487 17.1666 16.3118 18.2285 18.2083 20.125H19.1667C19.4208 20.125 19.6646 20.024 19.8443 19.8443C20.024 19.6646 20.125 19.4208 20.125 19.1667V13.3563C20.5369 13.2504 20.9018 13.0105 21.1624 12.6745C21.423 12.3384 21.5644 11.9253 21.5644 11.5C21.5644 11.0747 21.423 10.6616 21.1624 10.3255C20.9018 9.98946 20.5369 9.7496 20.125 9.64371ZM4.79167 6.70833C4.28333 6.70833 3.79582 6.91027 3.43638 7.26971C3.07693 7.62916 2.875 8.11667 2.875 8.625V14.375C2.875 14.8833 3.07693 15.3708 3.43638 15.7303C3.79582 16.0897 4.28333 16.2917 4.79167 16.2917H5.75L6.70833 21.0833H8.625V6.70833H4.79167Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Pemasaran Digital</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <g opacity="0.7">
                                <path d="M9.33452 4.66675H18.6679V6.99658H21.0012V4.66675C21.6198 4.66706 22.213 4.91303 22.6504 5.35058C23.0877 5.78813 23.3334 6.38145 23.3334 7.00008V21.0001C23.3334 21.6187 23.0877 22.212 22.6504 22.6496C22.213 23.0871 21.6198 23.3331 21.0012 23.3334V20.9966H18.6679V23.3334H9.33452V20.9966H7.00119V23.3334C6.38235 23.3334 5.78769 23.0876 5.3501 22.65C4.91252 22.2124 4.66669 21.6189 4.66669 21.0001V7.00008C4.66669 6.38124 4.91252 5.78775 5.3501 5.35017C5.78769 4.91258 6.38118 4.66675 7.00002 4.66675L7.00119 6.99658H9.33452V4.66675ZM11.6667 17.5001L16.9167 14.0001L11.6667 10.5001V17.5001ZM21.0012 18.6632V15.1632H18.6679V18.6632H21.0012ZM21.0012 12.8299V9.32992H18.6679V12.8299H21.0012ZM9.33452 18.6632V15.1632H7.00119V18.6632H9.33452ZM9.33452 12.8299V9.32992H7.00119V12.8299H9.33452Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Vidio dan Animasi</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g opacity="0.7">
                                <path d="M21 17V10.1L12 15L1 9L12 3L23 9V17H21ZM12 21L5 17.2V12.2L12 16L19 12.2V17.2L12 21Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Tutor & Pengajar
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <g opacity="0.7">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5498 1.198H11.4502C10.5886 1.198 9.87084 1.198 9.30159 1.27466C8.69976 1.35516 8.15638 1.53341 7.72034 1.96946C7.28334 2.40646 7.10509 2.94983 7.02459 3.55071C6.96996 3.95991 6.95367 4.93646 6.94984 5.77404C5.01209 5.83825 3.84771 6.06441 3.03984 6.87325C1.91667 7.99546 1.91667 9.80287 1.91667 13.4167C1.91667 17.0306 1.91667 18.838 3.03984 19.9602C4.16205 21.0834 5.96946 21.0834 9.58334 21.0834H13.4167C17.0305 21.0834 18.838 21.0834 19.9602 19.9602C21.0833 18.838 21.0833 17.0306 21.0833 13.4167C21.0833 9.80287 21.0833 7.99546 19.9602 6.87325C19.1523 6.06441 17.9879 5.83825 16.0502 5.775C16.0463 4.93646 16.031 3.95991 15.9754 3.55166C15.8949 2.94983 15.7167 2.40646 15.2797 1.97041C14.8436 1.53341 14.3003 1.35516 13.6984 1.27466C13.1292 1.198 12.4104 1.198 11.5498 1.198ZM14.6127 5.752C14.6079 4.94029 14.5945 4.06725 14.5513 3.74237C14.491 3.30058 14.3884 3.11083 14.2638 2.98625C14.1393 2.86166 13.9495 2.75912 13.5068 2.69875C13.0448 2.63741 12.4238 2.6355 11.5 2.6355C10.5762 2.6355 9.95517 2.63741 9.4923 2.69971C9.0505 2.75912 8.86075 2.86166 8.73617 2.98721C8.61159 3.11179 8.50905 3.30058 8.44867 3.74237C8.40555 4.06821 8.39117 4.94029 8.38734 5.752C8.76205 5.75008 9.16167 5.75008 9.58334 5.75008H13.4167C13.8393 5.75008 14.238 5.75008 14.6127 5.752ZM11.5 8.86466C11.6906 8.86466 11.8734 8.94039 12.0082 9.07518C12.143 9.20997 12.2188 9.39279 12.2188 9.58341V9.593C13.2624 9.85558 14.1354 10.6788 14.1354 11.8192C14.1354 12.0098 14.0597 12.1926 13.9249 12.3274C13.7901 12.4622 13.6073 12.538 13.4167 12.538C13.226 12.538 13.0432 12.4622 12.9084 12.3274C12.7736 12.1926 12.6979 12.0098 12.6979 11.8192C12.6979 11.4512 12.2897 10.9414 11.5 10.9414C10.7103 10.9414 10.3021 11.4512 10.3021 11.8192C10.3021 12.1872 10.7103 12.698 11.5 12.698C12.8273 12.698 14.1354 13.618 14.1354 15.0143C14.1354 16.1547 13.2624 16.977 12.2188 17.2405V17.2501C12.2188 17.4407 12.143 17.6235 12.0082 17.7583C11.8734 17.8931 11.6906 17.9688 11.5 17.9688C11.3094 17.9688 11.1266 17.8931 10.9918 17.7583C10.857 17.6235 10.7813 17.4407 10.7813 17.2501V17.2405C9.73763 16.9779 8.86459 16.1547 8.86459 15.0143C8.86459 14.8237 8.94031 14.6408 9.07511 14.5061C9.2099 14.3713 9.39271 14.2955 9.58334 14.2955C9.77396 14.2955 9.95678 14.3713 10.0916 14.5061C10.2264 14.6408 10.3021 14.8237 10.3021 15.0143C10.3021 15.3823 10.7103 15.8921 11.5 15.8921C12.2897 15.8921 12.6979 15.3823 12.6979 15.0143C12.6979 14.6463 12.2897 14.1355 11.5 14.1355C10.1727 14.1355 8.86459 13.2155 8.86459 11.8192C8.86459 10.6788 9.73763 9.85558 10.7813 9.593V9.58341C10.7813 9.39279 10.857 9.20997 10.9918 9.07518C11.1266 8.94039 11.3094 8.86466 11.5 8.86466Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Bisnis & Akutansi</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <g opacity="0.7">
                                <path d="M17.25 13.1428C17.9036 13.1428 18.5304 13.4025 18.9925 13.8646C19.4547 14.3267 19.7143 14.9535 19.7143 15.6071V16.1944C19.7143 19.1327 16.2561 21.3571 11.5 21.3571C6.74394 21.3571 3.28572 19.2485 3.28572 16.1944V15.6071C3.28572 14.9535 3.54535 14.3267 4.00749 13.8646C4.46964 13.4025 5.09644 13.1428 5.75001 13.1428H17.25ZM11.5 1.64282C12.1472 1.64282 12.7881 1.7703 13.3861 2.01799C13.9841 2.26567 14.5274 2.62871 14.985 3.08637C15.4427 3.54403 15.8057 4.08735 16.0534 4.68531C16.3011 5.28327 16.4286 5.92416 16.4286 6.57139C16.4286 7.21862 16.3011 7.85951 16.0534 8.45748C15.8057 9.05544 15.4427 9.59876 14.985 10.0564C14.5274 10.5141 13.9841 10.8771 13.3861 11.1248C12.7881 11.3725 12.1472 11.5 11.5 11.5C10.1929 11.5 8.93927 10.9807 8.01498 10.0564C7.09069 9.13213 6.57144 7.87853 6.57144 6.57139C6.57144 5.26426 7.09069 4.01065 8.01498 3.08637C8.93927 2.16208 10.1929 1.64282 11.5 1.64282Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Jasa Konsultasi</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g opacity="0.7">
                                <path d="M6.99 3.08007L18.01 1.08007C18.56 1.00007 19 1.53007 19 2.08007V14.5001C19 16.4401 17.43 18.0001 15.5 18.0001C13.57 18.0001 12 16.4401 12 14.5001C12 12.5701 13.57 11.0001 15.5 11.0001C16.04 11.0001 16.54 11.1401 17 11.3501V5.08007L8 7.08007V16.0001C7.76 17.7001 6.26 19.0001 4.5 19.0001C2.57 19.0001 1 17.4401 1 15.5001C1 13.5701 2.57 12.0001 4.5 12.0001C5.04 12.0001 5.54 12.1401 6 12.3501V4.08007C6 3.53007 6.44 3.17006 6.99 3.08007Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Musik & Audio</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <g opacity="0.7">
                                <path d="M3.30001 2.73783C3.29841 2.59196 3.23893 2.4527 3.13465 2.35069C3.03037 2.24868 2.88983 2.19228 2.74396 2.19388C2.5981 2.19549 2.45884 2.25497 2.35683 2.35925C2.25482 2.46353 2.19841 2.60406 2.20002 2.74993V19.2499C2.20002 19.3958 2.25796 19.5357 2.36111 19.6388C2.46425 19.742 2.60415 19.7999 2.75001 19.7999H19.25C19.3959 19.7999 19.5358 19.742 19.6389 19.6388C19.7421 19.5357 19.8 19.3958 19.8 19.2499C19.8 19.1041 19.7421 18.9642 19.6389 18.861C19.5358 18.7579 19.3959 18.6999 19.25 18.6999H3.30001V2.73783ZM17.6 17.5999V6.04993C17.5999 5.94644 17.5705 5.84509 17.5154 5.75752C17.4602 5.66996 17.3814 5.59974 17.2881 5.55493C17.1948 5.51013 17.0908 5.49255 16.988 5.50422C16.8851 5.5159 16.7877 5.55635 16.7068 5.62093L11.4983 9.78663L7.97282 7.77253C7.89804 7.72987 7.8143 7.70536 7.72833 7.70096C7.64235 7.69657 7.55655 7.71242 7.47781 7.74723L4.40001 9.11453V17.5999H17.6Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Data & Riset</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <g opacity="0.7">
                                <path d="M20.125 18.2083V4.79167C20.125 3.7375 19.2625 2.875 18.2083 2.875H4.79167C3.7375 2.875 2.875 3.7375 2.875 4.79167V18.2083C2.875 19.2625 3.7375 20.125 4.79167 20.125H18.2083C19.2625 20.125 20.125 19.2625 20.125 18.2083ZM8.14583 12.9375L10.5417 15.8221L13.8958 11.5L18.2083 17.25H4.79167L8.14583 12.9375Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Editing Foto</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-6 lg:w-[90%] w-[95%] md:ml-1 lg:ml-3 sm:mt-2 mt-6">
                <div class="bg-[#002687] bg-opacity-10 rounded-lg py-6 sm:py-3">
                    <div class="flex items-center gap-3 lg:ml-10 md:ml-7 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <g opacity="0.7">
                                <path d="M3.83334 20.1251C3.30626 20.1251 2.8552 19.9376 2.48017 19.5625C2.10514 19.1875 1.91731 18.7361 1.91667 18.2084V7.66675C1.91667 7.13967 2.10451 6.68861 2.48017 6.31358C2.85584 5.93855 3.30689 5.75072 3.83334 5.75008H7.66667V3.83341C7.66667 3.30633 7.85451 2.85528 8.23017 2.48025C8.60584 2.10522 9.05689 1.91739 9.58334 1.91675H13.4167C13.9438 1.91675 14.3951 2.10458 14.7708 2.48025C15.1465 2.85591 15.334 3.30697 15.3333 3.83341V5.75008H19.1667C19.6938 5.75008 20.1451 5.93791 20.5208 6.31358C20.8965 6.68925 21.084 7.1403 21.0833 7.66675V18.2084C21.0833 18.7355 20.8958 19.1869 20.5208 19.5625C20.1458 19.9382 19.6944 20.1257 19.1667 20.1251H3.83334ZM9.58334 5.75008H13.4167V3.83341H9.58334V5.75008Z" fill="#020179" />
                            </g>
                        </svg>
                        <p class="text-primary-50 text-lg font-semibold sm:text-[10px]">Pekerjaan Lainnya</p>
                    </div>
                </div>
            </div>
        </div>
</main>

<main>
    <div class="mt-28">
        <div class="flex items-center justify-center gap-4">
            <button class="text-light-70 text-lg transition-all duration-300 ease-in-out" id="btnFreelancer">Sebagai
                <span class="font-semibold">Freelancer</span></button>
            <div class="border-[1px] border-light-70 h-5"></div>
            <button class="text-primary-50 text-lg transition-all duration-300 ease-in-out" id="btnOwner">Sebagai <span class="font-semibold">Project
                    Owner</span></button>
        </div>
    </div>
    <div class="container mx-auto hidden" id="freelancer">

    </div>
    <div class="container mx-auto mt-7" id="owner">
        <h1 class="text-center text-4xl">Apa <span class="font-semibold">Yang Bisa</span> Kamu Lakukan Di <span class="font-semibold">ProjectHub.id?</span></h1>
        <div class="grid grid-cols-12 mt-16">
            <div class="col-span-6 lg:block hidden">
                <img src="{{asset('assets/img_index/asset/landingPage/mainpeople1.png')}}" alt="Project Owner" class="mx-auto">
            </div>
            <div class="lg:col-span-6 col-span-12">
                <div>
                    <div class="flex justify-end opacity-50 active:opacity-100 active:justify-center active:drop-shadow-md transition-all duration-300 ease-in-out">
                        <div class="bg-white w-fit p-6 rounded-xl">
                            <div class="flex items-center justify-center gap-5">
                                <div class="bg-[#E6EAF3] p-4 sm:px-5 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M26.3333 0.833496H3.66667C2.10834 0.833496 0.833336 2.1085 0.833336 3.66683V29.1668L6.5 23.5002H26.3333C27.8917 23.5002 29.1667 22.2252 29.1667 20.6668V3.66683C29.1667 2.1085 27.8917 0.833496 26.3333 0.833496ZM6.5 17.8335V14.3343L16.2467 4.58766C16.53 4.30433 16.9692 4.30433 17.2525 4.58766L19.76 7.09516C20.0433 7.3785 20.0433 7.81766 19.76 8.101L9.99917 17.8335H6.5ZM22.0833 17.8335H12.875L15.7083 15.0002H22.0833C22.8625 15.0002 23.5 15.6377 23.5 16.4168C23.5 17.196 22.8625 17.8335 22.0833 17.8335Z" fill="#020179" />
                                    </svg></div>
                                <div>
                                    <h1 class="text-light-90 text-lg font-semibold">Beri Review dan Rating Ke Freelancer
                                    </h1>
                                    <p class="text-[12px] text-light-90 mt-3">Kamu bisa memberikan rating dan review
                                        kepada
                                        freelancer <br> yang mengerjakan projek
                                        kamu sesuai dengan kinerja dan <br> hasil dari pekerjaan mereka. Rating dan
                                        review
                                        yang
                                        kamu <br> berikan nantinya akan muncul di profile freelancer tersebut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
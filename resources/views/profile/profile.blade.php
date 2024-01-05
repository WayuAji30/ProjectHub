@extends('templates.index_layout')
@section('content')

<div id="hover"></div>
<div id="jelajahiOverlay"></div>
<div id="profileOverlay"></div>
<div class="modal-overlay" id="modalOverlay"></div>

<div class=" mt-[155px]">
    <div class="relative">
        <img src="{{asset('assets/img_index/asset/profile/bg-profile.svg')}}" alt="" class="w-full">
    </div>
</div>

<main id="profil-me">
    <div class="">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 relative -mt-20">
                <div class="lg:col-span-5 col-span-12">
                    <div class="flex justify-end">
                        <div class="bg-white rounded-xl shadow-lg w-[425px]">
                            <div class="relative mt-12">
                                <img src="{{asset('assets/img_index/asset/profile/pp1.png')}}" alt="" class="mx-auto">
                                <input type="file" id="upload-profile" class="hidden">
                                <label for="upload-profile"
                                    class="absolute bottom-0 right-[150px] bg-white p-1 rounded-full cursor-pointer">
                                    <div
                                        class="bg-primary-50 p-2 rounded-full hover:bg-primary-30 transition-all duration-200 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9 13.125C9.9375 13.125 10.7345 12.797 11.391 12.141C12.0475 11.485 12.3755 10.688 12.375 9.75C12.375 8.8125 12.047 8.01575 11.391 7.35975C10.735 6.70375 9.938 6.3755 9 6.375C8.0625 6.375 7.26575 6.70325 6.60975 7.35975C5.95375 8.01625 5.6255 8.813 5.625 9.75C5.625 10.6875 5.95325 11.4845 6.60975 12.141C7.26625 12.7975 8.063 13.1255 9 13.125ZM9 11.625C8.475 11.625 8.03125 11.4437 7.66875 11.0812C7.30625 10.7188 7.125 10.275 7.125 9.75C7.125 9.225 7.30625 8.78125 7.66875 8.41875C8.03125 8.05625 8.475 7.875 9 7.875C9.525 7.875 9.96875 8.05625 10.3312 8.41875C10.6937 8.78125 10.875 9.225 10.875 9.75C10.875 10.275 10.6937 10.7188 10.3312 11.0812C9.96875 11.4437 9.525 11.625 9 11.625ZM3 15.75C2.5875 15.75 2.2345 15.6033 1.941 15.3097C1.6475 15.0162 1.5005 14.663 1.5 14.25V5.25C1.5 4.8375 1.647 4.4845 1.941 4.191C2.235 3.8975 2.588 3.7505 3 3.75H5.3625L6.75 2.25H11.25L12.6375 3.75H15C15.4125 3.75 15.7657 3.897 16.0597 4.191C16.3538 4.485 16.5005 4.838 16.5 5.25V14.25C16.5 14.6625 16.3533 15.0157 16.0597 15.3097C15.7662 15.6038 15.413 15.7505 15 15.75H3Z"
                                                fill="white" />
                                        </svg>
                                </label>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h1 class="font-semibold text-[28px] text-dark-70">Pororo</h1>
                            <h2 class="text-light-90">Bogor, Jawa Barat</h2>
                        </div>
                        <div class="mx-10 mt-10">
                            <div class="border-y-2 border-light-30">
                                <div class="flex items-center justify-between mt-4 mx-1">
                                    <p class="flex items-center gap-2 text-dark-70 text-base font-medium"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M10.95 15.55L16.6 9.9L15.175 8.475L10.95 12.7L8.85 10.6L7.425 12.025L10.95 15.55ZM12 22C9.68333 21.4167 7.771 20.0873 6.263 18.012C4.755 15.9367 4.00067 13.6327 4 11.1V5L12 2L20 5V11.1C20 13.6333 19.246 15.9377 17.738 18.013C16.23 20.0883 14.3173 21.4173 12 22Z"
                                                fill="#020179" />
                                        </svg>Projek Diselesaikan</p>
                                    <p class="font-medium text-primary-50 text-base">250</p>
                                </div>
                                <div class="border-t-2 border-light-30 mt-4"></div>
                                <div class="flex items-center justify-between mt-4 mx-1">
                                    <p class="flex items-center gap-[14px] text-dark-70 text-base font-medium"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                            viewBox="0 0 18 16" fill="none">
                                            <g clip-path="url(#clip0_802_1526)">
                                                <path
                                                    d="M12.9219 7.42187C12.0406 7.57187 11.1031 7.30937 10.4219 6.62812L9.23125 5.4375C8.7625 4.96875 8.5 4.3375 8.5 3.675V3.29687L6.00938 1.9375C5.84375 1.84687 5.74062 1.66875 5.75 1.47812C5.75938 1.2875 5.87187 1.11875 6.04688 1.04062L7.52187 0.384375C8.09688 0.13125 8.71875 0 9.35 0H9.91562C11.0625 0 12.1656 0.4375 13 1.22187L14.3938 2.53437C15.15 3.24687 15.4313 4.275 15.225 5.22187L15.7188 5.71875L15.9688 5.46875C16.2625 5.175 16.7375 5.175 17.0281 5.46875L17.7781 6.21875C18.0719 6.5125 18.0719 6.9875 17.7781 7.27812L15.0281 10.0281C14.7344 10.3219 14.2594 10.3219 13.9688 10.0281L13.2188 9.27812C12.925 8.98437 12.925 8.50937 13.2188 8.21875L13.4688 7.96875L12.9219 7.42187ZM0.85625 11.7844L8.15312 5.70625C8.2625 5.85938 8.3875 6.00625 8.52188 6.14375L9.7125 7.33437C9.9 7.52187 10.1 7.68437 10.3125 7.825L4.21562 15.1437C3.7625 15.6875 3.09063 16 2.38438 16C1.06563 16 0 14.9312 0 13.6156C0 12.9094 0.315625 12.2375 0.85625 11.7844Z"
                                                    fill="#020179" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_802_1526">
                                                    <rect width="18" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>Projek Dibuat</p>
                                    <p class="font-medium text-primary-50 text-base">0</p>
                                </div>
                                <div class="border-t-2 border-light-30 mt-4"></div>
                                <div class="flex items-center justify-between my-4 mx-1">
                                    <p class="flex items-center gap-3 text-dark-70 text-base font-medium"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M5.4165 17.5H2.49984C2.0415 17.5 1.6665 17.125 1.6665 16.6667V8.33333C1.6665 7.875 2.0415 7.5 2.49984 7.5H5.4165C5.87484 7.5 6.24984 7.875 6.24984 8.33333V16.6667C6.24984 17.125 5.87484 17.5 5.4165 17.5ZM11.4582 2.5H8.5415C8.08317 2.5 7.70817 2.875 7.70817 3.33333V16.6667C7.70817 17.125 8.08317 17.5 8.5415 17.5H11.4582C11.9165 17.5 12.2915 17.125 12.2915 16.6667V3.33333C12.2915 2.875 11.9165 2.5 11.4582 2.5ZM17.4998 9.16667H14.5832C14.1248 9.16667 13.7498 9.54167 13.7498 10V16.6667C13.7498 17.125 14.1248 17.5 14.5832 17.5H17.4998C17.9582 17.5 18.3332 17.125 18.3332 16.6667V10C18.3332 9.54167 17.9582 9.16667 17.4998 9.16667Z"
                                                fill="#020179" />
                                        </svg>Rekor Leaderboard</p>
                                    <p class="font-medium text-primary-50 text-base">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="mx-10 mt-6 mb-12">
                            <div class="flex items-center justify-between">
                                <a href="" class="group">
                                    <div
                                        class="bg-light-30 rounded-full p-3 group-hover:bg-primary-50 group-hover:bg-opacity-10 transition-all duration-200 ease-linear">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 26 26" fill="none">
                                            <path class="group-hover:fill-primary-50"
                                                d="M8.06341 5.7959C8.75566 5.7959 9.39591 5.85007 9.98091 6.0104C10.567 6.11765 11.0469 6.33215 11.4727 6.59973C11.8995 6.86732 12.2191 7.24323 12.4314 7.72532C12.6448 8.2074 12.7521 8.79782 12.7521 9.44023C12.7521 10.191 12.5917 10.8334 12.2191 11.3155C11.8995 11.7986 11.3665 12.2266 10.7273 12.5483C11.633 12.817 12.3252 13.2991 12.7521 13.9415C13.1778 14.585 13.4443 15.3888 13.4443 16.2999C13.4443 17.0506 13.284 17.6931 13.0175 18.2293C12.7521 18.7656 12.3252 19.2476 11.8453 19.5694C11.324 19.9143 10.7477 20.1678 10.1412 20.3191C9.50208 20.4805 8.86291 20.5877 8.22375 20.5877H1.0835V5.7959H8.06341ZM7.63658 11.7976C8.22266 11.7976 8.70258 11.6372 9.07525 11.3696C9.44791 11.1021 9.60825 10.6189 9.60825 10.0296C9.60825 9.70782 9.55408 9.38607 9.44791 9.17265C9.34175 8.95815 9.18141 8.79673 8.96908 8.6364C8.75188 8.51467 8.51841 8.42456 8.27575 8.36882C8.00925 8.31465 7.74383 8.31465 7.42316 8.31465H4.3335V11.7986L7.63658 11.7976ZM7.79691 18.1221C8.1165 18.1221 8.43608 18.0679 8.70258 18.0148C8.96908 17.9606 9.23558 17.8545 9.44791 17.6931C9.665 17.5362 9.84661 17.3354 9.98091 17.1037C10.0871 16.8361 10.1943 16.5144 10.1943 16.1396C10.1943 15.3888 9.98091 14.8526 9.55516 14.4777C9.12833 14.156 8.54225 13.9956 7.85 13.9956H4.3335V18.1231L7.79691 18.1221ZM18.0799 18.0679C18.5057 18.4969 19.1448 18.7114 19.9974 18.7114C20.5835 18.7114 21.1165 18.5511 21.5422 18.2835C21.9691 17.9617 22.2356 17.64 22.3417 17.3182H24.9526C24.5257 18.6041 23.8866 19.5152 23.0351 20.1046C22.1814 20.6408 21.1696 20.9626 19.9443 20.9626C19.1604 20.965 18.383 20.8194 17.6531 20.5336C16.9962 20.2872 16.4105 19.8823 15.9479 19.3549C15.4532 18.8615 15.0874 18.254 14.883 17.5858C14.6165 16.8892 14.5092 16.1396 14.5092 15.2816C14.5092 14.4777 14.6165 13.7281 14.883 13.0304C15.1396 12.3587 15.5191 11.7408 16.0021 11.2082C16.4809 10.7261 17.067 10.2982 17.7062 10.0296C18.4176 9.74363 19.1776 9.59796 19.9443 9.60057C20.85 9.60057 21.6495 9.76198 22.3417 10.1368C23.0351 10.5116 23.567 10.9406 23.9927 11.5841C24.4196 12.1735 24.7402 12.8701 24.9526 13.6208C25.0587 14.3705 25.1118 15.1212 25.0587 15.9781H17.3335C17.3335 16.8361 17.6531 17.64 18.0799 18.069M21.4361 12.4421C21.0634 12.0673 20.4773 11.8528 19.784 11.8528C19.3775 11.8467 18.9754 11.9385 18.6118 12.1204C18.2922 12.2818 18.0799 12.4963 17.8665 12.7108C17.6704 12.918 17.5406 13.1791 17.4938 13.4605C17.4397 13.7291 17.3866 13.9426 17.3866 14.1571H22.1814C22.0752 13.3532 21.8087 12.8181 21.4361 12.4421ZM16.7474 6.81423H22.7144V8.26157H16.7485L16.7474 6.81423Z"
                                                fill="#999999" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="group">
                                    <div
                                        class="bg-light-30 rounded-full p-3 group-hover:bg-primary-50 group-hover:bg-opacity-10 transition-all duration-200 ease-linear">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 25 25" fill="none">
                                            <path class="group-hover:fill-primary-50"
                                                d="M7.22917 5.2084C7.22889 5.76093 7.00913 6.29073 6.61824 6.68123C6.22734 7.07174 5.69733 7.29097 5.14479 7.29069C4.59226 7.29041 4.06246 7.07066 3.67196 6.67976C3.28145 6.28886 3.06222 5.75885 3.0625 5.20632C3.06278 4.65378 3.28253 4.12399 3.67343 3.73348C4.06433 3.34298 4.59434 3.12375 5.14688 3.12402C5.69941 3.1243 6.2292 3.34406 6.61971 3.73495C7.01021 4.12585 7.22944 4.65586 7.22917 5.2084ZM7.29167 8.8334H3.125V21.8751H7.29167V8.8334ZM13.875 8.8334H9.72917V21.8751H13.8333V15.0313C13.8333 11.2188 18.8021 10.8646 18.8021 15.0313V21.8751H22.9167V13.6146C22.9167 7.18756 15.5625 7.42715 13.8333 10.5834L13.875 8.8334Z"
                                                fill="#999999" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="group">
                                    <div
                                        class="bg-light-30 rounded-full p-3 group-hover:bg-primary-50 group-hover:bg-opacity-10 transition-all duration-200 ease-linear">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 26 26" fill="none">
                                            <g clip-path="url(#clip0_806_1546)">
                                                <path class="group-hover:fill-primary-50"
                                                    d="M7.60942 2.50234C8.42296 2.77793 9.19691 3.1589 9.9115 3.63551C10.9207 3.37758 11.9584 3.248 13.0001 3.24984C14.0758 3.24984 15.1137 3.38418 16.0865 3.63443C16.8008 3.15828 17.5744 2.77768 18.3875 2.50234C19.1426 2.24559 20.2183 1.82959 20.8575 2.53701C21.2908 3.01801 21.3992 3.82401 21.4761 4.43934C21.5628 5.12618 21.5833 6.02101 21.3558 6.90934C22.2258 8.03276 22.7501 9.37284 22.7501 10.8332C22.7501 13.0453 21.5519 14.9661 19.7785 16.2964C18.925 16.9286 17.9784 17.4242 16.9727 17.7654C17.2045 18.2963 17.3334 18.8834 17.3334 19.4998V22.7498C17.3334 23.0372 17.2193 23.3127 17.0161 23.5159C16.813 23.719 16.5374 23.8332 16.2501 23.8332H9.75009C9.46277 23.8332 9.18722 23.719 8.98405 23.5159C8.78089 23.3127 8.66675 23.0372 8.66675 22.7498V21.6763C7.63217 21.803 6.76442 21.6903 6.02667 21.3773C5.25534 21.0501 4.718 20.5431 4.31392 20.0578C3.93042 19.5984 3.51225 18.5628 2.90775 18.3613C2.77274 18.3163 2.64791 18.2452 2.54038 18.152C2.43285 18.0588 2.34473 17.9453 2.28105 17.8181C2.15245 17.5611 2.13121 17.2635 2.222 16.9908C2.31279 16.7182 2.50818 16.4927 2.76519 16.3641C3.02219 16.2355 3.31975 16.2143 3.59242 16.3051C4.31392 16.5456 4.78409 17.0656 5.10584 17.4838C5.62584 18.1554 6.04834 19.0329 6.87167 19.3828C7.21075 19.5269 7.708 19.6212 8.48584 19.515L8.66675 19.4782C8.66882 18.8886 8.79159 18.3057 9.0275 17.7654C8.02172 17.4242 7.07513 16.9286 6.22167 16.2964C4.44825 14.9661 3.25009 13.0464 3.25009 10.8332C3.25009 9.37501 3.77334 8.03601 4.64109 6.91368C4.41359 6.02534 4.43309 5.12834 4.51975 4.44043L4.52517 4.39926C4.60425 3.76876 4.69634 3.02668 5.13834 2.53701C5.7775 1.82959 6.85434 2.24668 7.60834 2.50343"
                                                    fill="#999999" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_806_1546">
                                                    <rect width="26" height="26" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="group">
                                    <div
                                        class="bg-light-30 rounded-full p-3 group-hover:bg-primary-50 group-hover:bg-opacity-10 transition-all duration-200 ease-linear">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path class="group-hover:fill-primary-50"
                                                d="M12 0c-6.628 0-12 5.373-12 12s5.372 12 12 12 12-5.373 12-12-5.372-12-12-12zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073-.244-.563-.497-1.125-.767-1.68 2.31-1 4.165-2.358 5.548-4.082 1.35 1.594 2.197 3.619 2.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68-1.016-1.861-2.178-3.676-3.488-5.438.779-.197 1.591-.314 2.431-.314 2.275 0 4.368.779 6.043 2.072zm-10.516-.993c1.331 1.742 2.511 3.538 3.537 5.381-2.43.715-5.331 1.082-8.684 1.105.692-2.835 2.601-5.193 5.147-6.486zm-5.44 8.834l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48-1.432-1.719-2.296-3.927-2.296-6.334zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027.928 2.42 1.609 4.91 2.043 7.46-3.349 1.291-6.953.666-9.641-1.433zm11.586.43c-.438-2.353-1.08-4.653-1.92-6.897 1.876-.265 3.94-.196 6.199.196-.437 2.786-2.028 5.192-4.279 6.701"
                                                fill="#999999" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7 col-span-12 ml-6">
                <div>
                    <div class="bg-white rounded-xl shadow-lg w-[650px]">
                        <div class="mx-10">
                            <div class="flex items-center justify-between">
                                <button
                                    class="btn-umum font-semibold text-base text-light-70 pb-3 pt-6 border-b-4 border-primary-50 px-5">Umum</button>
                                <button
                                    class="btn-dokumen font-semibold text-light-70 border-b-4 pb-3 pt-6 px-5">Dokumen</button>
                                <button class="btn-rating font-semibold text-light-70 border-b-4 pb-3 pt-6 px-5">Rating
                                    &
                                    Ulasan</button>
                                <button
                                    class="btn-riwayat font-semibold text-light-70 border-b-4 pb-3 pt-6 px-5">Riwayat</button>
                            </div>
                        </div>
                        <div class="border-t-2 border-light-30 -mt-[2px]"></div>
                        <div class="umum">
                            <div class="mx-10 mt-10">
                                <form action="">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-dark-70 font-medium">Nama Depan <span
                                                    class="text-[#FF0000]">*</span></p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                        <div>
                                            <p class="text-dark-70 font-medium">Nama Belakang <span
                                                    class="text-[#FF0000]">*</span></p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-5">
                                        <div>
                                            <p class="text-dark-70 font-medium">Kota <span
                                                    class="text-[#FF0000]">*</span>
                                            </p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                        <div>
                                            <p class="text-dark-70 font-medium">Provinsi <span
                                                    class="text-[#FF0000]">*</span></p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <p class="text-dark-70 font-medium">Tentang Saya <span
                                                class="text-[#FF0000]">*</span></p>
                                        <textarea name="" id="" cols="" rows="4"
                                            class="border-2 border-light-50 rounded-md py-3 px-3 mt-2 w-full focus:outline-primary-50"></textarea>
                                        <p class="text-light-70 text-xs mt-1 font-medium"><span
                                                class="text-[#FF0000]">*</span> Masukan maksimal 100 kata</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-5">
                                        <div>
                                            <p class="text-dark-70 font-medium">URL Behance (Opsional)
                                            </p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                        <div>
                                            <p class="text-dark-70 font-medium">URL Linkedin (Opsional)</p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-5">
                                        <div>
                                            <p class="text-dark-70 font-medium">URL Github (Opsional)
                                            </p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                        <div>
                                            <p class="text-dark-70 font-medium">URL Dribble (Opsional)</p>
                                            <input type="text"
                                                class="border-2 border-light-50 rounded-md w-[270px] py-3 px-3 mt-2 focus:outline-primary-50">
                                        </div>
                                    </div>
                                    <button
                                        class="font-semibold text-base text-white bg-primary-50 rounded-lg w-full py-4 mt-12 mb-20 hover:bg-primary-70">Simpan
                                        Perubahan</button>
                                </form>
                            </div>
                        </div>
                        <div class="dokumen hidden">
                            <div>
                                <div class="mx-10 mt-10">
                                    <form action="">
                                        <p class="text-base font-semibold text-dark-70">CV (Curriculum Vitae)</p>
                                        <input type="file" id="cv" class="hidden">
                                        <label for="cv"
                                            class="flex flex-col items-center border-2 border-dashed border-light-90 rounded-lg py-10 mt-4 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66"
                                                viewBox="0 0 66 66" fill="none">
                                                <path
                                                    d="M30.25 52.25H35.75V40.7687L40.15 45.1687L44 41.25L33 30.25L22 41.25L25.9188 45.1L30.25 40.7687V52.25ZM11 60.5V5.5H38.5L55 22V60.5H11ZM35.75 24.75H49.5L35.75 11V24.75Z"
                                                    fill="#CCCCCC" />
                                            </svg>
                                            <p class="text-light-50 mt-2">Tarik & lepaskan filemu atau <span
                                                    class="text-primary-50 font-semibold underline hover:text-primary-30">Pilih
                                                    sendiri</span>
                                            </p>
                                        </label>
                                        <p class="text-base font-semibold text-dark-70 mt-8">Portofolio</p>
                                        <input type="file" id="cv" class="hidden">
                                        <label for="cv"
                                            class="flex flex-col items-center border-2 border-dashed border-light-90 rounded-lg py-10 mt-4 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66"
                                                viewBox="0 0 66 66" fill="none">
                                                <path
                                                    d="M30.25 52.25H35.75V40.7687L40.15 45.1687L44 41.25L33 30.25L22 41.25L25.9188 45.1L30.25 40.7687V52.25ZM11 60.5V5.5H38.5L55 22V60.5H11ZM35.75 24.75H49.5L35.75 11V24.75Z"
                                                    fill="#CCCCCC" />
                                            </svg>
                                            <p class="text-light-50 mt-2">Tarik & lepaskan filemu atau <span
                                                    class="text-primary-50 font-semibold underline hover:text-primary-30">Pilih
                                                    sendiri</span>
                                            </p>
                                        </label>
                                        <div class="flex items-center justify-between mt-4">
                                            <p class="text-light-70 text-[13px]">Format Didukung : PDF</p>
                                            <p class="text-light-70 text-[13px]">Ukuran Maks : 10MB</p>
                                        </div>
                                        <div class="border-t-2 border-light-30 mt-10"></div>
                                        <div class="cvUpload">
                                            <p class="text-dark-70 font-semibold text-base mt-10">CV (Curriculum Vitae)
                                            </p>
                                            <div class="mt-3">
                                                <div
                                                    class="flex items-center justify-between border-2 border-light-70 rounded-xl py-3 px-4 mt-2">
                                                    <div class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M13 9V3.5L18.5 9M6 2C4.89 2 4 2.89 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2H6Z"
                                                                fill="#B3B3B3" />
                                                        </svg>
                                                        <p class="text-base text-light-70">Ferrol 19 detik.mp4</p>
                                                    </div>
                                                    <div class="flex items-center gap-3">
                                                        <div class="bg-light-50 rounded px-2 py-1">
                                                            <p class="text-light-10 font-semibold text-xs">
                                                                <span>2</span>MB
                                                            </p>
                                                        </div>
                                                        <div class="border-[1px] border-[#D9D9D9] h-8"></div>
                                                        <button form="none" class="btn-cv group"
                                                            onclick="hideDiv('cvUpload')"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path class="group-hover:fill-primary-50"
                                                                    d="M12 1.5C6.15 1.5 1.5 6.15 1.5 12C1.5 17.85 6.15 22.5 12 22.5C17.85 22.5 22.5 17.85 22.5 12C22.5 6.15 17.85 1.5 12 1.5ZM16.05 17.25L12 13.2L7.95 17.25L6.75 16.05L10.8 12L6.75 7.95L7.95 6.75L12 10.8L16.05 6.75L17.25 7.95L13.2 12L17.25 16.05L16.05 17.25Z"
                                                                    fill="#CCCCCC" />
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portoUpload">
                                            <p class="text-dark-70 font-semibold text-base mt-5">Portofolio</p>
                                            <div class="mt-3">
                                                <div
                                                    class="flex items-center justify-between border-2 border-light-70 rounded-xl py-3 px-4 mt-2">
                                                    <div class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M13 9V3.5L18.5 9M6 2C4.89 2 4 2.89 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2H6Z"
                                                                fill="#B3B3B3" />
                                                        </svg>
                                                        <p class="text-base text-light-70">Ferrol 19 detik.mp4</p>
                                                    </div>
                                                    <div class="flex items-center gap-3">
                                                        <div class="bg-light-50 rounded px-2 py-1">
                                                            <p class="text-light-10 font-semibold text-xs">
                                                                <span>2</span>MB
                                                            </p>
                                                        </div>
                                                        <div class="border-[1px] border-[#D9D9D9] h-8"></div>
                                                        <button form="none" class="btn-porto group"
                                                            onclick="hideDiv('portoUpload')"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path class="group-hover:fill-primary-50"
                                                                    d="M12 1.5C6.15 1.5 1.5 6.15 1.5 12C1.5 17.85 6.15 22.5 12 22.5C17.85 22.5 22.5 17.85 22.5 12C22.5 6.15 17.85 1.5 12 1.5ZM16.05 17.25L12 13.2L7.95 17.25L6.75 16.05L10.8 12L6.75 7.95L7.95 6.75L12 10.8L16.05 6.75L17.25 7.95L13.2 12L17.25 16.05L16.05 17.25Z"
                                                                    fill="#CCCCCC" />
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="font-semibold text-base text-white bg-primary-50 rounded-lg w-full py-4 mt-12 mb-20 hover:bg-primary-70">Simpan
                                            Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="rating hidden">
                            <div class="mx-10 mt-8 pb-14">
                                <div class="border-2 border-light-70 rounded-lg py-10">
                                    <div class="flex items-center justify-center gap-16">
                                        <div class="text-center">
                                            <p class="text-[80px] text-dark-70 font-bold leading-[90px]">4.5</p>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                        fill="#020179" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                        fill="#020179" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                        fill="#020179" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                        fill="#020179" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M10.0003 13.2708L12.6253 14.875L11.9378 11.875L14.2503 9.875L11.2087 9.60417L10.0003 6.77083V13.2708ZM4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                        fill="#020179" />
                                                </svg>
                                            </div>
                                            <p class="text-light-70 text-base font-medium">Dari <span>145</span> Review
                                            </p>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-3">
                                                <p
                                                    class="flex items-center gap-1 text-base font-semibold text-light-70">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M3.64062 13.75L4.65625 9.35938L1.25 6.40625L5.75 6.01562L7.5 1.875L9.25 6.01562L13.75 6.40625L10.3437 9.35938L11.3594 13.75L7.5 11.4219L3.64062 13.75Z"
                                                            fill="#B3B3B3" />
                                                    </svg> 5
                                                </p>
                                                <progress class="progress bg-light-30 w-56" value="90"
                                                    max="100"></progress>
                                            </div>
                                            <div class="flex items-center gap-3 mt-1">
                                                <p
                                                    class="flex items-center gap-1 text-base font-semibold text-light-70">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M3.64062 13.75L4.65625 9.35938L1.25 6.40625L5.75 6.01562L7.5 1.875L9.25 6.01562L13.75 6.40625L10.3437 9.35938L11.3594 13.75L7.5 11.4219L3.64062 13.75Z"
                                                            fill="#B3B3B3" />
                                                    </svg> 4
                                                </p>
                                                <progress class="progress bg-light-30 w-56" value="70"
                                                    max="100"></progress>
                                            </div>
                                            <div class="flex items-center gap-3 mt-1">
                                                <p
                                                    class="flex items-center gap-1 text-base font-semibold text-light-70">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M3.64062 13.75L4.65625 9.35938L1.25 6.40625L5.75 6.01562L7.5 1.875L9.25 6.01562L13.75 6.40625L10.3437 9.35938L11.3594 13.75L7.5 11.4219L3.64062 13.75Z"
                                                            fill="#B3B3B3" />
                                                    </svg> 3
                                                </p>
                                                <progress class="progress bg-light-30 w-56" value="50"
                                                    max="100"></progress>
                                            </div>
                                            <div class="flex items-center gap-3 mt-1">
                                                <p
                                                    class="flex items-center gap-1 text-base font-semibold text-light-70">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M3.64062 13.75L4.65625 9.35938L1.25 6.40625L5.75 6.01562L7.5 1.875L9.25 6.01562L13.75 6.40625L10.3437 9.35938L11.3594 13.75L7.5 11.4219L3.64062 13.75Z"
                                                            fill="#B3B3B3" />
                                                    </svg> 2
                                                </p>
                                                <progress class="progress bg-light-30 w-56" value="30"
                                                    max="100"></progress>
                                            </div>
                                            <div class="flex items-center gap-4 mt-1">
                                                <p
                                                    class="flex items-center gap-1 text-base font-semibold text-light-70">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M3.64062 13.75L4.65625 9.35938L1.25 6.40625L5.75 6.01562L7.5 1.875L9.25 6.01562L13.75 6.40625L10.3437 9.35938L11.3594 13.75L7.5 11.4219L3.64062 13.75Z"
                                                            fill="#B3B3B3" />
                                                    </svg> 1
                                                </p>
                                                <progress class="progress bg-light-30 w-56" value="10"
                                                    max="100"></progress>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating-1">
                                    <div>
                                        <div class="flex gap-3 mt-10">
                                            <div>
                                                <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt=""
                                                    class="w-72">
                                            </div>
                                            <div>
                                                <p class="font-semibold text-base text-dark-70">Pororo</p>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                </div>
                                                <p class="leading-5 mt-4">Kain batik merupakan produk yang banyak
                                                    digemari
                                                    oleh masyarakat, bagus di desa maupun di kota. Bakal namun, saat
                                                    kini
                                                    banyak kain batik yang kekurangan memperhatikan nilai bahan yang
                                                    dipakai
                                                    hanya sebab alasan untuk meraih untung lebih banyak. Untuk menjaga
                                                    citra
                                                    kain batik, hendaknya dalam proses produksinya tetap memakai bahan
                                                    yang
                                                    bernilai bagus & dikemas dengan kemasan yang luar biasa</p>
                                            </div>
                                        </div>
                                        <div class="border-t-2 border-light-30 mt-8"></div>
                                    </div>
                                    <div>
                                        <div class="flex gap-3 mt-10">
                                            <div>
                                                <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt=""
                                                    class="w-72">
                                            </div>
                                            <div>
                                                <p class="font-semibold text-base text-dark-70">Pororo</p>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                </div>
                                                <p class="leading-5 mt-4">Kain batik merupakan produk yang banyak
                                                    digemari
                                                    oleh masyarakat, bagus di desa maupun di kota. Bakal namun, saat
                                                    kini
                                                    banyak kain batik yang kekurangan memperhatikan nilai bahan yang
                                                    dipakai
                                                    hanya sebab alasan untuk meraih untung lebih banyak. Untuk menjaga
                                                    citra
                                                    kain batik, hendaknya dalam proses produksinya tetap memakai bahan
                                                    yang
                                                    bernilai bagus & dikemas dengan kemasan yang luar biasa</p>
                                            </div>
                                        </div>
                                        <div class="border-t-2 border-light-30 mt-8"></div>
                                    </div>
                                    <div>
                                        <div class="flex gap-3 mt-10">
                                            <div>
                                                <img src="{{asset('assets/img_index/asset/index/profile.png')}}" alt=""
                                                    class="w-72">
                                            </div>
                                            <div>
                                                <p class="font-semibold text-base text-dark-70">Pororo</p>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M4.85449 18.3333L6.20866 12.4792L1.66699 8.54167L7.66699 8.02083L10.0003 2.5L12.3337 8.02083L18.3337 8.54167L13.792 12.4792L15.1462 18.3333L10.0003 15.2292L4.85449 18.3333Z"
                                                            fill="#020179" />
                                                    </svg>
                                                </div>
                                                <p class="leading-5 mt-4">Kain batik merupakan produk yang banyak
                                                    digemari
                                                    oleh masyarakat, bagus di desa maupun di kota. Bakal namun, saat
                                                    kini
                                                    banyak kain batik yang kekurangan memperhatikan nilai bahan yang
                                                    dipakai
                                                    hanya sebab alasan untuk meraih untung lebih banyak. Untuk menjaga
                                                    citra
                                                    kain batik, hendaknya dalam proses produksinya tetap memakai bahan
                                                    yang
                                                    bernilai bagus & dikemas dengan kemasan yang luar biasa</p>
                                            </div>
                                        </div>
                                        <div class="border-t-2 border-light-30 mt-8"></div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mt-7">
                                    <p class="text-base font-medium text-light-50"><span>1</span> dari <span>20</span>
                                        halaman</p>
                                    <div class="flex gap-3">
                                        <button class="border-2 border-light-50 rounded-full p-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M6.52301 9.16645H16.6663V10.8331H6.52301L10.993 15.3031L9.81467 16.4814L3.33301 9.99978L9.81467 3.51811L10.993 4.69645L6.52301 9.16645Z"
                                                    fill="#CCCCCC" />
                                            </svg></button>
                                        <button class="border-2 border-primary-50 rounded-full p-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M13.477 10.8336H3.33366V9.16689H13.477L9.00699 4.69689L10.1853 3.51855L16.667 10.0002L10.1853 16.4819L9.00699 15.3036L13.477 10.8336Z"
                                                    fill="#020179" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="riwayat hidden">
                            <div class="mx-10 mt-10 pb-14">
                                <div>
                                    <div class="border-2 border-light-70 rounded-2xl p-7">
                                        <div class="flex items-center justify-between">
                                            <h4 class="text-2xl text-dark-70">Menerjemahkan naskah <br> kedalam bahasa
                                                inggris</h4>
                                            <div
                                                class="bg-[#DDEEDF] flex items-center gap-2 h-10 px-6 rounded-badge justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7"
                                                    viewBox="0 0 7 7" fill="none">
                                                    <circle opacity="0.7" cx="3.5" cy="3.5" r="3.5" fill="#004A03" />
                                                </svg>
                                                <p class="text-[#004A03] font-semibold">Selesai</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-10 mt-7">
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M9.99967 10.0002C11.8413 10.0002 13.333 8.5085 13.333 6.66683C13.333 4.82516 11.8413 3.3335 9.99967 3.3335C8.15801 3.3335 6.66634 4.82516 6.66634 6.66683C6.66634 8.5085 8.15801 10.0002 9.99967 10.0002ZM9.99967 11.6668C7.77467 11.6668 3.33301 12.7835 3.33301 15.0002V15.8335C3.33301 16.2918 3.70801 16.6668 4.16634 16.6668H15.833C16.2913 16.6668 16.6663 16.2918 16.6663 15.8335V15.0002C16.6663 12.7835 12.2247 11.6668 9.99967 11.6668Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Role</p>
                                                    <p class="text-dark-70 font-medium">Freelancer</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="12" height="14"
                                                        viewBox="0 0 12 14" fill="none">
                                                        <path
                                                            d="M3.33333 8.33399C3.14444 8.33399 2.98622 8.26999 2.85867 8.14199C2.73111 8.01399 2.66711 7.85576 2.66667 7.66732C2.66667 7.47843 2.73067 7.32021 2.85867 7.19265C2.98667 7.0651 3.14489 7.0011 3.33333 7.00065C3.52222 7.00065 3.68067 7.06465 3.80867 7.19265C3.93667 7.32065 4.00044 7.47887 4 7.66732C4 7.85621 3.936 8.01465 3.808 8.14265C3.68 8.27065 3.52178 8.33443 3.33333 8.33399ZM6 8.33399C5.81111 8.33399 5.65289 8.26999 5.52533 8.14199C5.39778 8.01399 5.33378 7.85576 5.33333 7.66732C5.33333 7.47843 5.39733 7.32021 5.52533 7.19265C5.65333 7.0651 5.81156 7.0011 6 7.00065C6.18889 7.00065 6.34733 7.06465 6.47533 7.19265C6.60333 7.32065 6.66711 7.47887 6.66667 7.66732C6.66667 7.85621 6.60267 8.01465 6.47467 8.14265C6.34667 8.27065 6.18844 8.33443 6 8.33399ZM8.66667 8.33399C8.47778 8.33399 8.31956 8.26999 8.192 8.14199C8.06444 8.01399 8.00044 7.85576 8 7.66732C8 7.47843 8.064 7.32021 8.192 7.19265C8.32 7.0651 8.47822 7.0011 8.66667 7.00065C8.85556 7.00065 9.014 7.06465 9.142 7.19265C9.27 7.32065 9.33378 7.47887 9.33333 7.66732C9.33333 7.85621 9.26933 8.01465 9.14133 8.14265C9.01333 8.27065 8.85511 8.33443 8.66667 8.33399ZM1.33333 13.6673C0.966667 13.6673 0.652889 13.5369 0.392 13.276C0.131111 13.0151 0.000444444 12.7011 0 12.334V3.00065C0 2.63398 0.130667 2.32021 0.392 2.05932C0.653333 1.79843 0.967111 1.66776 1.33333 1.66732H2V0.333984H3.33333V1.66732H8.66667V0.333984H10V1.66732H10.6667C11.0333 1.66732 11.3473 1.79798 11.6087 2.05932C11.87 2.32065 12.0004 2.63443 12 3.00065V12.334C12 12.7007 11.8696 13.0147 11.6087 13.276C11.3478 13.5373 11.0338 13.6678 10.6667 13.6673H1.33333ZM1.33333 12.334H10.6667V5.66732H1.33333V12.334Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Tanggal Selesai</p>
                                                    <p class="text-dark-70 font-medium">20 Des 2023</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                        viewBox="0 0 17 17" fill="none">
                                                        <g clip-path="url(#clip0_1128_6905)">
                                                            <path
                                                                d="M7.08333 2.125H2.83333C2.64547 2.125 2.4653 2.19963 2.33247 2.33247C2.19963 2.4653 2.125 2.64547 2.125 2.83333V7.08333C2.125 7.27119 2.19963 7.45136 2.33247 7.5842C2.4653 7.71704 2.64547 7.79167 2.83333 7.79167H7.08333C7.27119 7.79167 7.45136 7.71704 7.5842 7.5842C7.71704 7.45136 7.79167 7.27119 7.79167 7.08333V2.83333C7.79167 2.64547 7.71704 2.4653 7.5842 2.33247C7.45136 2.19963 7.27119 2.125 7.08333 2.125ZM14.1667 2.125H9.91667C9.7288 2.125 9.54864 2.19963 9.4158 2.33247C9.28296 2.4653 9.20833 2.64547 9.20833 2.83333V7.08333C9.20833 7.27119 9.28296 7.45136 9.4158 7.5842C9.54864 7.71704 9.7288 7.79167 9.91667 7.79167H14.1667C14.3545 7.79167 14.5347 7.71704 14.6675 7.5842C14.8004 7.45136 14.875 7.27119 14.875 7.08333V2.83333C14.875 2.64547 14.8004 2.4653 14.6675 2.33247C14.5347 2.19963 14.3545 2.125 14.1667 2.125ZM7.08333 9.20833H2.83333C2.64547 9.20833 2.4653 9.28296 2.33247 9.4158C2.19963 9.54864 2.125 9.7288 2.125 9.91667V14.1667C2.125 14.3545 2.19963 14.5347 2.33247 14.6675C2.4653 14.8004 2.64547 14.875 2.83333 14.875H7.08333C7.27119 14.875 7.45136 14.8004 7.5842 14.6675C7.71704 14.5347 7.79167 14.3545 7.79167 14.1667V9.91667C7.79167 9.7288 7.71704 9.54864 7.5842 9.4158C7.45136 9.28296 7.27119 9.20833 7.08333 9.20833ZM12.0417 9.20833C12.596 9.20833 13.1382 9.37095 13.601 9.67604C14.0639 9.98113 14.427 10.4153 14.6456 10.9247C14.8641 11.4342 14.9284 11.9966 14.8304 12.5422C14.7325 13.0878 14.4767 13.5927 14.0946 13.9944C13.7126 14.3961 13.2211 14.6768 12.681 14.8019C12.141 14.927 11.5761 14.8909 11.0563 14.6981C10.5366 14.5054 10.0848 14.1644 9.75696 13.7174C9.42911 13.2703 9.23959 12.737 9.21187 12.1833L9.20833 12.0417L9.21187 11.9C9.24822 11.174 9.56222 10.4897 10.0889 9.98872C10.6156 9.48772 11.3147 9.20833 12.0417 9.20833Z"
                                                                fill="#B3B3B3" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1128_6905">
                                                                <rect width="17" height="17" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Kategori</p>
                                                    <p class="text-dark-70 font-medium">Desain Grafis</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-11 mt-3">
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M13.333 4.00016H10.6663V2.66683C10.6663 1.92683 10.073 1.3335 9.33301 1.3335H6.66634C5.92634 1.3335 5.33301 1.92683 5.33301 2.66683V4.00016H2.66634C1.92634 4.00016 1.33967 4.5935 1.33967 5.3335L1.33301 12.6668C1.33301 13.4068 1.92634 14.0002 2.66634 14.0002H13.333C14.073 14.0002 14.6663 13.4068 14.6663 12.6668V5.3335C14.6663 4.5935 14.073 4.00016 13.333 4.00016ZM9.33301 4.00016H6.66634V2.66683H9.33301V4.00016Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Project Owner</p>
                                                    <p class="text-dark-70 font-medium">Mashudi</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_1128_6903)">
                                                            <path
                                                                d="M8.0004 0.73291C3.9869 0.73291 0.733398 3.98641 0.733398 7.99991C0.733398 12.0134 3.9869 15.2669 8.0004 15.2669C12.0139 15.2669 15.2674 12.0134 15.2674 7.99991C15.2674 3.98641 12.0139 0.73291 8.0004 0.73291ZM8.6279 11.9399V12.9634H7.6489V11.9514C6.0424 11.7314 5.3389 10.4114 5.3389 10.4114L6.3389 9.57491C6.3389 9.57491 6.9774 10.6864 8.1324 10.6864C8.7704 10.6864 9.2544 10.3449 9.2544 9.76141C9.2544 8.39741 5.5794 8.56291 5.5794 6.03241C5.5794 4.93241 6.4494 4.13991 7.6484 3.95241V2.92991H8.6274V3.95241C9.4634 4.06241 10.4534 4.50241 10.4534 5.44891V6.17491H9.1554V5.82291C9.1554 5.45991 8.6929 5.21791 8.1754 5.21791C7.5154 5.21791 7.0319 5.54791 7.0319 6.00991C7.0319 7.40691 10.7069 7.06591 10.7069 9.71741C10.7069 10.8074 9.8929 11.7524 8.6279 11.9399Z"
                                                                fill="#B3B3B3" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1128_6903">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Nilai Projek</p>
                                                    <p class="text-dark-70 font-medium">Rp<span>250.000</span></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ml-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M5.33301 12.0002L7.99967 9.96683L10.6663 12.0002L9.66634 8.70016L12.333 6.80016H9.06634L7.99967 3.3335L6.93301 6.80016H3.66634L6.33301 8.70016L5.33301 12.0002ZM7.99967 14.6668C7.07745 14.6668 6.21079 14.4917 5.39967 14.1415C4.58856 13.7913 3.88301 13.3164 3.28301 12.7168C2.68301 12.1168 2.20812 11.4113 1.85834 10.6002C1.50856 9.78905 1.33345 8.92239 1.33301 8.00016C1.33301 7.07794 1.50812 6.21127 1.85834 5.40016C2.20856 4.58905 2.68345 3.8835 3.28301 3.2835C3.88301 2.6835 4.58856 2.20861 5.39967 1.85883C6.21079 1.50905 7.07745 1.33394 7.99967 1.3335C8.9219 1.3335 9.78856 1.50861 10.5997 1.85883C11.4108 2.20905 12.1163 2.68394 12.7163 3.2835C13.3163 3.8835 13.7915 4.58905 14.1417 5.40016C14.4919 6.21127 14.6668 7.07794 14.6663 8.00016C14.6663 8.92239 14.4912 9.78905 14.141 10.6002C13.7908 11.4113 13.3159 12.1168 12.7163 12.7168C12.1163 13.3168 11.4108 13.7919 10.5997 14.1422C9.78856 14.4924 8.9219 14.6673 7.99967 14.6668Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Kesulitan</p>
                                                    <p class="text-dark-70 font-medium">Mudah</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-2 border-light-70 rounded-2xl p-7 mt-7">
                                        <div class="flex items-center justify-between">
                                            <h4 class="text-2xl text-dark-70">Menerjemahkan naskah <br> kedalam bahasa
                                                inggris</h4>
                                            <div
                                                class="bg-[#E6E6E6] flex items-center gap-2 h-10 px-6 rounded-badge justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7"
                                                    viewBox="0 0 7 7" fill="none">
                                                    <circle opacity="0.7" cx="3.5" cy="3.5" r="3.5" fill="#5E5E5E" />
                                                </svg>
                                                <p class="text-dark-30 font-semibold">Gagal</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-10 mt-7">
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M9.99967 10.0002C11.8413 10.0002 13.333 8.5085 13.333 6.66683C13.333 4.82516 11.8413 3.3335 9.99967 3.3335C8.15801 3.3335 6.66634 4.82516 6.66634 6.66683C6.66634 8.5085 8.15801 10.0002 9.99967 10.0002ZM9.99967 11.6668C7.77467 11.6668 3.33301 12.7835 3.33301 15.0002V15.8335C3.33301 16.2918 3.70801 16.6668 4.16634 16.6668H15.833C16.2913 16.6668 16.6663 16.2918 16.6663 15.8335V15.0002C16.6663 12.7835 12.2247 11.6668 9.99967 11.6668Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Role</p>
                                                    <p class="text-dark-70 font-medium">Freelancer</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="12" height="14"
                                                        viewBox="0 0 12 14" fill="none">
                                                        <path
                                                            d="M3.33333 8.33399C3.14444 8.33399 2.98622 8.26999 2.85867 8.14199C2.73111 8.01399 2.66711 7.85576 2.66667 7.66732C2.66667 7.47843 2.73067 7.32021 2.85867 7.19265C2.98667 7.0651 3.14489 7.0011 3.33333 7.00065C3.52222 7.00065 3.68067 7.06465 3.80867 7.19265C3.93667 7.32065 4.00044 7.47887 4 7.66732C4 7.85621 3.936 8.01465 3.808 8.14265C3.68 8.27065 3.52178 8.33443 3.33333 8.33399ZM6 8.33399C5.81111 8.33399 5.65289 8.26999 5.52533 8.14199C5.39778 8.01399 5.33378 7.85576 5.33333 7.66732C5.33333 7.47843 5.39733 7.32021 5.52533 7.19265C5.65333 7.0651 5.81156 7.0011 6 7.00065C6.18889 7.00065 6.34733 7.06465 6.47533 7.19265C6.60333 7.32065 6.66711 7.47887 6.66667 7.66732C6.66667 7.85621 6.60267 8.01465 6.47467 8.14265C6.34667 8.27065 6.18844 8.33443 6 8.33399ZM8.66667 8.33399C8.47778 8.33399 8.31956 8.26999 8.192 8.14199C8.06444 8.01399 8.00044 7.85576 8 7.66732C8 7.47843 8.064 7.32021 8.192 7.19265C8.32 7.0651 8.47822 7.0011 8.66667 7.00065C8.85556 7.00065 9.014 7.06465 9.142 7.19265C9.27 7.32065 9.33378 7.47887 9.33333 7.66732C9.33333 7.85621 9.26933 8.01465 9.14133 8.14265C9.01333 8.27065 8.85511 8.33443 8.66667 8.33399ZM1.33333 13.6673C0.966667 13.6673 0.652889 13.5369 0.392 13.276C0.131111 13.0151 0.000444444 12.7011 0 12.334V3.00065C0 2.63398 0.130667 2.32021 0.392 2.05932C0.653333 1.79843 0.967111 1.66776 1.33333 1.66732H2V0.333984H3.33333V1.66732H8.66667V0.333984H10V1.66732H10.6667C11.0333 1.66732 11.3473 1.79798 11.6087 2.05932C11.87 2.32065 12.0004 2.63443 12 3.00065V12.334C12 12.7007 11.8696 13.0147 11.6087 13.276C11.3478 13.5373 11.0338 13.6678 10.6667 13.6673H1.33333ZM1.33333 12.334H10.6667V5.66732H1.33333V12.334Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Tanggal Selesai</p>
                                                    <p class="text-dark-70 font-medium">20 Des 2023</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                        viewBox="0 0 17 17" fill="none">
                                                        <g clip-path="url(#clip0_1128_6905)">
                                                            <path
                                                                d="M7.08333 2.125H2.83333C2.64547 2.125 2.4653 2.19963 2.33247 2.33247C2.19963 2.4653 2.125 2.64547 2.125 2.83333V7.08333C2.125 7.27119 2.19963 7.45136 2.33247 7.5842C2.4653 7.71704 2.64547 7.79167 2.83333 7.79167H7.08333C7.27119 7.79167 7.45136 7.71704 7.5842 7.5842C7.71704 7.45136 7.79167 7.27119 7.79167 7.08333V2.83333C7.79167 2.64547 7.71704 2.4653 7.5842 2.33247C7.45136 2.19963 7.27119 2.125 7.08333 2.125ZM14.1667 2.125H9.91667C9.7288 2.125 9.54864 2.19963 9.4158 2.33247C9.28296 2.4653 9.20833 2.64547 9.20833 2.83333V7.08333C9.20833 7.27119 9.28296 7.45136 9.4158 7.5842C9.54864 7.71704 9.7288 7.79167 9.91667 7.79167H14.1667C14.3545 7.79167 14.5347 7.71704 14.6675 7.5842C14.8004 7.45136 14.875 7.27119 14.875 7.08333V2.83333C14.875 2.64547 14.8004 2.4653 14.6675 2.33247C14.5347 2.19963 14.3545 2.125 14.1667 2.125ZM7.08333 9.20833H2.83333C2.64547 9.20833 2.4653 9.28296 2.33247 9.4158C2.19963 9.54864 2.125 9.7288 2.125 9.91667V14.1667C2.125 14.3545 2.19963 14.5347 2.33247 14.6675C2.4653 14.8004 2.64547 14.875 2.83333 14.875H7.08333C7.27119 14.875 7.45136 14.8004 7.5842 14.6675C7.71704 14.5347 7.79167 14.3545 7.79167 14.1667V9.91667C7.79167 9.7288 7.71704 9.54864 7.5842 9.4158C7.45136 9.28296 7.27119 9.20833 7.08333 9.20833ZM12.0417 9.20833C12.596 9.20833 13.1382 9.37095 13.601 9.67604C14.0639 9.98113 14.427 10.4153 14.6456 10.9247C14.8641 11.4342 14.9284 11.9966 14.8304 12.5422C14.7325 13.0878 14.4767 13.5927 14.0946 13.9944C13.7126 14.3961 13.2211 14.6768 12.681 14.8019C12.141 14.927 11.5761 14.8909 11.0563 14.6981C10.5366 14.5054 10.0848 14.1644 9.75696 13.7174C9.42911 13.2703 9.23959 12.737 9.21187 12.1833L9.20833 12.0417L9.21187 11.9C9.24822 11.174 9.56222 10.4897 10.0889 9.98872C10.6156 9.48772 11.3147 9.20833 12.0417 9.20833Z"
                                                                fill="#B3B3B3" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1128_6905">
                                                                <rect width="17" height="17" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Kategori</p>
                                                    <p class="text-dark-70 font-medium">Desain Grafis</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-11 mt-3">
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M13.333 4.00016H10.6663V2.66683C10.6663 1.92683 10.073 1.3335 9.33301 1.3335H6.66634C5.92634 1.3335 5.33301 1.92683 5.33301 2.66683V4.00016H2.66634C1.92634 4.00016 1.33967 4.5935 1.33967 5.3335L1.33301 12.6668C1.33301 13.4068 1.92634 14.0002 2.66634 14.0002H13.333C14.073 14.0002 14.6663 13.4068 14.6663 12.6668V5.3335C14.6663 4.5935 14.073 4.00016 13.333 4.00016ZM9.33301 4.00016H6.66634V2.66683H9.33301V4.00016Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Project Owner</p>
                                                    <p class="text-dark-70 font-medium">Mashudi</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_1128_6903)">
                                                            <path
                                                                d="M8.0004 0.73291C3.9869 0.73291 0.733398 3.98641 0.733398 7.99991C0.733398 12.0134 3.9869 15.2669 8.0004 15.2669C12.0139 15.2669 15.2674 12.0134 15.2674 7.99991C15.2674 3.98641 12.0139 0.73291 8.0004 0.73291ZM8.6279 11.9399V12.9634H7.6489V11.9514C6.0424 11.7314 5.3389 10.4114 5.3389 10.4114L6.3389 9.57491C6.3389 9.57491 6.9774 10.6864 8.1324 10.6864C8.7704 10.6864 9.2544 10.3449 9.2544 9.76141C9.2544 8.39741 5.5794 8.56291 5.5794 6.03241C5.5794 4.93241 6.4494 4.13991 7.6484 3.95241V2.92991H8.6274V3.95241C9.4634 4.06241 10.4534 4.50241 10.4534 5.44891V6.17491H9.1554V5.82291C9.1554 5.45991 8.6929 5.21791 8.1754 5.21791C7.5154 5.21791 7.0319 5.54791 7.0319 6.00991C7.0319 7.40691 10.7069 7.06591 10.7069 9.71741C10.7069 10.8074 9.8929 11.7524 8.6279 11.9399Z"
                                                                fill="#B3B3B3" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1128_6903">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Nilai Projek</p>
                                                    <p class="text-dark-70 font-medium">Rp<span>250.000</span></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ml-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M5.33301 12.0002L7.99967 9.96683L10.6663 12.0002L9.66634 8.70016L12.333 6.80016H9.06634L7.99967 3.3335L6.93301 6.80016H3.66634L6.33301 8.70016L5.33301 12.0002ZM7.99967 14.6668C7.07745 14.6668 6.21079 14.4917 5.39967 14.1415C4.58856 13.7913 3.88301 13.3164 3.28301 12.7168C2.68301 12.1168 2.20812 11.4113 1.85834 10.6002C1.50856 9.78905 1.33345 8.92239 1.33301 8.00016C1.33301 7.07794 1.50812 6.21127 1.85834 5.40016C2.20856 4.58905 2.68345 3.8835 3.28301 3.2835C3.88301 2.6835 4.58856 2.20861 5.39967 1.85883C6.21079 1.50905 7.07745 1.33394 7.99967 1.3335C8.9219 1.3335 9.78856 1.50861 10.5997 1.85883C11.4108 2.20905 12.1163 2.68394 12.7163 3.2835C13.3163 3.8835 13.7915 4.58905 14.1417 5.40016C14.4919 6.21127 14.6668 7.07794 14.6663 8.00016C14.6663 8.92239 14.4912 9.78905 14.141 10.6002C13.7908 11.4113 13.3159 12.1168 12.7163 12.7168C12.1163 13.3168 11.4108 13.7919 10.5997 14.1422C9.78856 14.4924 8.9219 14.6673 7.99967 14.6668Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Kesulitan</p>
                                                    <p class="text-dark-70 font-medium">Mudah</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-2 border-light-70 rounded-2xl p-7 mt-7">
                                        <div class="flex items-center justify-between">
                                            <h4 class="text-2xl text-dark-70">Menerjemahkan naskah <br> kedalam bahasa
                                                inggris</h4>
                                            <div
                                                class="bg-[#DDEEDF] flex items-center gap-2 h-10 px-6 rounded-badge justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7"
                                                    viewBox="0 0 7 7" fill="none">
                                                    <circle opacity="0.7" cx="3.5" cy="3.5" r="3.5" fill="#004A03" />
                                                </svg>
                                                <p class="text-[#004A03] font-semibold">Selesai</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-10 mt-7">
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M9.99967 10.0002C11.8413 10.0002 13.333 8.5085 13.333 6.66683C13.333 4.82516 11.8413 3.3335 9.99967 3.3335C8.15801 3.3335 6.66634 4.82516 6.66634 6.66683C6.66634 8.5085 8.15801 10.0002 9.99967 10.0002ZM9.99967 11.6668C7.77467 11.6668 3.33301 12.7835 3.33301 15.0002V15.8335C3.33301 16.2918 3.70801 16.6668 4.16634 16.6668H15.833C16.2913 16.6668 16.6663 16.2918 16.6663 15.8335V15.0002C16.6663 12.7835 12.2247 11.6668 9.99967 11.6668Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Role</p>
                                                    <p class="text-dark-70 font-medium">Freelancer</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="12" height="14"
                                                        viewBox="0 0 12 14" fill="none">
                                                        <path
                                                            d="M3.33333 8.33399C3.14444 8.33399 2.98622 8.26999 2.85867 8.14199C2.73111 8.01399 2.66711 7.85576 2.66667 7.66732C2.66667 7.47843 2.73067 7.32021 2.85867 7.19265C2.98667 7.0651 3.14489 7.0011 3.33333 7.00065C3.52222 7.00065 3.68067 7.06465 3.80867 7.19265C3.93667 7.32065 4.00044 7.47887 4 7.66732C4 7.85621 3.936 8.01465 3.808 8.14265C3.68 8.27065 3.52178 8.33443 3.33333 8.33399ZM6 8.33399C5.81111 8.33399 5.65289 8.26999 5.52533 8.14199C5.39778 8.01399 5.33378 7.85576 5.33333 7.66732C5.33333 7.47843 5.39733 7.32021 5.52533 7.19265C5.65333 7.0651 5.81156 7.0011 6 7.00065C6.18889 7.00065 6.34733 7.06465 6.47533 7.19265C6.60333 7.32065 6.66711 7.47887 6.66667 7.66732C6.66667 7.85621 6.60267 8.01465 6.47467 8.14265C6.34667 8.27065 6.18844 8.33443 6 8.33399ZM8.66667 8.33399C8.47778 8.33399 8.31956 8.26999 8.192 8.14199C8.06444 8.01399 8.00044 7.85576 8 7.66732C8 7.47843 8.064 7.32021 8.192 7.19265C8.32 7.0651 8.47822 7.0011 8.66667 7.00065C8.85556 7.00065 9.014 7.06465 9.142 7.19265C9.27 7.32065 9.33378 7.47887 9.33333 7.66732C9.33333 7.85621 9.26933 8.01465 9.14133 8.14265C9.01333 8.27065 8.85511 8.33443 8.66667 8.33399ZM1.33333 13.6673C0.966667 13.6673 0.652889 13.5369 0.392 13.276C0.131111 13.0151 0.000444444 12.7011 0 12.334V3.00065C0 2.63398 0.130667 2.32021 0.392 2.05932C0.653333 1.79843 0.967111 1.66776 1.33333 1.66732H2V0.333984H3.33333V1.66732H8.66667V0.333984H10V1.66732H10.6667C11.0333 1.66732 11.3473 1.79798 11.6087 2.05932C11.87 2.32065 12.0004 2.63443 12 3.00065V12.334C12 12.7007 11.8696 13.0147 11.6087 13.276C11.3478 13.5373 11.0338 13.6678 10.6667 13.6673H1.33333ZM1.33333 12.334H10.6667V5.66732H1.33333V12.334Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Tanggal Selesai</p>
                                                    <p class="text-dark-70 font-medium">20 Des 2023</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                        viewBox="0 0 17 17" fill="none">
                                                        <g clip-path="url(#clip0_1128_6905)">
                                                            <path
                                                                d="M7.08333 2.125H2.83333C2.64547 2.125 2.4653 2.19963 2.33247 2.33247C2.19963 2.4653 2.125 2.64547 2.125 2.83333V7.08333C2.125 7.27119 2.19963 7.45136 2.33247 7.5842C2.4653 7.71704 2.64547 7.79167 2.83333 7.79167H7.08333C7.27119 7.79167 7.45136 7.71704 7.5842 7.5842C7.71704 7.45136 7.79167 7.27119 7.79167 7.08333V2.83333C7.79167 2.64547 7.71704 2.4653 7.5842 2.33247C7.45136 2.19963 7.27119 2.125 7.08333 2.125ZM14.1667 2.125H9.91667C9.7288 2.125 9.54864 2.19963 9.4158 2.33247C9.28296 2.4653 9.20833 2.64547 9.20833 2.83333V7.08333C9.20833 7.27119 9.28296 7.45136 9.4158 7.5842C9.54864 7.71704 9.7288 7.79167 9.91667 7.79167H14.1667C14.3545 7.79167 14.5347 7.71704 14.6675 7.5842C14.8004 7.45136 14.875 7.27119 14.875 7.08333V2.83333C14.875 2.64547 14.8004 2.4653 14.6675 2.33247C14.5347 2.19963 14.3545 2.125 14.1667 2.125ZM7.08333 9.20833H2.83333C2.64547 9.20833 2.4653 9.28296 2.33247 9.4158C2.19963 9.54864 2.125 9.7288 2.125 9.91667V14.1667C2.125 14.3545 2.19963 14.5347 2.33247 14.6675C2.4653 14.8004 2.64547 14.875 2.83333 14.875H7.08333C7.27119 14.875 7.45136 14.8004 7.5842 14.6675C7.71704 14.5347 7.79167 14.3545 7.79167 14.1667V9.91667C7.79167 9.7288 7.71704 9.54864 7.5842 9.4158C7.45136 9.28296 7.27119 9.20833 7.08333 9.20833ZM12.0417 9.20833C12.596 9.20833 13.1382 9.37095 13.601 9.67604C14.0639 9.98113 14.427 10.4153 14.6456 10.9247C14.8641 11.4342 14.9284 11.9966 14.8304 12.5422C14.7325 13.0878 14.4767 13.5927 14.0946 13.9944C13.7126 14.3961 13.2211 14.6768 12.681 14.8019C12.141 14.927 11.5761 14.8909 11.0563 14.6981C10.5366 14.5054 10.0848 14.1644 9.75696 13.7174C9.42911 13.2703 9.23959 12.737 9.21187 12.1833L9.20833 12.0417L9.21187 11.9C9.24822 11.174 9.56222 10.4897 10.0889 9.98872C10.6156 9.48772 11.3147 9.20833 12.0417 9.20833Z"
                                                                fill="#B3B3B3" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1128_6905">
                                                                <rect width="17" height="17" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Kategori</p>
                                                    <p class="text-dark-70 font-medium">Desain Grafis</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-11 mt-3">
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M13.333 4.00016H10.6663V2.66683C10.6663 1.92683 10.073 1.3335 9.33301 1.3335H6.66634C5.92634 1.3335 5.33301 1.92683 5.33301 2.66683V4.00016H2.66634C1.92634 4.00016 1.33967 4.5935 1.33967 5.3335L1.33301 12.6668C1.33301 13.4068 1.92634 14.0002 2.66634 14.0002H13.333C14.073 14.0002 14.6663 13.4068 14.6663 12.6668V5.3335C14.6663 4.5935 14.073 4.00016 13.333 4.00016ZM9.33301 4.00016H6.66634V2.66683H9.33301V4.00016Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Project Owner</p>
                                                    <p class="text-dark-70 font-medium">Mashudi</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <g clip-path="url(#clip0_1128_6903)">
                                                            <path
                                                                d="M8.0004 0.73291C3.9869 0.73291 0.733398 3.98641 0.733398 7.99991C0.733398 12.0134 3.9869 15.2669 8.0004 15.2669C12.0139 15.2669 15.2674 12.0134 15.2674 7.99991C15.2674 3.98641 12.0139 0.73291 8.0004 0.73291ZM8.6279 11.9399V12.9634H7.6489V11.9514C6.0424 11.7314 5.3389 10.4114 5.3389 10.4114L6.3389 9.57491C6.3389 9.57491 6.9774 10.6864 8.1324 10.6864C8.7704 10.6864 9.2544 10.3449 9.2544 9.76141C9.2544 8.39741 5.5794 8.56291 5.5794 6.03241C5.5794 4.93241 6.4494 4.13991 7.6484 3.95241V2.92991H8.6274V3.95241C9.4634 4.06241 10.4534 4.50241 10.4534 5.44891V6.17491H9.1554V5.82291C9.1554 5.45991 8.6929 5.21791 8.1754 5.21791C7.5154 5.21791 7.0319 5.54791 7.0319 6.00991C7.0319 7.40691 10.7069 7.06591 10.7069 9.71741C10.7069 10.8074 9.8929 11.7524 8.6279 11.9399Z"
                                                                fill="#B3B3B3" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1128_6903">
                                                                <rect width="16" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Nilai Projek</p>
                                                    <p class="text-dark-70 font-medium">Rp<span>250.000</span></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 ml-2">
                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M5.33301 12.0002L7.99967 9.96683L10.6663 12.0002L9.66634 8.70016L12.333 6.80016H9.06634L7.99967 3.3335L6.93301 6.80016H3.66634L6.33301 8.70016L5.33301 12.0002ZM7.99967 14.6668C7.07745 14.6668 6.21079 14.4917 5.39967 14.1415C4.58856 13.7913 3.88301 13.3164 3.28301 12.7168C2.68301 12.1168 2.20812 11.4113 1.85834 10.6002C1.50856 9.78905 1.33345 8.92239 1.33301 8.00016C1.33301 7.07794 1.50812 6.21127 1.85834 5.40016C2.20856 4.58905 2.68345 3.8835 3.28301 3.2835C3.88301 2.6835 4.58856 2.20861 5.39967 1.85883C6.21079 1.50905 7.07745 1.33394 7.99967 1.3335C8.9219 1.3335 9.78856 1.50861 10.5997 1.85883C11.4108 2.20905 12.1163 2.68394 12.7163 3.2835C13.3163 3.8835 13.7915 4.58905 14.1417 5.40016C14.4919 6.21127 14.6668 7.07794 14.6663 8.00016C14.6663 8.92239 14.4912 9.78905 14.141 10.6002C13.7908 11.4113 13.3159 12.1168 12.7163 12.7168C12.1163 13.3168 11.4108 13.7919 10.5997 14.1422C9.78856 14.4924 8.9219 14.6673 7.99967 14.6668Z"
                                                            fill="#B3B3B3" />
                                                    </svg></div>
                                                <div>
                                                    <p class="text-xs text-light-70">Kesulitan</p>
                                                    <p class="text-dark-70 font-medium">Mudah</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mt-10">
                                    <p class="text-base font-medium text-light-50"><span>1</span> dari <span>20</span>
                                        halaman</p>
                                    <div class="flex gap-3">
                                        <button class="border-2 border-light-50 rounded-full p-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M6.52301 9.16645H16.6663V10.8331H6.52301L10.993 15.3031L9.81467 16.4814L3.33301 9.99978L9.81467 3.51811L10.993 4.69645L6.52301 9.16645Z"
                                                    fill="#CCCCCC" />
                                            </svg></button>
                                        <button class="border-2 border-primary-50 rounded-full p-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M13.477 10.8336H3.33366V9.16689H13.477L9.00699 4.69689L10.1853 3.51855L16.667 10.0002L10.1853 16.4819L9.00699 15.3036L13.477 10.8336Z"
                                                    fill="#020179" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

@endsection
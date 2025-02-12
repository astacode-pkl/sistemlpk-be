@extends('frontend.app')
@section('content')
    <!-- persyaratan -->
    <div>
        <div class="h-[30vh] w-full relative mb-10 shadow-md flex items-center justify-center">
            <div>
                <!-- Loading Skeleton -->
                <div>
                    <div class="animate-pulse">
                        <!-- Skeleton content -->
                    </div>
                </div>

                <!-- Hero Content -->
                <div>
                    <img src="assets/img/program1.jpg" alt="Persyaratan Program"
                        class="w-full h-full object-cover absolute inset-0">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center gap-2">
                        <h1 class="text-white text-4xl font-semibold z-10 text-center" data-aos="fade-right">
                            Persyaratan
                        </h1>
                        <nav class="text-white text-base sm:text-lg font-semibold z-10 animate-slide-in-right">
                            <a href="/" class="text-white hover:text-blue-100">Home</a>
                            <span class="mx-2">></span>
                            <span class="text-blue-400">Persyaratan</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto p-4 space-y-8">
            <div class="max-w-4xl mx-auto p-4 space-y-8">
                <!-- Program SO Section -->
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="p-6">
                        <h2 class="text-2xl md:text-3xl font-semibold text-blue-600 text-center mb-5" data-aos="fade-down">
                            Program Pemagangan SO (Swasta)
                        </h2>
                        <!-- card -->

                        <div class="flex flex-wrap justify-start p-4 text-center gap-5 border rounded-lg shadow-lg">
                            <div class="w-full md:w-1/2">
                                <img src="assets/img/japanimg.jpg" alt="Description"
                                    class="w-full h-full rounded-lg mb-4 md:mb-0">
                            </div>
                            <div class="w-full md:w-[39%]">
                                <div class="flex flex-col w-full">
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        <span class="text-gray-600 text-start hover:text-gray-900">Laki - laki /
                                            Perempuan umur 18 - 35 tahun</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Pendidikan
                                            minimal SMA/Sederajat</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Tinggi badan
                                            dan berat badan minimal</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Laki-laki :
                                            160 cm / 50 kg</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Perempuan :
                                            150 cm / 40 kg</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Sehat
                                            jasmani/Rohani</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Tidak Buta
                                            Warna</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Tidak
                                            cacat</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                        </svg>
                                        <span class="text-gray-600 text-justify hover:text-gray-900">Bersedia
                                            bekerja keras dan disiplin tinggi</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Benefits Grid -->
                        <h3 class="text-2xl font-semibold mb-4 text-center text-blue-600 mt-16">Keuntungan Program
                            SO (Swasta)</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div data-aos="fade-up" data-aos-duration="3000"
                                class="flex flex-col items-center p-4 text-center border rounded-lg transition-all duration-300 hover:bg-blue-600 hover:transform hover:scale-105 hover:shadow-lg hover:text-white group">
                                <svg class="w-8 h-8 text-blue-500 mb-2 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                                <span class="text-sm">Bisa memilih job sesuai keinginan</span>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="2500"
                                class="flex flex-col items-center p-4 text-center border rounded-lg transition-all duration-300 hover:bg-blue-600 hover:transform hover:scale-105 hover:shadow-lg hover:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 text-blue-500 mb-2 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span class="text-sm">Mata minus masih bisa</span>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="2000"
                                class="flex flex-col items-center p-4 text-center border rounded-lg transition-all duration-300 hover:bg-blue-600 hover:transform hover:scale-105 hover:shadow-lg hover:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 text-blue-500 mb-2 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                </svg>
                                <span class="text-sm">Proses tidak terlalu ketat</span>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1000"
                                class="flex flex-col items-center p-4 text-center border rounded-lg transition-all duration-300 hover:bg-blue-600 hover:transform hover:scale-105 hover:shadow-lg hover:text-white group">
                                <svg class="w-8 h-8 text-blue-500 mb-2 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                    <path d="M2 17l10 5 10-5" />
                                    <path d="M2 12l10 5 10-5" />
                                </svg>
                                <span class="text-sm">Proses tidak terlalu lama</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Program TG Section -->
                <div class="max-w-4xl mx-auto p-4">
                    <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 relative">
                        <!-- Circular Image -->
                        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden flex-shrink-0 z-10 shadow-md">
                            <img src="assets/img/program2.jpg" alt="Program SSW/TG" class="w-full h-full object-cover" />
                        </div>

                        <!-- Content Section -->
                        <div class="flex-1">

                            <h2 class="text-2xl md:text-3xl font-semibold text-blue-600 text-center md:text-left mb-5">
                                Program Tenaga Kerja Spesifik (SSW) / Tokutei Ginou (TG)
                            </h2>

                            <!-- Requirements List -->
                            <div
                                class="flex flex-col items-center p-5 gap-2 text-center border rounded-lg bg-white md:-ml-40 shadow-lg">
                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Laki - laki / Perempuan umur 18 - 33
                                        tahun</span>
                                </div>

                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Pendidikan minimal
                                        SMA/Sederajat</span>
                                </div>

                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Sehat jasmani/Rohani</span>
                                </div>

                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Tidak Buta Warna</span>
                                </div>

                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Bersedia bekerja keras dan disiplin
                                        tinggi</span>
                                </div>

                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Memiliki Sertifikat JLPT N4 atau JFT
                                        Basic A2</span>
                                </div>

                                <div
                                    class="flex items-center gap-x-2 w-full md:w-3/4 lg:w-1/2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25V7.5" />
                                    </svg>

                                    <span class="text-gray-600 text-justify">Memiliki Paspor dan Siap Bekerja di
                                        Jepang</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex justify-center mt-5 mb-5">
                    <nuxt-link to="https://tally.so/r/mOdErY" target="_blank">
                        <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-md rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-transparent hover:scale-105 hover:text-blue-600 hover:border hover:border-blue-600 disabled:opacity-50 disabled:pointer-events-none font-semibold hover:transition duration-700 mb-5">
                            Daftar Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </button>
                    </nuxt-link>
                </div>

            </div>
        </div>
    </div>
    <!-- end persyaratan -->
@endsection

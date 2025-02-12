@extends('frontend.app')
@section('content')
<!-- Tentang page -->

<!-- Hero Section -->
<div class="h-[30vh] w-full relative mb-10 shadow-md flex items-center justify-center">
    <img src="/assets/img/bg-tentang.webp" alt="foto-persyaratan1"
        class="w-full h-full object-cover absolute inset-0" />
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center gap-2">
        <h1 class="text-white text-4xl font-semibold z-10 text-center">Tentang</h1>
        <h4 class="text-white text-base sm:text-lg font-semibold z-10 text-center">
            <a href="index.html" class="text-white hover:text-blue-100">Home</a> >
            <a href="tentang.html" class="text-blue-400">Tentang</a>
        </h4>
    </div>
</div>
<!-- end hero -->

<!-- History Section -->
<div class="max-w-6xl mx-auto px-4">
    <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-6 text-center animate-slideDown opacity-100">
        Sejarah {{ Cache::get('companyprofile')->name }}
    </h3>

    <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden mb-12 animate-slideUp opacity-100">
        <div class="p-4 md:p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-12">
                <div class="space-y-4 md:space-y-6 text-base md:text-lg text-center lg:text-left">
                    <p class="text-gray-600 leading-relaxed">
                        {{ Cache::get('companyprofile')->name }} didirikan pada bulan Agustus 2024 di Ciawi, Kabupaten Tasikmalaya, Jawa
                        Barat
                        Indonesia. {{ Cache::get('companyprofile')->name }} adalah lembaga pendidikan bahasa Jepang untuk Program Pemagang
                        ke
                        Jepang, dan telah mendapatkan izin resmi dari pemerintah Indonesia.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        {{ Cache::get('companyprofile')->name }} membuka kelas pendidikan Bahasa Jepang yang berorientasi memberikan
                        pembekalan
                        sikap, mental, serta bahasa dan budaya Jepang bagi calon peserta magang, dan melatih calon
                        peserta
                        magang agar menjadi pemagang yang andal dan sesuai dengan kompetensi yang dibutuhkan oleh
                        perusahaan
                        Jepang.
                    </p>
                </div>
                <div class="order-first lg:order-last">
                    <div class="relative h-64 lg:h-full w-full rounded-lg overflow-hidden">
                        <img src="assets/img/hero.jpg" alt="{{ Cache::get('companyprofile')->name }}"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 ease-in-out transform hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center p-6">
                            <h4 class="text-white text-xl font-bold mb-2 text-center">{{ Cache::get('companyprofile')->name }}</h4>
                            <p class="text-white text-sm text-center">職業訓練機関つくばインドネシア</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end history -->

    <!-- Separator Line -->
    <div class="w-1/2 h-px bg-gray-300 mx-auto mb-12"></div>
</div>


<!-- Curriculum Section -->
<div class="max-w-5xl mx-auto">
    <div class="text-center mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-blue-600 relative inline-block animate-slideDown opacity-100">
            Kurikulum Dan Metode Pengajaran
        </h2>
    </div>

    <div class="text-center mb-8 md:mb-16 animate-slideUp opacity-100">
        <p class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto">
            Sebagai acuan untuk dapat mengikuti keinginan dan harapan dari LPK SO kami menggunakan modul sebagai
            berikut:
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 px-4">
        <div class="group animate-slideUp opacity-100">
            <div
                class="bg-gray-50 rounded-2xl shadow-lg p-4 md:p-5 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="flex flex-col items-center space-y-4">
                    <div
                        class="w-12 md:w-16 h-12 md:h-16 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-8 h-6 md:h-8 text-blue-600"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 text-center">Minna No Nihongo I dan II
                    </h3>
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-sm text-gray-600 text-center">
                            Pembelajaran dasar bahasa Jepang yang sistematis
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="group animate-slideUp opacity-100">
            <div
                class="bg-gray-50 rounded-2xl shadow-lg p-4 md:p-5 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="flex flex-col items-center space-y-4">
                    <div
                        class="w-12 md:w-16 h-12 md:h-16 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-8 h-6 md:h-8 text-blue-600"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 text-center">Irodori</h3>
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-sm text-gray-600 text-center">
                            Pembelajaran praktis untuk kehidupan di Jepang
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="group animate-slideUp opacity-100">
            <div
                class="bg-gray-50 rounded-2xl shadow-lg p-4 md:p-5 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="flex flex-col items-center space-y-4">
                    <div
                        class="w-12 md:w-16 h-12 md:h-16 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-8 h-6 md:h-8 text-blue-600"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 text-center">Marugoto</h3>
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-sm text-gray-600 text-center">
                            Pembelajaran secara aktif & dinamis mencakup informasi budaya Jepang
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Curriculum -->

<!-- Separator Line -->
<div class="w-1/2 h-px bg-gray-300 mx-auto my-12"></div>


<!-- Licensing Section -->
<div class="mt-12 md:mt-16 mb-16 md:mb-20">
    <div class="text-center mb-8">
        <h2
            class="text-2xl md:text-3xl font-bold text-blue-600 transition-all duration-700 animate-slideDown opacity-100">
            Perizinan
            <div class="mt-2 mx-auto h-1 w-16 bg-blue-600 rounded"></div>
        </h2>
    </div>

    <div
        class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4 md:p-8 lg:p-12 shadow-lg max-w-4xl mx-auto transition-all duration-700 delay-300 animate-slideUp opacity-100 hover:shadow-2xl hover:scale-105">
        <p class="text-base md:text-xl font-semibold text-gray-700 text-center mb-4">
            Sertifikat Standar: <span class="font-bold text-blue-600">14082400621380001</span>
        </p>
        <p class="text-base md:text-xl text-gray-700 text-center">
            Akta Notaris: <span class="font-bold text-blue-600">Mohamad Hikmat, S.H.</span> Nomor 12 Tanggal 26 Juli
            2024
        </p>
    </div>
</div>
<!-- end licensing -->
@endsection
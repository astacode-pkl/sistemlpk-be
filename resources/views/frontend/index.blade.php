<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & Tailwind CSS Starter Pack</title>
    <link rel="stylesheet" href="./main.css">
    @vite('resources/css/app.css')
    
</head>

<body>
    <!-- navbar -->
    <header id="header"
        class="fixed top-0 pt-1 md:pt-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 h-16 lg:h-20 w-full transition-all duration-300">
        <nav
            class="relative max-w-[85rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 py-auto sm:px-6 lg:px-8 py-2">
            <!-- Logo w/ Collapse Button -->
            <div class="flex items-center justify-between">
                <a class="flex gap-3" href="#" aria-label="Brand">
                    <img src="https://lpktsukuba.vercel.app/_nuxt/logo.B5hgejDb.png" alt="logo" class="w-10">
                    <img src="https://lpktsukuba.vercel.app/_nuxt/nama.BiAa2lNX.png" alt="nama" class="w-20">
                </a>
                <!-- Collapse Button -->
                <div class="md:hidden">
                    <button type="button" id="collapseButton"
                        class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none p-1">
                        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block shrink-0 hidden size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
                <!-- End Collapse Button -->
            </div>
            <!-- End Logo w/ Collapse Button -->
            <!-- Collapse -->
            <div id="collapseContent"
                class="hs-collapse hidden overflow-hidden bg-white w-full md:bg-transparent rounded-lg px-10 pt-3 mt-5 md:mt-0 md:pt-0 lg:px-0 transition-all duration-300 basis-full grow md:block"
                aria-labelledby="collapseButton">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                    <div
                        class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1 sm:text-gray-800 md:text-white"
                        id="navLinks">
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/" aria-current="page">
                            Home
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/gallery.html">
                            Persyaratan
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/navbar.html">
                            Galeri
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/foto.html">
                            Kontak
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/tentang.html">
                            Tentang
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- end navbar -->

    <!-- hero -->
    <div class="relative h-screen overflow-hidden">
        <!-- Overlay -->
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center z-10">
            <h1 class="text-3xl font-semibold">
                LPK TSUKUBA INDONESIA <br />職業訓練機関つくばインドネシア
            </h1>
            <div class="flex justify-center mt-8 py-3 w-full">
                <a href="https://tally.so/r/mOdErY" target="_blank">
                    <button type="button"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-lg rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-transparent hover:scale-105 hover:text-blue-600 hover:border hover:border-blue-600 disabled:opacity-50 disabled:pointer-events-none font-semibold hover:transition duration-700">
                    Daftar Sekarang
                  </button>
                </a>
            </div>
        </div>
        <!-- End Overlay -->
        <!-- Carousel -->
        <div id="carousel"
            class="relative h-screen w-full bg-white flex items-center brightness-50">
            <div id="carousel-body" class="flex w-full transition-transform duration-700">
                <div class="min-w-full flex justify-center items-center h-screen">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?fm=jpg&q=60&w=3000"
                        class="object-cover h-full w-full" alt="Slide 1">
                </div>
                <div class="min-w-full flex justify-center items-center h-screen">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?fm=jpg&q=60&w=3000"
                        class="object-cover h-full w-full" alt="Slide 2">
                </div>
                <div class="min-w-full flex justify-center items-center h-screen">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?fm=jpg&q=60&w=3000"
                        class="object-cover h-full w-full" alt="Slide 3">
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <button id="prevBtn"
            class="absolute top-1/2 left-5 transform -translate-y-1/2 bg-gray-600/20 text-white px-4 py-2 rounded-lg text-xl font-bold">
            &lt;
        </button>
        <button id="nextBtn"
            class="absolute top-1/2 right-5 transform -translate-y-1/2 bg-gray-600/20 text-white px-4 py-2 rounded-lg text-xl font-bold">
            &gt;
        </button>
    </div>
    <!-- end hero -->

    <!-- visi misi -->
    <div class="visimisi h-full w-full flex justify-center items-center p-10 my-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 w-full max-w-7xl">
            <div class="flex justify-center items-center col-span-1 md:col-span-1 md:order-2 order-1"
                data-aos="fade-up" data-aos-delay="200">
                <img src="https://lpktsukuba.vercel.app/_nuxt/misi.kpFNBcGC.jpg" alt="misi"
                    class="w-[90%] h-full lg:w-full object-cover bg-gray-50 shadow-lg rounded-lg" />
            </div>
            <div class="p-10 bg-gray-50 shadow-lg rounded-lg mx-auto col-span-1 md:col-span-2 md:order-1 order-2"
                data-aos="fade-up">
                <h2 class="text-center text-3xl font-bold text-blue-500 mb-3">
                    Visi & Misi
                </h2>
                <h3 class="font-semibold text-lg text-gray-800 text-center">
                    Visi
                </h3>
                <p class="mt-4 text-gray-700 leading-relaxed text-center md:text-left">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam voluptatum totam, ducimus ex
                    excepturi quasi natus. Voluptatem laboriosam et, dignissimos molestias iusto, voluptates, illo
                    veniam recusandae consequuntur ex soluta.
                </p>
                <h3 class="font-semibold text-lg text-gray-800 text-center mt-5">
                    Misi
                </h3>
                <p class="mt-4 text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat labore praesentium dolor sit nam
                    cum dolorem similique. Quam ut, qui porro minima, nam omnis voluptatum ipsa voluptatem non quasi
                    asperiores.
                </p>
            </div>
        </div>
    </div>
    <!-- end visi misi -->

    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-3xl font-bold text-blue-500 mb-3 animate-fade-in"
            data-aos="fade-up">
            Galeri
        </h2>
        <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4 animate-slide-up"
            data-aos="fade-up">
        </div>
        <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">Foto Kelulusan</p>
        <Foto />
        <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">Foto Kegiatan Lainnya
        </p>
        <Galeri :preview-mode="true" />
        <div class="flex justify-center">
            <a to="/galeri">
                <button type="button"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-lg rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-transparent hover:scale-105 hover:text-blue-600 hover:border hover:border-blue-600 disabled:opacity-50 disabled:pointer-events-none font-semibold hover:transition duration-700">
                    Lihat Semua
                </button>
            </a>
        </div>
    </div>


    <div class="max-w-7xl mx-auto mt-14">
        <h2 class="text-center text-3xl font-bold text-blue-500 mb-3 animate-fade-in"
            data-aos="fade-up">Program</h2>
        <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4 animate-slide-up"
            data-aos="fade-up"></div>
        <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">Program LPK Tsukuba
        </p>
        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-8 px-8">
            <div class="flex flex-col bg-gray-50 border shadow-sm rounded-xl hover:drop-shadow-lg transition duration-500 hover:scale-110 group"
                data-aos="fade-up">
                <div class="p-4 md:p-7">
                    <img src="/assets/img/program1.jpg" alt="program"
                        class="rounded-lg mb-3 group-hover:brightness-90 brightness-75 transition duration-200">
                    <h3 class="text-xl font-bold text-blue-600 transition duration-200">
                        Program Pemagangan SO (swasta)
                    </h3>
                    <p class="mt-2 text-gray-600 font-semibold ">
                        Program pemagangan SO adalah program magang ke Jepang yang diselenggarakan oleh Sending
                        Organization
                        (SO). SO adalah lembaga yang telah memiliki izin resmi dari Kementerian Ketenagakerjaan
                        untuk mengirimkan
                        tenaga kerja atau magang ke Negara Jepang.
                    </p>
                </div>
            </div>
            <div class="flex flex-col bg-gray-50 border shadow-sm rounded-xl hover:drop-shadow-lg transition duration-200 hover:scale-110 group"
                data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 md:p-7">
                    <img src="/assets/img/program2.jpg" alt="program" class="rounded-lg mb-3 group-hover:brightness-90 brightness-75 transition duration-200">
                    <h3 class="text-xl font-bold text-blue-600 ">
                        Program Tenaga Kerja Spesifik/Tokutei Ginou (TG)
                    </h3>
                    <p class="mt-2 text-gray-600 font-semibold ">
                        Tokutei Ginou merupakan program baru dari pemerintah Jepang, yaitu program tenaga kerja
                        dengan keahlian spesifik dengan status visa/ ijin tinggal bagi warga negara asing di Jepang.
                        Pemegang visa SSW dapat bekerja di perusahaan Jepang dengan hak dan kewajiban yang sama
                        dengan pekerja Jepang. Kontrak 1 s/d 3 tahun, bisa diperpanjang hingga 5 tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto mt-14">
        <h2 class="text-center text-3xl font-bold text-blue-500 mb-3 animate-fade-in"
            data-aos="fade-up">
            Proses ke jepang
        </h2>
        <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4 animate-slide-up"
            data-aos="fade-up"></div>
        <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">
            Langkah langkah sebelum ke jepang
        </p>

        <!-- step -->
        <div
            class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-center flex-col">
            <ul class="flex items-center justify-center gap-4 mb-6">
                <li class="flex items-center" data-step="1">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">1</span>
                    <span
                        class="ml-4 text-sm font-medium">LPK Tsukuba</span>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </li>
                <li class="flex items-center" data-step="2">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">2</span>
                    <span
                        class="ml-4 text-sm font-medium">Seleksi</span>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </li>        
                <li class="flex items-center" data-step="3">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">3</span>
                    <span
                        class="ml-4 text-sm font-medium">Pelatihan</span>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </li>
                <li class="flex items-center" data-step="4">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">4</span>
                    <span
                        class="ml-4 text-sm font-medium">Jepang</span>
                </li>
            </ul>

            <div class="w-5/6 flex justify-center items-center h-48 bg-gray-50 border border-dashed border-gray-300 rounded-lg"
                data-content="1" style="display: flex;">
                <h3 class="text-gray-600 text-xl">Pra Medical → Bahasa → Jepang → Matematika → Psikotes → FMD</h3>
            </div>
            <div class="w-5/6 flex justify-center items-center h-48 bg-gray-50 border border-dashed border-gray-300 rounded-lg"
                data-content="2" style="display: none;">
                <h3 class="text-gray-600 text-xl">Matematika → Kesemaptaan → Fisik → Psikotes (Swasta) → Bahasa
                    Jepang → Wawancara → MCU</h3>
            </div>
            <div class="w-5/6 flex justify-center items-center h-48 bg-gray-50 border border-dashed border-gray-300 rounded-lg"
                data-content="3" style="display: none;">
                <h3 class="text-gray-600 text-xl">Bahasa Jepang → Budaya Jepang → Pengurusan Dokumen</h3>
            </div>
            <div class="w-5/6 flex justify-center items-center h-48 bg-gray-50 border border-dashed border-gray-300 rounded-lg"
                data-content="4" style="display: none;">
                <h3 class="text-gray-600 text-xl">Berangkat Ke Jepang</h3>
            </div>
        </div>
    </div>
    <!-- end step -->

    <script src="script.js"></script>
    @vite('resources/css/app.js')

</body>

</html>
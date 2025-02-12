<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ Cache::get('companyprofile')->name }}</title>
</head>

<body>
    <!-- HEADER-->
    <header
        ref=class="fixed top-0 border-b border-gray-200 flex flex-wrap md:justify-start md:flex-nowrap z-50 h-16 lg:h-20 w-full transition-all duration-300"
        :class="{
            'bg-white/0 backdrop-blur-0 border-transparent': !isScrolled,
            'bg-white/90 backdrop-blur-sm border-gray-200': isScrolled
        }">
        <nav
            class="relative max-w-[85rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 py-auto sm:px-6 lg:px-8 py-2">
            <!-- Logo w/ Collapse Button -->
            <div class="flex items-center justify-between">
                <a class="flex gap-3" to="#" aria-label="Brand">
                    <img src="{{ asset('images/companyprofile/' . Cache::get('companyprofile')->logo) }}" alt="logo"
                        class="w-10" />
                    {{-- <img src="/assets/img/nama.png" alt="nama" class="w-20" /> --}}
                </a>
                <!-- Collapse Button -->
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            <div id="hs-header-classic"
                class="hs-collapse hidden overflow-hidden bg-white w-full md:bg-transparent rounded-lg px-10 pt-3 mt-5 lg:mt-0 lg:pt-0 lg:px-0 transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-header-classic-collapse">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                    <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                        <a class="p-2 fle{{  }}ems-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            to="/" aria-current="page"
                            :class="{
                                'md:text-white': !isScrolled,
                                'md:text-gray-800': isScrolled
                            }">
                            Home{{  }}
                        </a>
                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            to="/persyaratan"
                            :class="{
                                'md:text-white': !isScrolled,
                                'md:text-gray-800': isScrolled
                            }">
                            Persyaratan
                        </a>
                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            to="/galeri"
                            :class="{
                                'md:text-white': !isScrolled,
                                'md:text-gray-800': isScrolled
                            }">
                            Galeri
                        </a>
                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            to="/kontak"
                            :class="{
                                'md:text-white': !isScrolled,
                                'md:text-gray-800': isScrolled
                            }">
                            Kontak
                        </a>
                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            to="/tentang"
                            :class="{
                                'md:text-white': !isScrolled,
                                'md:text-gray-800': isScrolled
                            }">
                            Tentang
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- END HEADER  -->

    <!-- hero -->
    <!-- Slider -->
    <div data-hs-carousel='{
      "loadingClasses": "opacity-0",
      "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
      "isAutoPlay": true
  }'
        class="relative">
        <div class="hs-carousel relative overflow-hidden h-screen bg-white">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full w-full bg-gray-100 relative">
                        <img {{-- Pending --}} src="/assets/img/hero.jpg" alt="hero"
                            class="object-cover brightness-50 w-full" />
                    </div>
                </div>
                <div class=<div class="hs-carousel-slide">
                    <div class="flex justify-center h-full w-full bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHRva3lvfGVufDB8fDB8fHww"
                            alt="hero" class="object-cover w-full brightness-50" />
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full w-full bg-gray-300">
                        <img src="/assets/img/hero3.jpg" alt="hero" class="object-cover w-full brightness-50" />
                    </div>
                </div>
            </div>
            <button type="button"
                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-blue-600">
                <span class="text-2xl hover:bg-gray-800/30 p-3 rounded-md" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button"
                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-blue-600">
                <span class="sr-only">Next</span>
                <span class="text-2xl hover:bg-gray-800/40 p-3 rounded-md" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </span>
            </button>
            <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
        </div>
        <!-- End Slider -->

        <!-- Overlay -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center z-10">
            <h1 class="text-3xl font-semibold"></h1>
            {{ Cache::get('companyprofile')->name }} <br />{{ Cache::get('companyprofile')->slogan }}
            </h1>
            <div class="flex justify-center mt-10">
                <a to="https://tally.so/r/mOdErY" target="_blank">
                    <button type="button"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-md rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-transparent hover:scale-105 hover:text-white hover:border hover:border-white disabled:opacity-50 disabled:pointer-events-none font-semibold hover:transition duration-700 mb-5">
                        Daftar Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <!-- End Overlay -->
        <!-- end hero -->
        <!-- visi misi -->
        <div class="visimisi h-full w-full flex justify-center items-center p-10 my-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 w-full max-w-7xl">
                <div class="flex justify-center items-center col-span-1 md:col-span-1 md:order-2 order-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="/assets/img/misi.jpg" alt="misi"
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
                        {{ Cache::get('companyprofile')->vision }}
                    </p>
                    <h3 class="font-semibold text-lg text-gray-800 text-center mt-5">
                        Misi
                    </h3>
                    <p class="mt-4 text-gray-700 leading-relaxed">
                        {{ Cache::get('companyprofile')->mission }}
                    </p>
                </div>
            </div>
        </div>
        <!-- end visi misi -->

        <!-- program -->
        <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-8 px-8">
            @foreach ($programs as $program)
                <div class="flex flex-col bg-gray-50 border shadow-sm rounded-xl hover:drop-shadow-lg transition duration-500 hover:scale-110 group"
                    data-aos="fade-up">
                    <div class="p-4 md:p-7">
                        <img src="{{ asset('images/programs/' . $program->image) }}" alt="program"
                            class="rounded-lg mb-3 group-hover:brightness-90 brightness-75 transition duration-200" />
                        <h3 class="text-xl font-bold text-blue-600 transition duration-200">
                            {{ $program->title }}
                        </h3>
                        <p class="mt-2 text-gray-600 font-semibold">
                            {{ $program->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- program -->
        <!-- proses -->
        <div class="flex justify-center items-center flex-col mb-20">
            <h3 class="text-xl text-center mb-5 font-bold text-blue-600">
                Proses Ke Jepang
            </h3>
            <!-- Timeline -->
            <div>
                <!-- Item -->
                <div class="flex gap-x-3">
                    <!-- Icon -->
                    <div
                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <div class="size-2 rounded-full bg-blue-600"></div>
                        </div>
                    </div>
                    <!-- End Icon -->
                    <!-- Right Content -->
                    <div class="grow pt-0.5 pb-8">
                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                            {{ Cache::get('companyprofile')->name }}
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Find more detailed instructions here.
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="flex gap-x-3">
                    <!-- Icon -->
                    <div
                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <div class="size-2 rounded-full bg-blue-600"></div>
                        </div>
                    </div>
                    <!-- End Icon -->
                    <!-- Right Content -->
                    <div class="grow pt-0.5 pb-8">
                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                            Seleksi
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Find more detailed instructions here.
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="flex gap-x-3">
                    <!-- Icon -->
                    <div
                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <div class="size-2 rounded-full bg-blue-600"></div>
                        </div>
                    </div>
                    <!-- End Icon -->
                    <!-- Right Content -->
                    <div class="grow pt-0.5 pb-8">
                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                            Pelatihan
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Find more detailed instructions here.
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="flex gap-x-3">
                    <!-- Icon -->
                    <div
                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <div class="size-2 rounded-full bg-blue-600"></div>
                        </div>
                    </div>
                    <!-- End Icon -->
                    <!-- Right Content -->
                    <div class="grow pt-0.5 pb-8">
                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                            Jepang
                        </h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Find more detailed instructions here.
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->
            </div>
            <!-- End Timeline -->
        </div>
        <!-- end proses -->




        <!-- galeri -->
        <div class="galeri">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4 sm:gap-6 items-center mx-3 sm:mx-5 mt-5 mb-10">
                <!-- Image Card -->
                @foreach ($graduations as $graduation)
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer">
                    <div class="absolute inset-0 bg-gray-200"></div>
                    <div class="w-full h-full">
                        <img src="{{ asset('images/galleries/' . $graduation->image) }}" alt="Image title"
                            class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div
                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                        <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">Image
                            Title</h3>
                    </div>
                </div>
                @endforeach
                <!-- Repeat the above block for each image -->

            </div>

            <!-- Modal -->
            <div class="fixed inset-0 z-[60] overflow-hidden bg-black bg-opacity-80 transition-all duration-300"
                id="modal">
                <div class="flex items-center justify-center min-h-screen p-4">
                    <button type="button"
                        class="absolute top-2 right-2 sm:top-3 sm:right-3 z-[70] text-white hover:text-gray-200"
                        id="closeModal">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="transform transition-all duration-300 max-w-4xl w-80 md:w-96" id="modalContent">
                        <img src="your-selected-image-src.jpg" alt="Selected Image Title"
                            class="w-full rounded-lg shadow-xl" />
                        <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2">
                            Selected Image Title</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- end galeri -->

        <!-- foto kelulusan -->
        <div id="gallery" class="galeri">
            <div id="loading" style="display: none;">
                <div id="skeletonCount">
                    <!-- Skeleton Loading Placeholder -->
                    <div class="bg-gray-500 border-2 border-gray-100 rounded-md mb-4 p-4 flex items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                        <div class="flex-1">
                            <div class="w-3/4 h-4 bg-gray-300 rounded-md mb-2"></div>
                            <div class="w-1/2 h-3 bg-gray-300 rounded-md"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative px-5 mt-5 mb-10">
                <!-- Prev Button -->
                <button onclick="scrollPrev()"
                    class="absolute left-2 sm:left-4 md:left-6 lg:left-8 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white shadow-md rounded-full p-2 sm:p-3 transition-all duration-300">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Next Button -->
                <button onclick="scrollNext()"
                    class="absolute right-2 sm:right-4 md:right-6 lg:right-8 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white shadow-md rounded-full p-2 sm:p-3 transition-all duration-300">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div class="overflow-hidden rounded-md">
                    <div id="slider" class="flex gap-4 sm:gap-6 cursor-grab active:cursor-grabbing"
                        onmousedown="touchStart(event)" onmousemove="touchMove(event)" onmouseup="touchEnd()"
                        onmouseleave="touchEnd()" ontouchstart="touchStart(event)" ontouchmove="touchMove(event)"
                        ontouchend="touchEnd()">
                        <!-- Images Loop (Replace this with your dynamic image list) -->
                        @foreach ($graduations as $graduation)
                            @if (true)
                                {{ $graduation }}


                                <div class="flex-shrink-0 w-[100%] sm:w-[100%] md:w-[30.5%] lg:w-[23.5%]"
                                    onclick="openModal(image)">
                                    <div
                                        class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer">
                                        <div class="absolute inset-0 bg-gray-200 animate-pulse"></div>
                                        <div class="w-full h-full">
                                            <img src="{{ asset('images/galleries/' . $graduation->image) }}"
                                                alt="Image title"
                                                class="w-full h-auto transform group-hover:scale-105 transition-transform duration-300" />
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                            <h3
                                                class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">
                                                {{ $graduation->title }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- Repeat the above block for each image -->
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="modal" style="display: none;"
                class="fixed inset-0 z-[60] overflow-hidden bg-black bg-opacity-80 transition-all duration-300"
                onclick="closeModal()">
                <div class="flex items-center justify-center min-h-screen p-4">
                    <button type="button"
                        class="absolute top-2 right-2 sm:top-3 sm:right-3 z-[70] text-white hover:text-gray-200"
                        onclick="closeModal()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="transform transition-all duration-300 max-w-4xl w-full md:w-1/2" id="modalContent">
                        <img src="your-selected-image-src.jpg" alt="Selected Image Title"
                            class="w-full rounded-lg shadow-xl" />
                        <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2">
                            Selected Image Title
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- end kelulusa -->
</body>

</html>


<!-- galeri script -->
<script>
    // JavaScript for opening and closing the modal (you can replace this with your own logic)
    const modal = document.getElementById('modal');
    const closeModalButton = document.getElementById('closeModal');

    // Open Modal (you can add event listeners or JavaScript to open modal when an image is clicked)
    function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('block');
    }

    // Close Modal
    closeModalButton.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.classList.remove('block');
    });
</script>
<!-- end galeri script -->


<!-- foto kelulusan script -->
<script>
    let images = []; // Replace with your actual image list
    let loadedImages = new Set();
    let selectedImage = null;
    let currentIndex = 0;
    let isVisible = false;
    let modalVisible = false;
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;

    window.onload = function() {
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
            isVisible = true;
        }, 2000);
    };

    function onImageLoad(index) {
        loadedImages.add(index);
    }

    function openModal(image) {
        selectedImage = image;
        currentIndex = images.findIndex(img => img.id === image.id);
        setTimeout(function() {
            modalVisible = true;
            document.getElementById('modal').style.display = 'block';
        }, 50);
    }

    function closeModal() {
        modalVisible = false;
        setTimeout(function() {
            selectedImage = null;
            document.getElementById('modal').style.display = 'none';
        }, 300);
    }

    function touchStart(e) {
        isDragging = true;
        startPos = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
        const slider = document.getElementById('slider');
        slider.style.transition = 'none';
    }

    function touchMove(e) {
        if (!isDragging) return;
        const currentPosition = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
        const diff = currentPosition - startPos;
        const slider = document.getElementById('slider');
        const maxTranslate = -(slider.scrollWidth - slider.offsetWidth);

        currentTranslate = Math.max(Math.min(prevTranslate + diff, 0), maxTranslate);
        updateSliderPosition();
    }

    function touchEnd() {
        isDragging = false;
        prevTranslate = currentTranslate;
        const slider = document.getElementById('slider');
        slider.style.transition = 'transform 0.3s ease';
    }

    function updateSliderPosition() {
        const slider = document.getElementById('slider');
        if (slider) {
            slider.style.transform = `translateX(${currentTranslate}px)`;
        }
    }

    function scrollPrev() {
        const slider = document.getElementById('slider');
        const itemWidth = slider.offsetWidth;
        currentTranslate = Math.min(currentTranslate + itemWidth, 0);
        prevTranslate = currentTranslate;
        slider.style.transition = 'transform 0.3s ease';
        updateSliderPosition();
    }

    function scrollNext() {
        const slider = document.getElementById('slider');
        const itemWidth = slider.offsetWidth;
        const maxTranslate = -(slider.scrollWidth - slider.offsetWidth);
        currentTranslate = Math.max(currentTranslate - itemWidth, maxTranslate);
        prevTranslate = currentTranslate;
        slider.style.transition = 'transform 0.3s ease';
        updateSliderPosition();
    }
</script>
<!-- end foto kelulusan -->





<!-- form kontak -->
<section id="kontak">
    <div class="min-h-screen bg-gray-50 mt-5 py-5 px-4 sm:px-6 lg:px-8 mb-10">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-3xl font-bold text-blue-500 mb-3">Hubungi Kami</h2>
            <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4"></div>
            <p class="text-center text-gray-600 mb-10">Jangan ragu untuk menghubungi kami melalui informasi kontak di
                bawah ini</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <div class="space-y-7 ms-5">
                        <div class="flex items-start space-x-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold">Alamat:</h3>
                                <p class="text-gray-600">Perum Puri Ciawi Kencana Blok J3,<br>Pasirjuni, Kec. Ciawi,
                                    Kab. Tasikmalaya,<br>Jawa Barat 46156</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold">Email:</h3>
                                <p class="text-gray-600">tsukubaindonesia@gmail.com</p>
                            </div>
                        </div>

                        <div>
                            <h3 class="font-semibold mb-3 ms-5">Sosial Media:</h3>
                            <div class="flex space-x-6 ms-6">
                                <a href="https://www.tiktok.com/@tsukuba.indonesia"
                                    class="w-10 h-10 flex items-center justify-center bg-black text-white rounded-full hover:bg-gray-900"
                                    target="_blank">T</a>
                                <a href="https://www.instagram.com/lpk.tsukubaindonesia/"
                                    class="w-10 h-10 flex items-center justify-center bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-500 text-white rounded-full"
                                    target="_blank">I</a>
                                <a href="https://wa.me/6282316396737"
                                    class="w-10 h-10 flex items-center justify-center bg-green-500 text-white rounded-full hover:bg-green-700"
                                    target="_blank">W</a>
                            </div>
                        </div>

                        <div class="card rounded-2xl">
                            <div class="mt-6">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9013908491333!2d108.14592479999999!3d-7.137400899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f495efa140885%3A0xdf0a87b6588b1161!2sPerum%20Puri%20Ciawi%20Kencana!5e0!3m2!1sen!2sid!4v1736971326002!5m2!1sen!2sid"
                                    width="95%" height="270" style="border:0;" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <form class="space-y-6">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="no" class="block text-sm font-medium text-gray-700">Nomor Ponsel</label>
                            <input type="text" id="no" name="nomor-ponsel"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="pesan" name="pesan"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500"
                                rows="4"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600">Kirim</button>
                            <label class="tw-text-sm tw-font-medium tw-text-gray-700">Nomor Ponsel</label>
                            <input type="text" id="no" name="nomor-ponsel"
                                class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                        <div>
                            <label for="email"
                                class="tw-block tw-text-sm tw-font-medium tw-text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500">
                        </div>
                        <div>
                            <label for="pesan"
                                class="tw-block tw-text-sm tw-font-medium tw-text-gray-700">Pesan</label>
                            <textarea id="pesan" name="pesan"
                                class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500"
                                rows="4"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="tw-bg-blue-500 tw-text-white tw-py-2 tw-px-6 tw-rounded-md hover:tw-bg-blue-600">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end  form-->


</body>

</html>

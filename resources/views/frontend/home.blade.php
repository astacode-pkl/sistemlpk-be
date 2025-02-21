@extends('frontend.app')
@section('content')
    <!-- hero -->
    <div class="relative h-screen overflow-hidden">
        <!-- Overlay -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center z-10">
            <h1 class="text-3xl font-semibold">
                {{ $companyprofile->name }} <br />{{ $companyprofile->slogan }}
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
        <div id="carousel" class="relative h-screen w-full bg-white flex items-center brightness-50">
            <div id="carousel-body" class="flex w-full transition-transform duration-700">
                @foreach($heroes as $hero)
                    <div class="min-w-full flex justify-center items-center h-screen">
                        <img src="{{ asset('images/heroes/' . $hero->image) }}" class="object-cover h-full w-full"
                            alt="Slide 1">
                    </div>
                @endforeach
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
            <div class="flex justify-center items-center col-span-1 md:col-span-1 md:order-2 order-1" data-aos="fade-up"
                data-aos-delay="200">
                <img src="{{ asset('images/companyprofile/'.$companyprofile->advertisement) }}" alt="misi"
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
                <p class="mt-4 text-gray-700 leading-relaxed text-center md:text-left whitespace-pre-line">
                    {{ $companyprofile->vision }}
                </p>
                <h3 class="font-semibold text-lg text-gray-800 text-center mt-5 ">
                    Misi
                </h3>
                <p class="mt-4 text-gray-700 leading-relaxed whitespace-pre-line">
                    {{ $companyprofile->mission }}
                </p>
            </div>
        </div>
    </div>
    <!-- end visi misi -->

    {{-- Gallery --}}
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-3xl font-bold text-blue-500 mb-3 animate-fade-in" data-aos="fade-up">
            Galeri
        </h2>
        <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4 animate-slide-up" data-aos="fade-up">
        </div>
        @foreach ($categories as $category)
        @if ($category->title == "Kelulusan")
        <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">{{ $category->title }}</p>
            <x-frontend.graduation-photos >
        @foreach ($category->galleries as $gallery)
                        <div class="flex-shrink-0 w-[100%] md:w-[30.5%] lg:w-[23.5%] cursor-pointer">
                            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full"
                                onclick="openModal({{$gallery->id}})">
                                <img src="{{ asset('images/galleries/' . $gallery->image) }}"
                                    alt="{{ $gallery->title }}" id="img"
                                    class="w-full h-auto transform group-hover:scale-105 transition-transform duration-300" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                    <h3
                                        class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">
                                        {{ $category->title }}</h3>
                                </div>
                            </div>
                        </div>
                @endforeach
                    </x-frontend.graduation-photos>
                @else
                 <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">{{ $category->title }}</p>

                    <x-frontend.other-photos>
                        @foreach ($category->galleries as $gallery)
                            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer"
                                onclick="openModalOtherPhotos('{{ $gallery->id }}')">
                                <img src="{{ asset('images/galleries/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                    class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300">
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                    <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">{{ $gallery->title }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </x-frontend.other-photos>
            @endif
            @endforeach
        <div class="flex justify-center">
            <a href="/galeri">
                <button type="button"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-lg rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-transparent hover:scale-105 hover:text-blue-600 hover:border hover:border-blue-600 disabled:opacity-50 disabled:pointer-events-none font-semibold hover:transition duration-700">
                    Lihat Semua
                </button>
            </a>
        </div>
    </div>
    {{-- End Gallery --}}

    {{-- Program --}}
    <div class="max-w-7xl mx-auto mt-14"></div>
    <h2 class="text-center text-3xl font-bold text-blue-500 mb-3 animate-fade-in" data-aos="fade-up">Program</h2>
    <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4 animate-slide-up" data-aos="fade-up"></div>
    <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">Program {{ $companyprofile->name }}
    </p>
    <div class="card-container grid grid-cols-1 md:grid-cols-2 gap-8 px-8">
        @foreach ($programs as $program)
            <div class="flex flex-col bg-gray-50 border shadow-sm rounded-xl hover:drop-shadow-lg transition duration-500 hover:scale-110 group"
                data-aos="fade-up">
                <div class="p-4 md:p-7">
                    <img src="{{ asset('images/programs/' . $program->image) }}" alt="program"
                        class="rounded-lg mb-3 group-hover:brightness-90 brightness-75 transition duration-200">
                    <h3 class="text-xl font-bold text-blue-600 transition duration-200">
                        {{ $program->title }}
                    </h3>
                    <p class="mt-2 text-gray-600 font-semibold ">
                        {{ $program->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    {{-- End Program --}}

    <!-- proses -->
    <div class="max-w-7xl mx-auto mt-14">
        <h2 class="text-center text-3xl font-bold text-blue-500 mb-3 animate-fade-in" data-aos="fade-up">
            Proses ke jepang
        </h2>
        <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4 animate-slide-up" data-aos="fade-up"></div>
        <p class="text-center text-gray-600 mb-10 animate-fade-in" data-aos="fade-up">
            Langkah langkah sebelum ke jepang
        </p>

        <!-- step -->
        <div class="bg-white  rounded-lg p-6 flex items-center justify-center flex-col">
            <ul class="flex items-center justify-center gap-4 mb-6 cursor-pointer">
                <li class="flex items-center" data-step="1">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">1</span>
                    <span class="ml-4 text-sm font-medium">{{ $companyprofile->name }}</span>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </li>
                <li class="flex items-center" data-step="2">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">2</span>
                    <span class="ml-4 text-sm font-medium">Seleksi</span>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </li>
                <li class="flex items-center" data-step="3">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">3</span>
                    <span class="ml-4 text-sm font-medium">Pelatihan</span>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </li>
                <li class="flex items-center" data-step="4">
                    <span
                        class="w-10 h-10 bg-gray-200 hover:bg-blue-600 active:bg-blue-600 rounded-full flex justify-center items-center text-lg font-bold">4</span>
                    <span class="ml-4 text-sm font-medium">Jepang</span>
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
    <!-- end proses -->

  <x-frontend.contact></x-frontend.contact>
  @push('scriptHero')
  <script src="{{ asset('frontend/js/scripthero.js') }}"></script>
  @endpush
  @push('scriptProses')
  <script src="{{ asset('frontend/js/scriptproses.js') }}"></script>
  @endpush
@endsection

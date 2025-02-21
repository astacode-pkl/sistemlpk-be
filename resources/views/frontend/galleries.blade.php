@extends('frontend.app')
@section('content')
    
    <x-frontend.breadcrumb :image="'frontend/img/hero.jpg'" :title="'Galeri'"></x-frontend.breadcrumb>
    @foreach ($categories as $category)
        @if ($category->title == "Kelulusan")
        <h3 class="text-center text-xl text-blue-600 font-semibold mb-10 animate-fade-in aos-init aos-animate" data-aos="fade-up">{{ $category->title }}</h3>
        @foreach ($category->galleries as $gallery)
            <x-frontend.graduation-photos >
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
                    </x-frontend.graduation-photos>
                @endforeach
                @else
        <h3 class="text-center text-xl text-blue-600 font-semibold mb-10 animate-fade-in aos-init aos-animate" data-aos="fade-up">{{ $category->title }}</h3>

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
@endsection

@extends('frontend.app')
@section('content')
    <!-- persyaratan -->
    <div>
        <x-frontend.breadcrumb :image="'frontend/img/program1.jpg'" :title="'Persyaratan'"></x-frontend.breadcrumb>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto p-4 space-y-8">
            <div class="max-w-4xl mx-auto p-4 space-y-8">
                @foreach ($programs as $program)
                    {{-- <div class="bg-white rounded-xl shadow-sm"> --}}
                        <div class="p-6">
                            <h2 class="text-2xl md:text-3xl font-semibold text-blue-600 text-center mb-5"
                                data-aos="fade-down">
                                {{ $program->title }}
                            </h2>
                            <!-- card -->

                            <div class="flex flex-wrap justify-start p-4 text-center gap-5 border rounded-lg shadow-lg">
                                <div class="w-full md:w-1/2">
                                    <img src="{{ asset('storage/' . $program->image) }}" alt="Description"
                                        class="w-full h-full rounded-lg mb-4 md:mb-0">
                                </div>
                                <div class="w-full md:w-[39%]">
                                    <div class="flex flex-col w-full">
                                        @foreach ($program->regulations as $regulation)
                                            <div
                                                class="flex items-center gap-x-2 mb-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                                                {!! $regulation->icon !!}
                                                <span
                                                    class="text-gray-600 text-start hover:text-gray-900">{{ $regulation->title }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                            <!-- Benefits Grid -->
                            <h3 class="text-2xl font-semibold mb-4 text-center text-blue-600 mt-16">Keuntungan
                                {{ $program->title }}</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @foreach ($program->benefits as $benefit)
                                    <div data-aos="fade-up" data-aos-duration="3000"
                                        class="flex flex-col items-center p-4 text-center border rounded-lg transition-all duration-300 hover:bg-blue-600 hover:transform hover:scale-105 hover:shadow-lg hover:text-white group">
                                        {!! $benefit->icon !!}
                                        <span class="text-sm">{{ $benefit->title }}</span>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    {{-- </div> --}}
                @endforeach

                <div class="flex justify-center mt-5 mb-5">
                    <nuxt-link to="https://tally.so/r/mOdErY" target="_blank">
                        <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-md rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-transparent hover:scale-105 hover:text-blue-600 hover:border hover:border-blue-600 disabled:opacity-50 disabled:pointer-events-none font-semibold hover:transition duration-700 mb-5">
                            Daftar Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

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
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            to="/" aria-current="page"
                            :class="{
                                'md:text-white': !isScrolled,
                                'md:text-gray-800': isScrolled
                            }">
                            Home
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
{{-- {{  $profile = Cache::get('companyprofile') }} --}}
    @yield('content')

    @vite('resources/js/app.js')
</body>

</html>

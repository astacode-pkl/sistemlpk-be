<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('storage/' . $companyProfile->logo_mark) }}" />
    @vite('resources/css/app.css')


    <title>{{ $companyProfile->name }}</title>
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
                    {{-- logo --}}
                    <img src="{{ asset('storage/' . $companyProfile->logo_mark) }}" alt="logo"
                        class="w-10">
                    <img src="{{ asset('storage/' . $companyProfile->logo_type) }}" alt="nama"
                        class="w-20">
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
            <div id="collapseContent"
                class="hs-collapse hidden overflow-hidden bg-white w-full md:bg-transparent rounded-lg px-10 pt-3 mt-5 md:mt-0 md:pt-0 lg:px-0 transition-all duration-300 basis-full grow md:block"
                aria-labelledby="collapseButton">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                    <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1 sm:text-gray-800 md:text-white"
                        id="navLinks">
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/" aria-current="page">
                            Home
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/persyaratan">
                            Persyaratan
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/galeri">
                            Galeri
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/kontak">
                            Kontak
                        </a>
                        <a class="p-2 flex items-center text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600"
                            href="/tentang">
                            Tentang
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- end navbar -->
    @yield('content')

    <!-- Footer -->
    <footer class="mt-auto bg-gray-900 w-full">
        <div class="mt-5 w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 justify-center">
                <div class="col-span-1 sm:col-span-2 lg:col-span-7">
                    <div class="space-y-6">
                        <div>
                            <div>

                                <a class="flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80"
                                    aria-label="Brand">Tentang</a>

                                <p
                                    class="mt-3 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 cursor-default">
                                    {{ $companyProfile->name }} didirikan pada bulan Agustus 2024 di
                                    Ciawi, Kabupaten Tasikmalaya, Jawa Barat Indonesia. dan
                                    telah mendapatkan izin resmi dari pemerintah Indonesia.
                                </p>
                                <div class="mt-4">
                                    <a class="flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80"
                                        aria-label="Brand">{{ $companyProfile->name }}</a>
                                    <p>
                                        <a
                                            class="inline-block mt-3 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 cursor-default">
                                            {{ $companyProfile->address }}</a>
                                    </p>
                                    <p>
                                        <a class="inline-block mt-3 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                            href="mailto:{{ $companyProfile->email }}">
                                            {{ $companyProfile->email }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 sm:col-span-1 lg:col-span-2">
                    <h4 class="font-semibold text-gray-100">Quick Link</h4>
                    <div class="mt-3 space-y-3">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="/">> Home</a>
                        </p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="/persyaratan">> Persyaratan</a>
                        </p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="/galeri">> Galeri</a>
                        </p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="/kontak">> Kontak</a>
                        </p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="/tentang">> Tentang</a>
                        </p>
                    </div>
                </div>

                <div class="col-span-1 sm:col-span-1 lg:col-span-3">
                    <h4 class="font-semibold text-gray-100">Media Sosial</h4>
                    <div class="mt-3 space-y-3">
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="{{ $companyProfile->instagram }}">Instagram</a>
                        </p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="{{ $companyProfile->tiktok }}">Tiktok</a>
                        </p>
                        <p>
                            <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                                href="{{ $companyProfile->whatsapp }}">Whatsapp</a>
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-center md:items-center sm:items-center text-center">
                <div class="flex justify-center items-center">
                    <p class="text-sm text-center text-gray-400">
                        &copy; 2025 {{ $companyProfile->name }} All Right Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    @stack('scriptHero')
    @stack('scriptProses')
    <script>
        // navbar script
        const header = document.getElementById('header');
        const collapseButton = document.getElementById('collapseButton');
        const collapseContent = document.getElementById('collapseContent');
        const navLinks = document.getElementById('navLinks');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-white/90', 'backdrop-blur-sm', 'md:text-gray-800');
                header.classList.remove('bg-white/0', 'backdrop-blur-0');
                navLinks.classList.remove('md:text-white');
                navLinks.classList.add('text-gray-800');
            } else {
                header.classList.add('bg-white/0', 'backdrop-blur-0');
                header.classList.remove('bg-white/90', 'backdrop-blur-sm', 'md:text-gray-800');
                navLinks.classList.remove('text-gray-800');
                navLinks.classList.add('md:text-white');
            }
        });

        collapseButton.addEventListener('click', () => {
            collapseContent.classList.toggle('hidden');
        });
    </script>
</body>

</html>

<div class="h-[30vh] w-full relative mb-10 shadow-md flex items-center justify-center">
        <div>
            <!-- Hero Content -->
            <div>
                <img src="{{ asset($image) }}" alt="Galeri" class="w-full h-full object-cover absolute inset-0" />
                <div class="absolute inset-0 bg-black opacity-60"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center gap-2">
                    <h1 class="text-white text-4xl font-semibold z-10 text-center" data-aos="fade-right">
                        {{ $title }}
                    </h1>
                    <nav class="text-white text-base sm:text-lg font-semibold z-10 animate-slide-in-right">
                        <a href="/" class="text-white hover:text-blue-100">Home</a>
                        <span class="mx-2">></span>
                        <span class="text-blue-400">{{ $title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
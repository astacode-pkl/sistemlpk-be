
    <div class="galeri">
        <div class="relative px-5 mt-5 mb-10" id="gallery">
            <div class="overflow-hidden rounded-md">
                <div id="slider" class="flex gap-4 transition-transform duration-300 container mx-auto ease-in-out">
                    {{$slot}}   
                </div>
            </div>
            <!-- Prev Button -->
            <button id="prevButton"
                class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white shadow-md rounded-full p-2 sm:p-3 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Next Button -->
            <button id="nextButton"
                class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white shadow-md rounded-full p-2 sm:p-3 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 z-50 overflow-hidden bg-black bg-opacity-80 hidden">
            <div class="flex items-center justify-center min-h-screen p-4">
                <button type="button" class="absolute top-2 right-2 text-white hover:text-gray-200" id="closeModal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="transform transition-all duration-300 max-w-4xl w-full md:w-1/2">
                    <img id="modalImage" class="w-full rounded-lg shadow-xl" />
                    <h3 id="modalTitle"
                        class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2"></h3>
                </div>
            </div>
        </div>
    </div>
<script>
    const gallery = document.getElementById('gallery');
    const slider = document.getElementById('slider');
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const closeModalButton = document.getElementById('closeModal');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    let currentSlide = 0;
    const slidesToShow = { mobile: 1, tablet: 3, desktop: 4 };

    // Ambil data dari Laravel dengan aman
    const images = {!! json_encode($galleries) !!};

    console.log("Data images dari Laravel:", images); // Debugging

    function updateSliderPosition() {
        if (!images || images.length === 0) return;

        const slideWidth = slider.children[0].offsetWidth;
        const gap = 16;
        const offset = -(currentSlide * (slideWidth + gap));

        slider.style.transform = `translateX(${offset}px)`;

        prevButton.disabled = currentSlide === 0;
        nextButton.disabled = currentSlide >= images.length - getSlidesToShow();

        prevButton.style.opacity = prevButton.disabled ? '0.5' : '1';
        nextButton.style.opacity = nextButton.disabled ? '0.5' : '1';
    }

    function getSlidesToShow() {
        if (window.innerWidth >= 1024) return slidesToShow.desktop;
        if (window.innerWidth >= 768) return slidesToShow.tablet;
        return slidesToShow.mobile;
    }

    function openModal(imageId) {
        const image = images.find(img => img.id == imageId); // Gunakan == untuk menghindari tipe data yang berbeda
        if (!image) return;

        modalImage.src = "/images/galleries/" + image.image; // Pastikan path benar
        modalTitle.textContent = image.title;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    closeModalButton.addEventListener('click', closeModal);

    // Tutup modal jika klik di luar gambar
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Tutup modal dengan tombol ESC
    document.addEventListener('keydown', (event) => {
        if (event.key === "Escape") {
            closeModal();
        }
    });

    // Navigasi tombol slider
    prevButton.addEventListener('click', () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateSliderPosition();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentSlide < images.length - getSlidesToShow()) {
            currentSlide++;
            updateSliderPosition();
        }
    });

    window.addEventListener('resize', updateSliderPosition);

    updateSliderPosition();
</script>

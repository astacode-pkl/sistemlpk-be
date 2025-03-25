<div class="container mx-auto p-5" data-aos="fade-up">
    <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        {{ $slot }}
    </div>
</div>

<!-- Modal -->
<div id="modalOtherPhotos" class="fixed inset-0 z-[60] overflow-hidden bg-black bg-opacity-80 transition-all duration-300 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <button type="button" class="absolute top-2 right-2 sm:top-3 sm:right-3 z-[70] text-white hover:text-gray-200" id="closeModalOtherPhotos">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="transform transition-all duration-300 max-w-4xl w-80 md:w-96 opacity-0 scale-95" id="modalContentOtherPhotos">
            <img id="modalImageOtherPhotos" class="w-full rounded-lg shadow-xl" />
            <h3 id="modalTitleOtherPhotos" class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2"></h3>
        </div>
    </div>
</div>

<script>
    const modalOtherPhotos = document.getElementById("modalOtherPhotos");
    const modalImageOtherPhotos = document.getElementById("modalImageOtherPhotos");
    const modalTitleOtherPhotos = document.getElementById("modalTitleOtherPhotos");
    const modalContentOtherPhotos = document.getElementById("modalContentOtherPhotos");
    const closeModalOtherPhotos = document.getElementById("closeModalOtherPhotos");

    const imagesOtherPhotos = {!! json_encode($galleries) !!};
    console.log("Data images other photos dari Laravel:", imagesOtherPhotos);

    function openModalOtherPhotos(imageId) {
        const image = imagesOtherPhotos.find(img => img.id == imageId);
        if (!image) return;

        modalImageOtherPhotos.src = "/images/galleries/" + image.image;
        modalTitleOtherPhotos.textContent = image.title;
        modalOtherPhotos.classList.remove('hidden');
        setTimeout(() => {
            modalContentOtherPhotos.classList.remove('opacity-0', 'scale-95');
            modalContentOtherPhotos.classList.add('opacity-100', 'scale-100');
        }, 50);
    }

    closeModalOtherPhotos.addEventListener("click", () => {
        closeModal();
    });

    modalOtherPhotos.addEventListener("click", (event) => {
        if (event.target === modalOtherPhotos) {
            closeModal();
        }
    });

    function closeModal() {
        modalContentOtherPhotos.classList.remove('opacity-100', 'scale-100');
        modalContentOtherPhotos.classList.add('opacity-0', 'scale-95');
        setTimeout(() => {
            modalOtherPhotos.classList.add("hidden");
        }, 300);
    }
</script>
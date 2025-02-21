<div class="container mx-auto p-5">
    <div id="gallery" class="grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        {{ $slot }}
    </div>
</div>

        <!-- Modal -->
        <div id="modalOtherPhotos" class="fixed inset-0 z-50 overflow-hidden bg-black bg-opacity-80 hidden">
            <div class="flex items-center justify-center min-h-screen p-4">
                <button type="button" class="absolute top-2 right-2 text-white hover:text-gray-200" id="closeModalOtherPhotos">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="transform transition-all duration-300 max-w-4xl w-full md:w-1/2">
                    <img id="modalImageOtherPhotos" class="w-full rounded-lg shadow-xl" />
                    <h3 id="modalTitleOtherPhotos"
                        class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2"></h3>
                </div>
            </div>
        </div>


<script>
    const modalOtherPhotos = document.getElementById("modalOtherPhotos");
    const modalImageOtherPhotos = document.getElementById("modalImageOtherPhotos");
    const modalTitleOtherPhotos = document.getElementById("modalTitleOtherPhotos");
    const closeModalOtherPhotos = document.getElementById("closeModalOtherPhotos");

    const imagesOtherPhotos = {!! json_encode($galleries) !!};
    console.log("Data images other photos dari Laravel:", images); // Debugging

    function openModalOtherPhotos(imageId) {
        const image = imagesOtherPhotos.find(img => img.id == imageId); // Gunakan == untuk menghindari tipe data yang berbeda
        if (!image) return;

        modalImageOtherPhotos.src = "/images/galleries/" + image.image; // Pastikan path benar
        modalTitleOtherPhotos.textContent = image.title;
        modalOtherPhotos.classList.remove('hidden');
    }

    closeModalOtherPhotos.addEventListener("click", () => {
        modalOtherPhotos.classList.add("hidden");
    });

    // Close modal when clicking outside the image
    modalOtherPhotos.addEventListener("click", (event) => {
        if (event.target === modalOtherPhotos) {
            modalOtherPhotos.classList.add("hidden");
        }
    });
</script>
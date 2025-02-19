<div class="container mx-auto p-5">
    <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <!-- images -->
        @foreach ($otherphotos as $otherphoto)
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer"
                onclick="openModal({{ $otherphoto->id }})">
                <img src="{{ asset('images/galleries/' . $otherphoto->image) }}" alt="{{ $otherphoto->title }}"
                    class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300">
                <div
                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                    <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">{{ $otherphoto->title }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 z-50 overflow-hidden bg-black bg-opacity-80 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <button type="button" class="absolute top-2 right-2 text-white hover:text-gray-200" id="closeModal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="transform transition-all duration-300 max-w-4xl w-full md:w-1/2">
            <img id="modalImage" class="w-full rounded-lg shadow-xl" />
            <h3 id="modalTitle" class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2">
            </h3>
        </div>
    </div>
</div>

<script>
    const gallery = document.getElementById("gallery");
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modalImage");
    const modalTitle = document.getElementById("modalTitle");
    const closeModal = document.getElementById("closeModal");

    // Function create image elements
    function createImageElement(image) {
        const container = document.createElement("div");
        container.className =
            "group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer";
        container.onclick = () => openModal(image);

        const img = document.createElement("img");
        img.src = image.src;
        img.alt = image.title;
        img.className =
            "w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300";

        const overlay = document.createElement("div");
        overlay.className =
            "absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center";
        overlay.innerHTML =
            `<h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">${image.title}</h3>`;

        container.appendChild(img);
        container.appendChild(overlay);
        return container;
    }

    // Function open modal
    function openModal(image) {
        modalImage.src = image.src;
        modalTitle.textContent = image.title;
        modal.classList.remove("hidden");
    }

    // Close modal 
    closeModal.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    images.forEach((image) => {
        const imageElement = createImageElement(image);
        gallery.appendChild(imageElement);
    });
</script>

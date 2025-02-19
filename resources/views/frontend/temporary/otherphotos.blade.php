<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
    <div
      class="h-[30vh] w-full relative mb-10 shadow-md flex items-center justify-center"
    >
      <div>
        <!-- Hero Content -->
        <div>

          <img
            src=""
            alt="Galeri"
            class="w-full h-full object-cover absolute inset-0"
          />
          <div class="absolute inset-0 bg-black opacity-60"></div>
          <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center gap-2"
          >
            <h1
              class="text-white text-4xl font-semibold z-10 text-center"
              data-aos="fade-right"
            >
              Galeri
            </h1>
            <nav
              class="text-white text-base sm:text-lg font-semibold z-10 animate-slide-in-right"
            >
              <a href="/" class="text-white hover:text-blue-100">Home</a>
              <span class="mx-2">></span>
              <span class="text-blue-400">Galeri</span>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto p-5">
      <div
        id="gallery"
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4"
      >
        <!-- images -->
      </div>
    </div>

    <!-- Modal -->
    <div
      id="modal"
      class="fixed inset-0 z-50 overflow-hidden bg-black bg-opacity-80 hidden"
    >
      <div class="flex items-center justify-center min-h-screen p-4">
        <button
          type="button"
          class="absolute top-2 right-2 text-white hover:text-gray-200"
          id="closeModal"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
        </button>

        <div
          class="transform transition-all duration-300 max-w-4xl w-full md:w-1/2"
        >
          <img id="modalImage" class="w-full rounded-lg shadow-xl" />
          <h3
            id="modalTitle"
            class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2"
          ></h3>
        </div>
      </div>
    </div>

    <script>
      const images = [
        @foreach ($activities as $gallery)
        
        {
          src: "{{ asset('images/galleries/' . $gallery->image) }}",
          title: "{{ asset($gallery->title) }}",
        },
        @endforeach
        // {
        //   src: "https://lpktsukuba.vercel.app/_nuxt/FOTO%20LAINNYA%20(9).CqK4IP8i.jpeg",
        //   title: "Kegiatan LPK Tsukuba",
        // },
        // {
        //   src: "https://lpktsukuba.vercel.app/_nuxt/FOTO%20LAINNYA%20(9).CqK4IP8i.jpeg",
        //   title: "Kegiatan LPK Tsukuba",
        // },
        // { src: "path/to/image4.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image5.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image6.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image7.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image8.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image9.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image10.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image11.jpeg", title: "Kegiatan LPK Tsukuba" },
        // { src: "path/to/image12.jpeg", title: "Kegiatan LPK Tsukuba" },
      ];

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
        overlay.innerHTML = `<h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">${image.title}</h3>`;

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
  </body>
</html>

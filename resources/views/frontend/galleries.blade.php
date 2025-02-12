@extends('frontend.app')
@section('content')
    <!-- galeri -->
    <div class="galeri">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4 sm:gap-6 items-center mx-3 sm:mx-5 mt-5 mb-10">
            <!-- Image Card -->
            <div
                class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer">
                <div class="absolute inset-0 bg-gray-200"></div>
                <div class="w-full h-full">
                    <img src="your-image-src.jpg" alt="Image title"
                        class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300" />
                </div>
                <div
                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                    <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">Image
                        Title</h3>
                </div>
            </div>
            <!-- Repeat the above block for each image -->

        </div>

        <!-- Modal -->
        <div class="fixed inset-0 z-[60] overflow-hidden bg-black bg-opacity-80 transition-all duration-300" id="modal">
            <div class="flex items-center justify-center min-h-screen p-4">
                <button type="button"
                    class="absolute top-2 right-2 sm:top-3 sm:right-3 z-[70] text-white hover:text-gray-200"
                    id="closeModal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="transform transition-all duration-300 max-w-4xl w-80 md:w-96" id="modalContent">
                    <img src="your-selected-image-src.jpg" alt="Selected Image Title" class="w-full rounded-lg shadow-xl" />
                    <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2">
                        Selected Image Title</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end galeri -->
    

    <!-- galeri script -->
    <script>
        // JavaScript for opening and closing the modal (you can replace this with your own logic)
        const modal = document.getElementById('modal');
        const closeModalButton = document.getElementById('closeModal');

        // Open Modal (you can add event listeners or JavaScript to open modal when an image is clicked)
        function openModal() {
            modal.classList.remove('hidden');
            modal.classList.add('block');
        }

        // Close Modal
        closeModalButton.addEventListener('click', function() {
            modal.classList.add('hidden');
            modal.classList.remove('block');
        });
    </script>
    <!-- end galeri script -->
@endsection

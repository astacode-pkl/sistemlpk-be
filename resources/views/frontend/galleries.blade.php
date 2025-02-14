@extends('frontend.app')
@section('content')
    <!-- foto kelulusan -->
    <div id="gallery" class="galeri">
        <div id="loading" style="display: none;">
            <div id="skeletonCount">
                <!-- Skeleton Loading Placeholder -->
                <div class="bg-gray-500 border-2 border-gray-100 rounded-md mb-4 p-4 flex items-center">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                    <div class="flex-1">
                        <div class="w-3/4 h-4 bg-gray-300 rounded-md mb-2"></div>
                        <div class="w-1/2 h-3 bg-gray-300 rounded-md"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative px-5 mt-5 mb-10">
            <!-- Prev Button -->
            <button onclick="scrollPrev()"
                class="absolute left-2 sm:left-4 md:left-6 lg:left-8 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white shadow-md rounded-full p-2 sm:p-3 transition-all duration-300">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Next Button -->
            <button onclick="scrollNext()"
                class="absolute right-2 sm:right-4 md:right-6 lg:right-8 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white shadow-md rounded-full p-2 sm:p-3 transition-all duration-300">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div class="overflow-hidden rounded-md">
                <div id="slider" class="flex gap-4 sm:gap-6 cursor-grab active:cursor-grabbing"
                    onmousedown="touchStart(event)" onmousemove="touchMove(event)" onmouseup="touchEnd()"
                    onmouseleave="touchEnd()" ontouchstart="touchStart(event)" ontouchmove="touchMove(event)"
                    ontouchend="touchEnd()">
                    <!-- Images Loop (Replace this with your dynamic image list) -->
                    @foreach ($graduations as $graduation)
                        <div class="flex-shrink-0 w-[100%] sm:w-[100%] md:w-[30.5%] lg:w-[23.5%]"
                            onclick="openModal(image)">
                            <div
                                class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer">
                                <div class="absolute inset-0 bg-gray-200 animate-pulse"></div>
                                <div class="w-full h-full">
                                    <img src="{{ asset('images/galleries/' . $graduation->image) }}"
                                        alt="{{ $graduation->title }}"
                                        class="w-full h-auto transform group-hover:scale-105 transition-transform duration-300" />
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                    <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">
                                        {{ $graduation->title }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Repeat the above block for each image -->
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal"
            class="fixed inset-0 z-[60] overflow-hidden bg-black bg-opacity-80 transition-all duration-300 hidden"
            onclick="closeModal()">
            <div class="flex items-center justify-center min-h-screen p-4">
                <button type="button"
                    class="absolute top-2 right-2 sm:top-3 sm:right-3 z-[70] text-white hover:text-gray-200"
                    onclick="closeModal()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="transform transition-all duration-300 max-w-4xl w-full md:w-1/2" id="modalContent">
                    <img src="your-selected-image-src.jpg" alt="Selected Image Title" class="w-full rounded-lg shadow-xl" />
                    <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold mt-4 text-center px-2">
                        Selected Image Title
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end kelulusa -->

    <!-- foto kelulusan script -->
    <script>
        let images = []; // Replace with your actual image list
        let loadedImages = new Set();
        let selectedImage = null;
        let currentIndex = 0;
        let isVisible = false;
        let modalVisible = false;
        let isDragging = false;
        let startPos = 0;
        let currentTranslate = 0;
        let prevTranslate = 0;

        window.onload = function() {
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
                isVisible = true;
            }, 2000);
        };

        function onImageLoad(index) {
            loadedImages.add(index);
        }

        function openModal(image) {
            selectedImage = image;
            currentIndex = images.findIndex(img => img.id === image.id);
            setTimeout(function() {
                modalVisible = true;
                document.getElementById('modal').style.display = 'block';
            }, 50);
        }

        function closeModal() {
            modalVisible = false;
            setTimeout(function() {
                selectedImage = null;
                document.getElementById('modal').style.display = 'none';
            }, 300);
        }

        function touchStart(e) {
            isDragging = true;
            startPos = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
            const slider = document.getElementById('slider');
            slider.style.transition = 'none';
        }

        function touchMove(e) {
            if (!isDragging) return;
            const currentPosition = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
            const diff = currentPosition - startPos;
            const slider = document.getElementById('slider');
            const maxTranslate = -(slider.scrollWidth - slider.offsetWidth);

            currentTranslate = Math.max(Math.min(prevTranslate + diff, 0), maxTranslate);
            updateSliderPosition();
        }

        function touchEnd() {
            isDragging = false;
            prevTranslate = currentTranslate;
            const slider = document.getElementById('slider');
            slider.style.transition = 'transform 0.3s ease';
        }

        function updateSliderPosition() {
            const slider = document.getElementById('slider');
            if (slider) {
                slider.style.transform = `translateX(${currentTranslate}px)`;
            }
        }

        function scrollPrev() {
            const slider = document.getElementById('slider');
            const itemWidth = slider.offsetWidth;
            currentTranslate = Math.min(currentTranslate + itemWidth, 0);
            prevTranslate = currentTranslate;
            slider.style.transition = 'transform 0.3s ease';
            updateSliderPosition();
        }

        function scrollNext() {
            const slider = document.getElementById('slider');
            const itemWidth = slider.offsetWidth;
            const maxTranslate = -(slider.scrollWidth - slider.offsetWidth);
            currentTranslate = Math.max(currentTranslate - itemWidth, maxTranslate);
            prevTranslate = currentTranslate;
            slider.style.transition = 'transform 0.3s ease';
            updateSliderPosition();
        }
    </script>
    <!-- end foto kelulusan -->


    <!-- galeri -->
    <div class="galeri">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4 sm:gap-6 items-center mx-3 sm:mx-5 mt-5 mb-10">
            <!-- Image Card -->
            @foreach ($activities as $activity)
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300 h-full cursor-pointer">
                    <div class="absolute inset-0 bg-gray-200"></div>
                    <div class="w-full h-full">
                        <img src="{{ asset('images/galleries/' . $activity->image) }}" alt="{{ $activity->title }}"
                            class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div
                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                        <h3 class="text-white text-base sm:text-lg md:text-xl font-semibold text-center px-4">
                            {{ $activity->title }}</h3>
                    </div>
                </div>
            @endforeach
            <!-- Repeat the above block for each image -->

        </div>

        <!-- Modal -->
        <div class="fixed inset-0 z-[60] overflow-hidden bg-black bg-opacity-80 transition-all duration-300 hidden"
            id="modal">
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

// hero script
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carousel-body");
    const slides = document.querySelectorAll("#carousel-body div");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let index = 0;
    const totalSlides = slides.length;
    let autoPlayInterval;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    function goToNextSlide() {
        index = (index + 1) % totalSlides;
        updateCarousel();
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(goToNextSlide, 4000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    nextBtn.addEventListener("click", () => {
        goToNextSlide();
        stopAutoPlay();
        startAutoPlay();
    });

    prevBtn.addEventListener("click", () => {
        index = (index - 1 + totalSlides) % totalSlides;
        updateCarousel();
        stopAutoPlay();
        startAutoPlay();
    });

    startAutoPlay();

    carousel.closest("#carousel").addEventListener("mouseover", () => {
        stopAutoPlay();
    });

    carousel.closest("#carousel").addEventListener("mouseout", () => {
        startAutoPlay();
    });
});

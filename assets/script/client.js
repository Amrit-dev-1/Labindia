const slides = document.querySelectorAll(".slide-2");
const dots = document.querySelectorAll(".dot");
let currentSlide = 0;
let isScrolling = false;

function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            gsap.to(slide, { duration: 0.5, opacity: 1, y: 0 });
            slide.classList.add("active");
        } else if (i < index) {
            gsap.to(slide, { duration: 0.5, opacity: 0, y: -100 });
            slide.classList.remove("active");
        } else {
            gsap.to(slide, { duration: 0.5, opacity: 0, y: 100 });
            slide.classList.remove("active");
        }
    });

    dots.forEach((dot, i) => {
        if (i === index) {
            dot.classList.add("active");
        } else {
            dot.classList.remove("active");
        }
    });
}

dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        showSlide(index);
        currentSlide = index;
    });
});

function handleScroll(event) {
    if (isScrolling) return;
    isScrolling = true;

    if (event.deltaY > 0) {
        // Scroll down
        currentSlide = (currentSlide + 1) % slides.length;
    } else {
        // Scroll up
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    }
    showSlide(currentSlide);

    setTimeout(() => {
        isScrolling = false;
    }, 1000); // Delay to prevent rapid slide changes
}

function autoSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

window.addEventListener("wheel", handleScroll);

document.addEventListener("DOMContentLoaded", () => {
    showSlide(currentSlide);
    setInterval(autoSlide, 100000); // Change slide every 3 seconds
});

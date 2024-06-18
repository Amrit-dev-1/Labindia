gsap.registerPlugin(ScrollTrigger);

window.addEventListener("load", () => {
    gsap
        .timeline({
            scrollTrigger: {
                trigger: ".wrapper",
                start: "top top",
                end: "+=150%",
                pin: true,
                scrub: true,
                markers: false
            }
        })
        .to(".image-container img", { 
            scale: 3, 
            z: 350,
            transformOrigin: "center center",
            ease: "power1.inOut"
        })
        .to(
            ".section.hero", {
                scale: 1.1,
                transformOrigin: "center center",
                ease: "power1.inOut"
            },
            "<"
        );

    setTimeout(() => {
        if (!hasScrolled()) {
            scrollToFirstContainer();
        }
    }, 3000);

    function hasScrolled() {
        // Check if the page has been scrolled
        return window.scrollY > 0;
    }

    function scrollToFirstContainer() {
        // Scroll to the first container
        const firstContainer = document.querySelector(".firstcontainer");
        if (firstContainer) {
            firstContainer.scrollIntoView({ behavior: "smooth" });
            firstContainer.addEventListener("scroll", () => {
                firstContainer.style.transition = "opacity 0.5s ease"; // Smooth transition
                firstContainer.style.opacity = "0"; // Fade out
                setTimeout(() => {
                    firstContainer.style.display = "none"; // Hide after fade out
                }, 500); // Wait for the transition to complete
            }, { once: true }); // Remove the event listener after it's triggered once
        }
    }
});

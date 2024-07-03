// document.addEventListener("DOMContentLoaded", function () {
// 	// Initialize GSAP and ScrollTrigger
// 	gsap.registerPlugin(ScrollTrigger);

// 	// Create the horizontal scroll animation
// 	const sections = gsap.utils.toArray(".panel");
// 	gsap.to(sections, {
// 		xPercent: -100 * (sections.length - 1),
// 		ease: "none",
// 		scrollTrigger: {
// 			trigger: ".custom-container",
// 			pin: true,
// 			scrub: 1,
// 			snap: 1 / (sections.length - 1),
// 			end: () => "+=" + document.querySelector(".custom-container").offsetWidth * (sections.length - 1)
// 		},
// 	});


// });


document.addEventListener("DOMContentLoaded", function () {
    // Initialize GSAP and ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Create the horizontal scroll animation
    const sections = gsap.utils.toArray(".panel");
    gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".custom-container",
            pin: true,
            scrub: 1,
            snap: 1 / (sections.length - 1),
            end: () => "+=" + document.querySelector(".custom-container").offsetWidth * (sections.length - 1)
        },
    });

    // Move and fade out the navbar after the custom container ends
    gsap.to(".navbar", {
        y: -100, // Move up
        opacity: 0, // Fade out
        scrollTrigger: {
            trigger: ".custom-container",
            start: "bottom bottom", // Start the animation when the bottom of the custom container reaches the bottom of the viewport
            end: "bottom top", // End the animation when the bottom of the custom container reaches the top of the viewport
            scrub: 1,
        }
    });

    // Fade out the last panel as it moves up
    gsap.to(".panel.fade-out", {
        y: -100, // Move up
        opacity: 0, // Fade out
        scrollTrigger: {
            trigger: ".custom-container",
            start: "bottom bottom", // Start the animation when the bottom of the custom container reaches the bottom of the viewport
            end: "bottom top", // End the animation when the bottom of the custom container reaches the top of the viewport
            scrub: 1,
        }
    });
});

const sections = gsap.utils.toArray(".panel");

// Horizontal scrolling animation
const horizontalScroll = gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".custom-container",
        pin: true,
        scrub: 1,
        snap: {
            snapTo: 1 / (sections.length - 1), // Snap to the closest panel
            duration: { min: 0.5, max: 1.5 }, // Increased duration range for the snap animation
            ease: "power3.inOut" // Easing for the snap animation
        },
        end: () => "+=" + document.querySelector(".custom-container").offsetWidth,
    },
});


gsap.registerPlugin(ScrollTrigger);

// Select elements to animate
const elementsToAnimate = document.querySelectorAll('.element-to-animate-1');

// Animation timeline
elementsToAnimate.forEach(element => {
  gsap.fromTo(element, {
    opacity: 0,
    x: -50
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    scrollTrigger: {
      trigger: element,
      start: 'top 80%', // Adjust based on when you want the animation to start
      end: 'bottom 10%', // Adjust based on when you want the animation to end
      scrub: true // Smoothly animate on scroll
    }
  });
});
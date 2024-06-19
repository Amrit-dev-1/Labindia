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
      ease: "power1.inOut" // Easing for the snap animation
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
    opacity: 1,
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

// Initialize GSAP and register the plugins
gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

// Create scroll-triggered animations
function createScrollAnimations() {
  // Select all wave-tube elements
  const waveTubes = document.querySelectorAll(".wave-tube");

  waveTubes.forEach((waveTube, index) => {
    const ball = waveTube.querySelector(".ball");
    const wavePath = waveTube.querySelector(".wave path");

    gsap.set(ball, {
      xPercent: -50, // Center the ball horizontally
      yPercent: -50, // Center the ball vertically
      transformOrigin: "center center", // Center of the ball as the transform origin
    });

    gsap.timeline({
      scrollTrigger: {
        trigger: waveTube,
        start: "top center",
        end: "bottom center",
        scrub: true,
      },
    })
      .to(ball, {
        duration: 2, // Adjust duration for a slower transition
        ease: "power1.inOut", // Smooth easing function
        motionPath: {
          path: wavePath,
          align: wavePath,
          alignOrigin: [0.5, 0.5],
        },
      });
  });
}

// Initialize animations
createScrollAnimations();

// Ensure GSAP is included in your project

// Define your animation using GSAP
gsap.to('.snake', {
  duration: 3, // Total duration of the animation in seconds
  ease: 'none', // Linear movement
  y: '-=100', // Move up by 100px
  onComplete: function () {
    gsap.to('.snake', {
      duration: 2, // Duration of the second part of the animation
      ease: 'power1.inOut', // Ease in and out
      x: '+=200', // Move right by 200px
      onComplete: function () {
        // Animation complete
        gsap.to('.snake', {
          duration: 3, // Duration of the third part of the animation
          ease: 'power1.inOut', // Ease in and out
          y: '-=200', // Move up towards the circular image
          x: '+=200', // Move right towards the circular image
          onComplete: function () {
            // Final animation complete
            console.log('Animation complete');
          }
        });
      }
    });
  }
});

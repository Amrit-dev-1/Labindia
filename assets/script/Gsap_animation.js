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

	// Create separate ScrollTrigger for each element-to-animate-1
	gsap.utils.toArray(".element-to-animate-1").forEach((element) => {
		gsap.fromTo(element, {
			x: "100%",
			opacity: 0
		}, {
			x: "0%",
			opacity: 1,
			scrollTrigger: {
				trigger: element,
				start: "top 80%",
				end: "top 20%",
				scrub: true,
				markers: false // Remove markers after debugging
			}
		});
	});

	gsap.from(".Recommened-product", {
		scrollTrigger: {
		  trigger: ".Recommened-product",
		  start: "top 90%",
		  toggleActions: "play none none none"
		},
		x: 200,
		opacity: 0,
		duration: 1,
		ease: "power2.out"
	  });
	
	  // Animate the sidebar from right to left
	  gsap.from("#sidebar", {
		scrollTrigger: {
		  trigger: "#sidebar",
		  start: "top 80%",
		  toggleActions: "play none none none"
		},
		x: 200,
		opacity: 0,
		duration: 1,
		ease: "power2.out"
	  });
});
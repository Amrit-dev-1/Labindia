// Tab Section Button

function showSection(sectionNumber) {
	// Fade out all sections
	gsap.to(".news-section", {
		opacity: 0,
		duration: 0.3,
		onComplete: () => {
			// Hide all sections after animation completes
			document.querySelectorAll(".news-section").forEach((section) => {
				section.style.display = "none";
			});

			// Show the selected section
			const selectedSection = document.getElementById(
				`section-${sectionNumber}`
			);
			selectedSection.style.display = "block";

			// Fade in the selected section with animation
			gsap.to(selectedSection, {
				opacity: 1,
				duration: 0.3,
			});
		},
	});

	// Update title and description based on section
	switch (sectionNumber) {
		case 1:
			document.getElementById("section-title").textContent = "Blogs";
			document.getElementById("section-description").textContent =
				"Description for Blogs section...";
			break;
		case 2:
			document.getElementById("section-title").textContent = "Resources";
			document.getElementById("section-description").textContent =
				"Description for Resources section...";
			break;
		case 3:
			document.getElementById("section-title").textContent = "Learn More";
			document.getElementById("section-description").textContent =
				"Description for Learn More section...";
			break;
		default:
			break;
	}

	// Update active state of tabs
	document.querySelectorAll(".tab-button").forEach((tab) => {
		tab.classList.remove("active");
	});
	document.getElementById(`tab-${sectionNumber}`).classList.add("active");
}

var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 3,
      slideShadows: true
    },
    keyboard: {
      enabled: true
    },
    mousewheel: {
      thresholdDelta: 70
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    breakpoints: {
      640: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      },
      1024: {
        slidesPerView: 2
      },
      1560: {
        slidesPerView: 3
      }
    },
    // Add these properties to apply custom classes
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    // Additional custom class to apply
    slideClass: "swiper-slide",
    slideActiveClass: "swiper-slide-active",
    slideVisibleClass: "swiper-slide-visible",
    slideDuplicateClass: "swiper-slide-duplicate",
    slideNextClass: "swiper-slide-next",
    slidePrevClass: "swiper-slide-prev",
    slideInactiveClass: "swiper-slide-inactive"
  });
  






  
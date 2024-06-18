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


document.addEventListener('DOMContentLoaded', function() {
  const products = {
      1: 'Details for product 1',
      2: 'Details for product 2',
      3: 'Details for product 3',
      // Add more product details as needed
  };

  const knowMoreButtons = document.querySelectorAll('.know-more-btn');
  const sidebar = document.getElementById('sidebar');
  const closeBtn = document.getElementById('close-btn');
  const sidebarContent = document.getElementById('sidebar-content');
  const swiperContainer = document.querySelector('.swiper-container');

  knowMoreButtons.forEach(button => {
      button.addEventListener('click', function() {
          const productId = this.getAttribute('data-product-id');
          sidebarContent.innerHTML = products[productId] || 'No details available';
          sidebar.style.display = 'block';
          setTimeout(() => {
              sidebar.classList.add('open');
              swiperContainer.classList.add('reduced-width');
          }, 10);
      });
  });

  closeBtn.addEventListener('click', function() {
      sidebar.classList.remove('open');
      swiperContainer.classList.remove('reduced-width');
      setTimeout(() => {
          sidebar.style.display = 'none';
      }, 300); // Match the transition duration
  });
});




var swiper = new Swiper(".swiper-container", {
  autoplay: {
    delay: 10000,
  },
  clickable: 'true',
  slidesPerGroup: 1,
  effect: "coverflow",
  loop: true,
  centeredSlides: true,
  slideToClickedSlide: true,
  allowTouchMove: false,
  grabCursor: false,
  slidesPerView: "auto",
  initialSlide: 0,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 50,
    modifier: 2,
    slideShadows: true
  },
  pagination: {
    el: ".swiper-pagination"
  }
});





//  // Initialize GSAP and register the plugins
//  gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

//  // Create scroll-triggered animations
//  function createScrollAnimations() {
//    // Select all wave-tube elements
//    const waveTubes = document.querySelectorAll(".wave-tube");

//    waveTubes.forEach((waveTube, index) => {
//      const ball = waveTube.querySelector(".ball");
//      const wavePath = waveTube.querySelector(".wave path");

//      gsap.set(ball, {
//        motionPath: {
//          path: wavePath,
//          align: wavePath,
//          alignOrigin: [0.5, 0.5],
//        },
//      });

//      gsap
//        .timeline({
//          scrollTrigger: {
//            trigger: waveTube,
//            start: "top center",
//            end: "bottom center",
//            scrub: true,
//          },
//        })
//        .to(ball, {
//          motionPath: {
//            path: wavePath,
//            align: wavePath,
//            alignOrigin: [0.5, 0.5],
//          },
//          duration: 1,
//          ease: "none",
//        });
//    });
//  }

//  // Initialize animations
//  createScrollAnimations();
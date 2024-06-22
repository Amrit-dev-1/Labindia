// Tab Section Button


function showSection(sectionNumber) {
  console.log("Section to show:", sectionNumber);

  // Fade out all sections
  gsap.to(".news-section", {
    opacity: 0,
    duration: 0.3,
    onComplete: () => {
      console.log("Fade out complete");

      // Hide all sections after animation completes
      document.querySelectorAll(".news-section").forEach((section) => {
        section.style.display = "none";
      });

      // Show the selected section
      const selectedSection = document.getElementById(`section-${sectionNumber}`);
      selectedSection.style.display = "block";
      console.log("Displaying section:", selectedSection);

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
      document.getElementById("section-description").textContent = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
      break;
    case 2:
      document.getElementById("section-title").textContent = "Resources";
      document.getElementById("section-description").textContent = "Description for Resources section Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
      break;
    case 3:
      document.getElementById("section-title").textContent = "Learn More";
      document.getElementById("section-description").textContent = "Description for Learn More section Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
      break;
    default:
      break;
  }

  // Update active state of tabs
  document.querySelectorAll(".tab-button").forEach((tab) => {
    tab.classList.remove("active");
  });
  document.getElementById(`tab-${sectionNumber}`).classList.add("active");
  console.log("Active tab updated:", `tab-${sectionNumber}`);
}

// Ensure the first tab and section are shown when the page loads
document.addEventListener('DOMContentLoaded', () => {
  showSection(1); // Show the first section by default
});

document.addEventListener('DOMContentLoaded', function () {
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
  const swiperContainer = document.querySelector('.carousel-container');

  knowMoreButtons.forEach(button => {
    button.addEventListener('click', function () {
      const productId = this.getAttribute('data-product-id');
      sidebarContent.innerHTML = products[productId] || 'No details available';
      sidebar.style.display = 'block';
      setTimeout(() => {
        sidebar.classList.add('open');
        swiperContainer.classList.add('reduced-width');
      }, 10);
    });
  });

  closeBtn.addEventListener('click', function () {
    sidebar.classList.remove('open');
    swiperContainer.classList.remove('reduced-width');
    setTimeout(() => {
      sidebar.style.display = 'none';
    }, 300); // Match the transition duration
  });
});




// Create scroll-triggered animations for wave-tube elements
function createScrollAnimations() {
  const waveTubes = document.querySelectorAll(".wave-tube");
  waveTubes.forEach((waveTube) => {
    const ball = waveTube.querySelector(".ball");
    const wavePath = waveTube.querySelector(".wave path");

    gsap.set(ball, {
      xPercent: -50,
      yPercent: -50,
      transformOrigin: "center center",
    });

    gsap.timeline({
      scrollTrigger: {
        trigger: waveTube,
        start: "top center",
        end: "bottom center",
        scrub: 1,
      },
    })
      .to(ball, {
        duration: 100,
        ease: "power3.inOut",
        motionPath: {
          path: wavePath,
          align: wavePath,
          alignOrigin: [0.5, 0.5],
          autoRotate: true,
        },
      });
  });
}

// Initialize the wave-tube animations
createScrollAnimations();

// Define your animation for the element with class 'snake'
gsap.to('.snake', {
  duration: 3,
  ease: 'none',
  y: '-=100',
  onComplete: function () {
    gsap.to('.snake', {
      duration: 2,
      ease: 'power1.inOut',
      x: '+=200',
      onComplete: function () {
        gsap.to('.snake', {
          duration: 3,
          ease: 'power1.inOut',
          y: '-=200',
          x: '+=200',
          onComplete: function () {
            console.log('Animation complete');
          }
        });
      }
    });
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


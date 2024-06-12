document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Horizontal scrolling for sections
    let sections = gsap.utils.toArray(".panel");

    // Main horizontal scroll animation
    const horizontalScroll = gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".custom-container",
            pin: true,
            scrub: 1,
        
            snap: 1 / (sections.length - 1), // Add snapping behavior
               end: () => "+=" + document.querySelector(".custom-container").offsetWidth
            
        }
    });

    // Select panels and animate elements within each panel one by one
    sections.forEach((panel) => {
        const elementsToAnimate = panel.querySelectorAll('.element-to-animate-3');

        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                containerAnimation: horizontalScroll,
                toggleActions: "play reverse play reverse"
            }
        });

        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, x: 100 },  // Start from right with x: 100
            { opacity: 1, x: 1, duration: 2, stagger: 0.1, ease: "power3.out" } // Stagger animations by 0.3s, duration of 2s
        );

        // Panel 4 specific animation for cards
        if (panel.classList.contains('background-color-3')) {
            const newsCards = panel.querySelector('.news-cards');
            gsap.fromTo(newsCards,
                { opacity: 0, x: 100 },  // Start from opacity 0 and far right
                {
                    opacity: 1, x: 0, duration: 2, ease: "power2.out",
                    scrollTrigger: {
                        trigger: panel, // Use the panel itself as the trigger
                        start: "top 95%", // Adjusted for earlier appearance
                        end: "bottom 5%", // Adjusted for later disappearance
                        scrub: 1,
                        toggleActions: "play none none none" // Play animation only once
                    }
                }
            );
        }
    });

    sections.forEach((panel) => {
        const elementsToAnimate = panel.querySelectorAll('.element-to-animate-2');

        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                containerAnimation: horizontalScroll,
                toggleActions: "play reverse play reverse"
            }
        });

        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, x: 100 },  // Start from right with x: 100
            { opacity: 1, x: 1, duration: 2, stagger: 0.3, ease: "power2.out" } // Stagger animations by 0.3s, duration of 2s
        );

        // Panel 4 specific animation for cards
        if (panel.classList.contains('background-color-3')) {
            const newsCards = panel.querySelector('.news-cards');
            gsap.fromTo(newsCards,
                { opacity: 0, x: 100 },  // Start from opacity 0 and far right
                {
                    opacity: 1, x: 0, duration: 2, ease: "power2.out",
                    scrollTrigger: {
                        trigger: panel, // Use the panel itself as the trigger
                        start: "top 95%", // Adjusted for earlier appearance
                        end: "bottom 5%", // Adjusted for later disappearance
                        scrub: 1,
                        toggleActions: "play none none none" // Play animation only once
                    }
                }
            );
        }
    });

    sections.forEach((panel) => {
        const elementsToAnimate = panel.querySelectorAll('.card-content');

        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                containerAnimation: horizontalScroll,
                toggleActions: "play reverse play reverse"
            }
        });

        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, x: 100 },  // Start from right with x: 100
            { opacity: 1, x: 1, duration: 2, stagger: 0.3, ease: "power2.out" } // Stagger animations by 0.3s, duration of 2s
        );

        // Panel 4 specific animation for cards
        if (panel.classList.contains('background-color-3')) {
            const newsCards = panel.querySelector('.news-cards');
            gsap.fromTo(newsCards,
                { opacity: 0, x: 100 },  // Start from opacity 0 and far right
                {
                    opacity: 1, x: 0, duration: 2, ease: "power2.out",
                    scrollTrigger: {
                        trigger: panel, // Use the panel itself as the trigger
                        start: "top 95%", // Adjusted for earlier appearance
                        end: "bottom 5%", // Adjusted for later disappearance
                        scrub: 1,
                        toggleActions: "play none none none" // Play animation only once
                    }
                }
            );
        }
    });

    sections.forEach((panel) => {
        // Select elements to animate
        const elementsToAnimate = panel.querySelectorAll('.blog-animation-1, .blog-animation-2, .blog-animation-3');

        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                containerAnimation: horizontalScroll,
                toggleActions: "play reverse play reverse"
            }
        });

        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, y: 50 }, // Start from opacity 0 and 50px below
            { opacity: 1, y: 0, duration: 1, stagger: 0.3, ease: "power2.out" } // Fade in and move up animation
        );
    });

    sections.forEach((panel) => {
        // Select elements to animate
        const elementsToAnimate = panel.querySelectorAll('.blog-animation-1, .blog-animation-2, .blog-animation-3');
    
        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                toggleActions: "play reverse play reverse" // Play animation when it enters the viewport and reverse when it exits
            }
        });
    
        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, y: 50 }, // Start from opacity 0 and 50px below
            { opacity: 1, y: 0, duration: 1, stagger: 0.3, ease: "power2.out" } // Fade in and move up animation
        );
    });
    
    sections.forEach((panel) => {
        // Select elements to animate
        const elementsToAnimate = panel.querySelectorAll('.element-card-1, .element-card-2, .element-card-3');
    
        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                containerAnimation: horizontalScroll,
                toggleActions: "play reverse play reverse"
            }
        });
    
        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, y: 50 }, // Start from opacity 0 and 50px below
            { opacity: 1, y: 0, duration: 1, stagger: 0.2, ease: "power3.out" } // Fade in and move up animation
        );
    });
    

    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // Create a separate scroll trigger for card content
        const cardContents = document.querySelectorAll('.card-content');
        cardContents.forEach((content) => {
            gsap.fromTo(content,
                { opacity: 0, y: 100 }, // Initial state
                {
                    opacity: 1, y: 0, duration: 0.5, // End state with animation duration of 0.5s
                    scrollTrigger: {
                        trigger: content, // Use the content itself as the trigger
                        start: 'top 90%', // Adjust the start position as needed
                        end: 'bottom 10%', // Adjust the end position as needed
                        scrub: true // Smooth scrubbing effect
                    }
                }
            );
        });
    });  

     // Vertical Slider Setup
            const listItems = gsap.utils.toArray(".carousel__nav__item");
            const slides = gsap.utils.toArray(".carousel__item");

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: ".vertical-slider-panel",
                    start: "top top",
                    end: "+=300%",
                    scrub: 1,
                    pin: ".carousel",
                    snap: 1 / (slides.length - 1),
                }
            });

            gsap.set(slides, { yPercent: 100, opacity: 0 });
            slides.forEach((slide, i) => {
                tl.to(slide, { yPercent: 0, opacity: 1 })
                  .to(slide, { yPercent: -100, opacity: 0 }, "+=3")
                  .add(() => {
                      listItems.forEach((item, j) => {
                          item.classList.toggle("active", j === i);
                      });
                  }, "<");
            });

            listItems.forEach((item, i) => {
                item.addEventListener("click", () => {
                    gsap.to(window, {
                        scrollTo: { y: tl.scrollTrigger.start + (i / (slides.length - 1)) * (tl.scrollTrigger.end - tl.scrollTrigger.start), autoKill: false },
                        duration: 1
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                gsap.registerPlugin(ScrollTrigger);
    
                // Swiper initialization
                const swiper = new Swiper('.mySwiper', {
                    slidesPerView: 1,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    on: {
                        init: function () {
                            gsap.set(this.slides, { opacity: 0, y: 50 });
                        },
                        slideChangeTransitionStart: function () {
                            gsap.fromTo(this.slides[this.activeIndex], { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 0.5 });
                        }
                    }
                });
    
                // ScrollTrigger for the entire panel
                gsap.from(".content-card h2", {
                    scrollTrigger: {
                        trigger: ".background-color-3",
                        start: "top 80%",
                        end: "top 30%",
                        scrub: 1,
                    },
                    y: 50,
                    opacity: 0,
                    duration: 1,
                });
    
                gsap.from(".content-card p", {
                    scrollTrigger: {
                        trigger: ".background-color-3",
                        start: "top 80%",
                        end: "top 30%",
                        scrub: 1,
                    },
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    delay: 0.2
                });
    
                gsap.from(".content-card h1", {
                    scrollTrigger: {
                        trigger: ".background-color-3",
                        start: "top 80%",
                        end: "top 30%",
                        scrub: 1,
                    },
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    delay: 0.4
                });
    
                gsap.from(".swiper-slide", {
                    scrollTrigger: {
                        trigger: ".background-color-3",
                        start: "top 80%",
                        end: "top 30%",
                        scrub: 1,
                    },
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    stagger: 0.2,
                    delay: 0.6
                });
            });

             sections.forEach((panel) => {
        // Select elements to animate
        const elementsToAnimate = panel.querySelectorAll('.element-card-1, .element-card-2, .element-card-3');

        // Create a timeline for each panel
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: panel,
                start: "top 95%", // Adjusted for earlier appearance
                end: "bottom 5%", // Adjusted for later disappearance
                scrub: 1,
                containerAnimation: horizontalScroll,
                toggleActions: "play reverse play reverse"
            }
        });

        // Add animations to the timeline
        tl.fromTo(elementsToAnimate,
            { opacity: 0, y: 50 }, // Start from opacity 0 and 50px below
            { opacity: 1, y: 0, duration: 1, stagger: 0.2, ease: "power3.out" } // Fade in and move up animation
        );
    });

    // Apply ScrollTrigger animations to specific content within the background-color-3 panel
    gsap.from(".background-color-3 .content-card h2", {
        scrollTrigger: {
            trigger: ".background-color-3",
            start: "top 80%",
            end: "top 30%",
            scrub: 1,
        },
        y: 50,
        opacity: 0,
        duration: 1,
    });

    gsap.from(".background-color-3 .content-card p", {
        scrollTrigger: {
            trigger: ".background-color-3",
            start: "top 80%",
            end: "top 30%",
            scrub: 1,
        },
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.2
    });

    gsap.from(".background-color-3 .content-card h1", {
        scrollTrigger: {
            trigger: ".background-color-3",
            start: "top 80%",
            end: "top 30%",
            scrub: 1,
        },
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.4
    });

    gsap.from(".background-color-3 .swiper-slide", {
        scrollTrigger: {
            trigger: ".background-color-3",
            start: "top 80%",
            end: "top 30%",
            scrub: 1,
        },
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        delay: 0.6
    });
});

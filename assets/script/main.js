



// Show cards based on button click
function showCards(buttonIndex) {
    const cardContainer = document.getElementById('card-container');
    const cards = cardContainer.querySelectorAll('.card-content');

    cards.forEach(card => {
        card.style.display = 'none';
    });

    if (buttonIndex === 1) {
        cards.forEach(card => {
            card.style.display = 'block';
        });
    }
}

// Initialize the first button to show cards by default
document.addEventListener("DOMContentLoaded", () => {
    showCards(1);
});


document.addEventListener("DOMContentLoaded", () => {
    const icons = document.querySelectorAll(".icon");

    // Define the masonry grid layout positions
    const positions = [];
    const colCount = 3; // Number of columns in the masonry grid
    const rowCount = Math.ceil(icons.length / colCount);
    const gap = 10; // Gap between images
    const iconSize = 100; // Width/height of each icon (square)

    for (let row = 0; row < rowCount; row++) {
        for (let col = 0; col < colCount; col++) {
            if (positions.length < icons.length) {
                positions.push({ x: col * (iconSize + gap), y: row * (iconSize + gap) });
            }
        }
    }

    // Scatter images randomly on page load
    icons.forEach((icon) => {
        const randomX = Math.random() * 300;
        const randomY = Math.random() * 300;
        gsap.set(icon, {
            x: randomX,
            y: randomY,
        });
    });

    // Rearrange images into masonry grid format with animation after a delay
    gsap.timeline({ defaults: { duration: 2, ease: "power4.inOut" } })
        .to(icons, {
            x: (i) => positions[i].x,
            y: (i) => positions[i].y,
            stagger: 0.1,
            delay: 4, // Delay before rearranging to masonry grid layout
        });

    // Function to randomly interchange positions of two images
    function interchangePositions() {
        const index1 = Math.floor(Math.random() * icons.length);
        let index2 = Math.floor(Math.random() * icons.length);
        while (index2 === index1) {
            index2 = Math.floor(Math.random() * icons.length);
        }

        const tempX = positions[index1].x;
        const tempY = positions[index1].y;

        gsap.to(icons[index1], {
            x: positions[index2].x,
            y: positions[index2].y,
            duration: 1,
            ease: "power4.inOut",
        });

        gsap.to(icons[index2], {
            x: tempX,
            y: tempY,
            duration: 1,
            ease: "power4.inOut",
        });

        // Swap the positions in the positions array
        [positions[index1], positions[index2]] = [positions[index2], positions[index1]];
    }

    // Set an interval to randomly interchange positions every 5 seconds
    setInterval(interchangePositions, 5000);
});






function showCards(buttonNumber) {
    // Get all buttons and cards
    const buttons = document.querySelectorAll('.tab-button');
    const cards = document.querySelectorAll('.card-content');

    // Remove active class from all buttons
    buttons.forEach(button => button.classList.remove('active'));

    // Add active class to the clicked button
    buttons[buttonNumber - 1].classList.add('active');

    // Hide all cards
    cards.forEach(card => {
        if (card.classList.contains('active')) {
            gsap.to(card, {
                opacity: 0,
                duration: 0.3,
                onComplete: () => card.classList.remove('active')
            });
        }
    });

    // Show the correct cards
    document.querySelectorAll(`.card-${buttonNumber}`).forEach(card => {
        card.classList.add('active');
        gsap.fromTo(card, {
            opacity: 0
        }, {
            opacity: 1,
            duration: 0.3
        });
    });
}

// document.addEventListener("DOMContentLoaded", function () {
//     const tl = gsap.timeline({
//         defaults: {
//             duration: 1,
//             ease: "power2.out"
//         }
//     });

//     tl.fromTo(".introduction-content span", {
//         opacity: 0,
//         y: -20
//     }, {
//         opacity: 1,
//         y: 0,
//         delay: 0.5
//     })
//         .fromTo(".introduction-content p", {
//             opacity: 0,
//             y: -20
//         }, {
//             opacity: 1,
//             y: 0
//         }, "-=0.5")
//         .fromTo(".overlap h1", {
//             opacity: 0,
//             y: -20
//         }, {
//             opacity: 1,
//             y: 0
//         }, "-=0.5")
//         .fromTo(".overlap h2", {
//             opacity: 0,
//             y: -20
//         }, {
//             opacity: 1,
//             y: 0
//         }, "-=0.5")
//         .fromTo(".innertext p", {
//             opacity: 0,
//             y: -20
//         }, {
//             opacity: 1,
//             y: 0
//         }, "-=0.5")
//         .fromTo(".innertext .year", {
//             opacity: 0,
//             y: -20
//         }, {
//             opacity: 1,
//             y: 0
//         }, "-=0.5")
//         .fromTo(".intro-btn", {
//             opacity: 0,
//             y: -20
//         }, {
//             opacity: 1,
//             y: 0
//         }, "-=0.5");
// });

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.count');

    counters.forEach(counter => {
        let target = +counter.getAttribute('data-target');

        gsap.to(counter, {
            innerText: target,
            duration: 3,
            ease: "power1.out",
            snap: {
                innerText: 1
            },
            onUpdate: function () {
                counter.innerText = Math.ceil(counter.innerText) + '+';
            }
        });
    });
});

// wave effect

const cardTestimonial = document.querySelector('.card-testimonial');
const waves = document.querySelectorAll('.wave');

cardTestimonial.addEventListener('mouseenter', (e) => {
    const rect = cardTestimonial.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    waves.forEach((wave, index) => {
        wave.style.left = `${x}px`;
        wave.style.top = `${y}px`;
        wave.style.transform = `translate(-50%, -50%) scale(${5 + index * 2})`;
    });
});

cardTestimonial.addEventListener('mouseleave', () => {
    waves.forEach(wave => {
        wave.style.transform = 'translate(-50%, -50%) scale(0)';
    });
});

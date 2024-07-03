

const cards = document.querySelectorAll('.card__2');
let currentIndex = Math.floor(cards.length / 2); // Center card index

function showCard(index) {
    cards.forEach((card, i) => {
        let offset = (i - index) % cards.length;
        if (offset > cards.length / 2) {
            offset -= cards.length;
        } else if (offset < -cards.length / 2) {
            offset += cards.length;
        }

        // Position and style cards
        card.classList.toggle('card__2--active', i === index);
        card.classList.toggle('card__2--inactive', i !== index);

        if (i === index) {
            // Active card
            card.style.transform = `translateY(0) scale(1)`;
            card.style.opacity = 1;
            card.style.zIndex = 2;
        } else if (offset === 1 || offset === -1) {
            // Inactive cards
            card.style.transform = `translateY(${offset * 180}px) scale(0.8)`; 
            card.style.opacity = 0.6; // Slightly higher opacity for better visibility
            card.style.zIndex = 1;
        } else {
            // Hide other cards
            card.style.transform = 'translateY(1000px)'; // Move them far off-screen
            card.style.opacity = 0;
            card.style.zIndex = 0;
        }
    });
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowUp') {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : cards.length - 1;
    } else if (event.key === 'ArrowDown') {
        currentIndex = (currentIndex < cards.length - 1) ? currentIndex + 1 : 0;
    }
    showCard(currentIndex);
});

// Add click event listener to each card
cards.forEach((card, index) => {
    card.addEventListener('click', () => {
        currentIndex = index;
        showCard(currentIndex);
    });
});

// Initial display
showCard(currentIndex);
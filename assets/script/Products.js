document.addEventListener("DOMContentLoaded", function() {
    const knowMoreButtons = document.querySelectorAll(".product-btn");
    const sidebar = document.querySelector(".sidebar");
    const allCards = document.querySelectorAll(".card-testimonial");
    const cardsCount = allCards.length;
    const spacing = 4 + 10; // Adjusted spacing
    let currentIndex = cardsCount - 1; // Last div is the current one

    // Initial positioning of cards
    allCards.forEach((card, i) => {
        card.style.right = `${i * spacing}rem`;
        card.style.transform = 'scale(0.8)'; // Set initial scale for all cards
    });

    // Function to handle slider functionality
    function slideCards() {
        let nextIndex = (currentIndex == 0) ? cardsCount - 1 : currentIndex - 1;

        if (currentIndex == 0) {
            // Reset zIndex values and scale for all cards
            allCards.forEach(card => {
                card.style.zIndex = "1";
                card.style.transform = 'scale(0.8)';
            });
        }

        // Move next card to top and set scale to 1
        allCards[nextIndex].style.right = `${(cardsCount - 1) * spacing}rem`;
        allCards[nextIndex].style.zIndex = "2";
        allCards[nextIndex].style.transform = "scale(1.1)";

        // Move current card to end and set scale to 0.8
        allCards[currentIndex].style.right = `0`;
        allCards[currentIndex].style.zIndex = (currentIndex != 0) ? "0" : "1";
        allCards[currentIndex].style.transform = "scale(0.8)";

        // Move other cards to the left by spacing
        allCards.forEach((card, i) => {
            if (i != currentIndex && i != nextIndex) {
                let currentPosition = parseInt(card.style.right);
                card.style.right = `${currentPosition + spacing}rem`;
                card.style.transform = "scale(0.8)";
            }
        });

        // Update the current index
        currentIndex = nextIndex;
    }

    // Add click event listeners to Know More buttons
    knowMoreButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Toggle sidebar
            sidebar.classList.toggle("open");
        });
    });

    // Add click event listener to sidebar to close it when clicked
    sidebar.addEventListener("click", function() {
        sidebar.classList.remove("open");
    });

    // Add click event listener to cards container to slide cards
    document.querySelector(".container-testimonial").addEventListener("click", function(event) {
        if (sidebar.classList.contains("open")) {
            slideCards();
        }
    });
});

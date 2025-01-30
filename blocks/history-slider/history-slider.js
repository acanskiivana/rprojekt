
document.addEventListener("DOMContentLoaded", function () {
    const slides = [
        { year: "1954", image: "https://picsum.photos/seed/picsum/200/200", description: "Description for 1954" },
        { year: "1960", image: "https://picsum.photos/seed/picsum/200/30", description: "Description for 1960" },
        { year: "1971", image: "https://picsum.photos/seed/picsum/200/400", description: "Description for 1971" },
        { year: "1980", image: "https://picsum.photos/seed/picsum/200/500", description: "Description for 1980" },
        { year: "1990", image: "https://picsum.photos/seed/picsum/200/600", description: "Description for 1990" },
    ];

    let currentIndex = 0;

    // DOM elements
    const largeNumber = document.getElementById("largeNumber");
    const smallNumbersContainer = document.getElementById("smallNumbers");

    const sliderImage = document.getElementById('historyImage');
    const sliderDescription = document.getElementById('historyDescription');


    function renderSlider() {

        // Update the large number
        largeNumber.textContent = slides[currentIndex].year;
        sliderDescription.textContent = slides[currentIndex].description;
        // Clear existing small numbers
        smallNumbersContainer.innerHTML = "";

        // Create next1 element
        const next1 = document.createElement("span");
        next1.className = "history-slider__number history-slider__number--small small next1";
        next1.textContent = slides[(currentIndex + 1) % slides.length].year;

        // Create next2 element
        const next2 = document.createElement("span");
        next2.className = "history-slider__number history-slider__number--small small next2";
        next2.textContent = slides[(currentIndex + 2) % slides.length].year;

        // Append to container
        smallNumbersContainer.appendChild(next1);
        smallNumbersContainer.appendChild(next2);

    }

    function animateSlider() {

        sliderDescription.textContent = slides[currentIndex].description;


        const next1 = smallNumbersContainer.children[0];
        const next2 = smallNumbersContainer.children[1];
        const smallNumbers = document.querySelectorAll('.history-slider__number--small');
        // Animate `next1` to `largeNumber` position
        next1.classList.add('animated-small-number-one');
        largeNumber.classList.add('animated-large-number');

        // Animate `next2` to `next1` position
        next2.classList.add('animated-small-number-two');

        setTimeout(() => {

        }, 500);

        // Match animation duration
        // After animation, update positions and create a new `next2`
        setTimeout(() => {

            // Create a new `next2` element
            const newNext2 = document.createElement("span");
            newNext2.className = "history-slider__number history-slider__number--small small animated-test";
            newNext2.textContent = slides[(currentIndex + 3) % slides.length].year;
            smallNumbersContainer.appendChild(newNext2);

            // Update `largeNumber`
            largeNumber.textContent = next1.textContent;

            largeNumber.classList.remove('animated-large-number');
            smallNumbersContainer.removeChild(next1);
            smallNumbers.forEach(element => {
                element.classList.remove('animated-small-number-two', 'animated-small-number-one');
            });

        }, 500); // Match animation duration
    }

    // Event listeners
    document.querySelector(".history-slider__next").addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % slides.length;
        animateSlider();
    });

    document.querySelector(".history-slider__prev").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        animateSlider();
    });

    // Initial render
    renderSlider();
});


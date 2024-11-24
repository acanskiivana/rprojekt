document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.number-counter__number');

    // Function to update each counter
    const updateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const current = +counter.textContent || 0; // Start from 0 if not set
        const increment = target / 200;

        if (current < target) {
            counter.textContent = Math.ceil(current + increment);
            setTimeout(() => updateCounter(counter), 10);
        } else {
            counter.textContent = target; // Ensure exact target value
        }
    };

    // IntersectionObserver to trigger updateCounter when counter is in view
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
               
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    updateCounter(counter); // Start counting
                    observer.unobserve(counter); // Stop observing after the animation starts
                }
            });
        },
        { rootMargin: "100px", } // Start when 100% of the element is in view
    );

    counters.forEach(counter => {
        observer.observe(counter);
    });
});



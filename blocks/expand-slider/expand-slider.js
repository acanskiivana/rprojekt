document.addEventListener('DOMContentLoaded', function () {

    // Glide slider - expand slide on hover
    var glideImg = new Glide('.glide.glide-expand-img', {
        type: 'carousel',
        startAt: 0,
        perView: 4,
        breakpoints: {
            768: {
                perView: 1 // Show 1 item per view on smaller screens
            }
        }
    });

    // Add class .is-visible on visible glide slides
    const updateVisibleSlides = () => {
        const track = document.querySelector('.glide-expand-img.glide .glide__track');
        const slides = document.querySelectorAll('.glide-expand-img.glide .glide__slide');
        const trackRect = track.getBoundingClientRect();
        let visibleCount = 0;
        slides.forEach(slide => {
            const slideRect = slide.getBoundingClientRect();

            // Ensure the slide is fully or partially visible
            if (
                slideRect.right > trackRect.left &&
                slideRect.left < trackRect.right &&
                visibleCount < 4 // Ensures only 4 slides are marked
            ) {
                slide.classList.add('is-visible');
                visibleCount++;
            } else {
                slide.classList.remove('is-visible');
            }
        });
    };

    glideImg.on(['mount.after', 'run.after', 'resize'], updateVisibleSlides);
    glideImg.mount();

});
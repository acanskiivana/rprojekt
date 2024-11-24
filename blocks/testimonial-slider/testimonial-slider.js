document.addEventListener('DOMContentLoaded', function () {

    // Glide slider - List all testimonial .glide-center 
    var glideCenter = new Glide('.glide.glide-center', {
        type: 'carousel',
        gap: '100px',
        autoplay: 4000,
        focusAt: 'center',
        perView: 2,
    });
    glideCenter.mount();

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
document.addEventListener('DOMContentLoaded', function () {

    // Glide slider
    var glideCenter = new Glide('.glide.glide-center', {
        type: 'carousel',
        gap: '100px',
        autoplay: 4000,
        perTouch: 1,
        animationDuration: 1000,
        focusAt: 'center',
        perView: 2,
        breakpoints: {
            1024: {
                gap: '50px',
            }
        }
    });
    glideCenter.mount();

});
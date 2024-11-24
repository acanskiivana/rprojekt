document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.flow-glide').forEach(function (slider) {
    new Glide(slider, {
      type: 'carousel',    
      startAt: 0,          
      perView: 5,          
      focusAt: 'center',  
      gap: 20,             
      autoplay: 1,      
      animationDuration: 8000, 
      animationTimingFunc: 'linear',
      breakpoints: {
        768: {
            perView: 2, // Show 1 item per view on smaller screens
            gap: 10,
        }
    }
    }).mount();
  });
});
  
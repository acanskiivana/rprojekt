<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>


<!-- Flow slider with images -->

<!-- cf repeater  -->
<?php if ( have_rows('add_flow_slide') ) : ?>

  <div class="glide flow-glide flow-slider">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">

        <?php while( have_rows('add_flow_slide') ) : the_row(); 

          // Acf sub fields 
          $flow_slider_image= get_sub_field('flow_slider_image_logo'); 
          $flow_slider_link = get_sub_field('add_flow_image_link'); 
          ?>
          <?php if ( $flow_slider_image) : ?>
            <li class="glide__slide flow-slider__slide">
              <?php echo $flow_slider_link ? ' <a class="flow-slider__link" target="_blank" href=" ' . $flow_slider_link . '">' : '<div>'?>
                  <img class="flow-slider__image" width="150" height="70" src="<?php echo esc_html($flow_slider_image['url']) ?>" alt="<?php echo esc_attr($flow_slider_image['alt']); ?>">
                <?php echo $flow_slider_link ? ' </a>' : '</div>'?>
            </li>
          <?php endif; ?>
        <?php endwhile; ?>

      </ul>
    </div>
  </div>

<?php endif; ?>

<!-- Flow slider  -->







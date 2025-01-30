<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>

<?php 
// Fetch ACF fields 
$testimonial_section_title = get_field('testimonail_section_title', 'option');
?>

<!-- Testimonial slider  -->
<section class="">
    <h2><?php echo esc_html( $testimonial_section_title ); ?></h2>

    <?php if ( have_rows('testimonial_slide', 'option') ) : ?>
        <div class="glide glide-center testimonial">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php while( have_rows('testimonial_slide', 'option') ) : the_row(); ?>
                   
                        <?php 
                        // Fetch ACF fields 
                        $testimonial_quote = get_sub_field('testimonial_quote', 'option');
                        $testimonial_author_name = get_sub_field('testimonial_author_name', 'option');
                        $testimonial_author_job_position = get_sub_field('testimonial_author_job_position', 'option');
                        ?>

                        <li class="glide__slide testimonial__slide">
                            <?php if(  $testimonial_quote ): ?>
                                <p class="testimonial__quote"><?php echo esc_html( $testimonial_quote ); ?></p>
                            <?php endif; ?>
                            <?php if(  $testimonial_quote ): ?>
                                <h6 class="testimonial__author-name"><?php echo esc_html( $testimonial_author_name ); ?></h6>
                            <?php endif; ?>
                            <?php if(  $testimonial_author_job_position ): ?>
                                <h6 class="testomonial__author-job"><?php echo esc_html( $testimonial_author_job_position ); ?></h6>
                            <?php endif; ?>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </div>

    <?php endif; ?>
</section>

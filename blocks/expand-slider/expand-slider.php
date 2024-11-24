<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>

<?php // Load values and assign defaults. ?>


<?php 
//List all custom post type - services
$services_arg = array (
    'post_type' => 'rp_services', //Custom post type slug
    'post_status' => 'publish',
    'post_per_page' => -1,
);

$query_services = new WP_Query( $services_arg );
?>

<!-- Check if custom post type services has posts  -->
<?php if ($query_services->have_posts()) : ?>

    <section class="container services">
        <div class="glide glide-expand-img">
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;">Previous</button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">Next</button>
            </div>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php 
                    while ($query_services->have_posts()) : 
                        $query_services->the_post(); ?>  
                        <li class="glide__slide service" >
                            <a href="/" class="service__link" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'medium') : get_template_directory_uri() . '/images/default-bg.jpg'; ?>');">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </a>
                        </li>
                    <?php 
                    endwhile; 
                    ?> 
                </ul>
            </div>
        </div>
    </section> 

<?php 
endif;
wp_reset_postdata(); ?>
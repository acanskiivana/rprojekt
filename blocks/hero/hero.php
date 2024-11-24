<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}

$background_image = get_field('hero-backround-image');

if( $background_image ) {
    $show_background_image = $background_image['url'];
} else {
    $show_background_image;
}

?>

<section class="hero" style="background-image: url('<?php echo esc_url($show_background_image); ?>');">
    <div class="container grid-container">
        <div class="hero__content col-8 col-lg-3">
            <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit.!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe labore commodi fuga assumenda aliquam laborum hic, neque animi voluptates ipsum?</p>
        </div>
    </div>
</section>




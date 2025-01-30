<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}

// Get ACF fields
$hero_title = get_field('hero-title');
$hero_text = get_field('hero-text');
$hero_image = get_field('hero-image');


if ( ! function_exists( 'get_heroimage_url_by_size') ) {
    function get_heroimage_url_by_size($image_id, $size) {
        return $image_id ? wp_get_attachment_image_url( $image_id, $size ) : ''; 
    }
}

$hero_mobile_image = get_heroimage_url_by_size($hero_image, 'medium');
$hero_tablet_image = get_heroimage_url_by_size($hero_image, 'large'); 
$hero_desktop_image = get_heroimage_url_by_size($hero_image, 'huge-image');
$hero_alt_text = $hero_image ? get_post_meta( $hero_image,'_wp_attachment_image_alt', true ) : 'Hero image';
?>

<!-- Hero section  -->
<section class="hero relative">
    <div class="container hero__container">
        <div class="hero__content">
            <?php if ( $hero_title ) : ?>
                <h1><?php echo esc_html($hero_title); ?></h1>
            <?php endif; ?>
            
            <?php if ( $hero_text ) : ?>
                <p><?php echo esc_html($hero_text); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($hero_image): ?>
        <picture class="background-image">
            <!-- Mobile Image -->
            <source media="(max-width: 600px)" srcset="<?php echo esc_url( $hero_mobile_image ); ?>">
            <!-- Desktop Image -->
            <source media="(max-width: 1024px)" srcset="<?php echo esc_url( $hero_tablet_image ); ?>">
            <!-- Fallback Image -->
            <img aria-hidden="true" loading="lazy" decoding="async" src="<?php echo esc_url( $hero_desktop_image ); ?>" width="1920" height="1280" alt="<?php echo esc_attr( $hero_alt_text ); ?>">
        </picture>
    <?php endif;?>
</section>
<!-- End hero secton  -->






<?php
// Ensure ACF is installed.
if( !function_exists('get_field') ) {
    return;
}
?>

<?php 
// Fetch ACF fields 
$two_columns_title = get_field('two_columns_title');
$two_columns_content = get_field('two_columns_content');
$two_columns_image = get_field('two_columns_image');
$two_columns_button_link = get_field('two_columns_button_link');
?>

<section class="two-columns container grid-container">

    <!-- Content column -->
    <div class="col-12 col-md-6 col-lg-7">
        <?php if ( $two_columns_title) : ?>
            <h2><?php echo esc_html($two_columns_title); ?></h2>
        <?php endif; ?>

        <?php if ( $two_columns_content) : ?>
            <p><?php echo esc_html($two_columns_content); ?></p>
        <?php endif; ?>

        <?php if ( $two_columns_button_link ) : ?>
            <a href="<?php echo esc_url($two_columns_button_link['url']); ?>" target=" <?php echo esc_attr($two_columns_button_link['target'] ? $two_columns_button_link['target'] : '_self'); ?>"><?php echo esc_html($two_columns_button_link['title']); ?></a>
        <?php endif; ?>
    </div>

    <!-- Image column -->
    <?php if ( $two_columns_image ) : 
          $size = 'large'; ?>
          <div class="col-12 col-md-6 col-lg-4">
            <img src="<?php echo esc_url($two_columns_image['sizes'][ $size ]); ?>" alt="<?php echo esc_attr($two_columns_image['alt']); ?>" />
        </div>
    <?php endif;?>
  
</section>